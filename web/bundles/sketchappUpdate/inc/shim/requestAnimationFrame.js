/**
 * @license -------------------------------------------------------------------
 *    module: AnimationFrame shim
 *       src: https://github.com/kof/animationFrame
 *    author: Oleg Slobodskoi
 * copyright: (c) 2013 Oleg Slobodskoi
 *   license: MIT
 * -------------------------------------------------------------------
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

;(function(window) { 'use strict'

var nativeRequestAnimationFrame,
    nativeCancelAnimationFrame

// Grab the native request and cancel functions.
;(function() {
    var i,
        vendors = ['webkit', 'moz', 'ms', 'o'],
        top

    // Test if we are within a foreign domain. Use raf from the top if possible.
    try {
        // Accessing .name will throw SecurityError within a foreign domain.
        window.top.name
        top = window.top
    } catch(e) {
        top = window
    }

    nativeRequestAnimationFrame = top.requestAnimationFrame
    nativeCancelAnimationFrame = top.cancelAnimationFrame || top.cancelRequestAnimationFrame


    // Grab the native implementation.
    for (i = 0; i < vendors.length && !nativeRequestAnimationFrame; i++) {
        nativeRequestAnimationFrame = top[vendors[i] + 'RequestAnimationFrame']
        nativeCancelAnimationFrame = top[vendors[i] + 'CancelAnimationFrame'] ||
            top[vendors[i] + 'CancelRequestAnimationFrame']
    }

    // Test if native implementation works.
    // There are some issues on ios6
    // http://shitwebkitdoes.tumblr.com/post/47186945856/native-requestanimationframe-broken-on-ios-6
    // https://gist.github.com/KrofDrakula/5318048
    nativeRequestAnimationFrame && nativeRequestAnimationFrame(function() {
        AnimationFrame.hasNative = true
    })
}())

/**
 * Animation frame constructor.
 *
 * Options:
 *   - `useNative` use the native animation frame if possible, defaults to true
 *   - `frameRate` pass a custom frame rate
 *
 * @param {Object|Number} options
 */
function AnimationFrame(options) {
    if (!(this instanceof AnimationFrame)) return new AnimationFrame(options)
    options || (options = {})

    // Its a frame rate.
    if (typeof options == 'number') options = {frameRate: options}
    options.useNative != null || (options.useNative = true)
    this.options = options
    this.frameRate = options.frameRate || AnimationFrame.FRAME_RATE
    this._frameLength = 1000 / this.frameRate
    this._isCustomFrameRate = this.frameRate !== AnimationFrame.FRAME_RATE
    this._timeoutId = null
    this._callbacks = {}
    this._lastTickTime = 0
    this._tickCounter = 0
}

/**
 * Default frame rate used for shim implementation. Native implementation
 * will use the screen frame rate, but js have no way to detect it.
 *
 * If you know your target device, define it manually.
 *
 * @type {Number}
 * @api public
 */
AnimationFrame.FRAME_RATE = 60

/**
 * Replace the globally defined implementation or define it globally.
 *
 * @param {Object|Number} [options]
 * @api public
 */
AnimationFrame.shim = function(options) {
    var animationFrame = new AnimationFrame(options)

    window.requestAnimationFrame = function(callback) {
        return animationFrame.request(callback)
    }
    window.cancelAnimationFrame = function(id) {
        return animationFrame.cancel(id)
    }

    return animationFrame
}

/**
 * Crossplatform Date.now()
 *
 * @return {Number} time in ms
 * @api public
 */
AnimationFrame.now = Date.now || function() {
    return (new Date).getTime()
}

/**
 * Replacement for PerformanceTiming.navigationStart for the case when
 * performance.now is not implemented.
 *
 * https://developer.mozilla.org/en-US/docs/Web/API/PerformanceTiming.navigationStart
 *
 * @type {Number}
 * @api public
 */
AnimationFrame.navigationStart = AnimationFrame.now()

/**
 * Crossplatform performance.now()
 *
 * https://developer.mozilla.org/en-US/docs/Web/API/Performance.now()
 *
 * @return {Number} relative time in ms
 * @api public
 */
AnimationFrame.perfNow = function() {
    if (window.performance && window.performance.now) return window.performance.now()
    return AnimationFrame.now() - AnimationFrame.navigationStart
}

/**
 * Is native animation frame implemented. The right value is set during feature
 * detection step.
 *
 * @type {Boolean}
 * @api public
 */
AnimationFrame.hasNative = false

/**
 * Request animation frame.
 * We will use the native RAF as soon as we know it does works.
 *
 * @param {Function} callback
 * @return {Number} timeout id or requested animation frame id
 * @api public
 */
AnimationFrame.prototype.request = function(callback) {
    var self = this,
        delay

    // Alawys inc counter to ensure it never has a conflict with the native counter.
    // After the feature test phase we don't know exactly which implementation has been used.
    // Therefore on #cancel we do it for both.
    ++this._tickCounter

    if (AnimationFrame.hasNative && self.options.useNative && !this._isCustomFrameRate) {
        return nativeRequestAnimationFrame(callback)
    }

    if (!callback) throw new TypeError('Not enough arguments')

    if (this._timeoutId == null) {
        // Much faster than Math.max
        // http://jsperf.com/math-max-vs-comparison/3
        // http://jsperf.com/date-now-vs-date-gettime/11
        delay = this._frameLength + this._lastTickTime - AnimationFrame.now()
        if (delay < 0) delay = 0

        this._timeoutId = window.setTimeout(function() {
            var id

            self._lastTickTime = AnimationFrame.now()
            self._timeoutId = null
            ++self._tickCounter

            for (id in self._callbacks) {
                if (self._callbacks[id]) {
                    if (AnimationFrame.hasNative && self.options.useNative) {
                        nativeRequestAnimationFrame(self._callbacks[id])
                    } else {
                        self._callbacks[id](AnimationFrame.perfNow())
                    }
                    delete self._callbacks[id]
                }
            }
        }, delay)
    }

    this._callbacks[this._tickCounter] = callback
    return this._tickCounter
}

/**
 * Cancel animation frame.
 *
 * @param {Number} timeout id or requested animation frame id
 *
 * @api public
 */
AnimationFrame.prototype.cancel = function(id) {
    if (AnimationFrame.hasNative && this.options.useNative) nativeCancelAnimationFrame(id)
    delete this._callbacks[id]
}


// Support commonjs wrapper, amd define and plain window.
if (typeof exports == 'object' && typeof module == 'object') {
    module.exports = AnimationFrame
} else if (typeof define == 'function' && define.amd) {
    define(function() { return AnimationFrame })
} else {
    window.AnimationFrame = AnimationFrame
}

if (!window.requestAnimationframe || !window.cancelAnimationFrame) {
	AnimationFrame.shim();
}

}(window));