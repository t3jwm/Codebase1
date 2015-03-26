/**
 * @license -------------------------------------------------------------------
 *    module: ClassList shim
 *       src: https://github.com/remy/polyfills
 *   authors: Remy Sharp
 * copyright: (c) 2010 Remy Sharp, <http://remysharp.com>
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

;(function () {
	if (typeof window.Element === "undefined" || "classList" in document.documentElement) {
		return;
	}
	var prototype = Array.prototype,
		slice = prototype.slice,
		push = prototype.push,
		splice = prototype.splice,
		join = prototype.join;

	function DOMTokenList(el) {
		this._element = el;
		if (el.className != this._classCache) {
			this._classCache = el.className;
			if (!this._classCache) return;
			// The className needs to be trimmed and split on whitespace
			// to retrieve a list of classes.
			var classes = this._classCache.replace(/^\s+|\s+$/g, '').split(/\s+/),
				i;
			for (i = 0; i < classes.length; i++) {
				push.call(this, classes[i]);
			}
		}
	};

	function setToClassName(el, classes) {
		el.className = classes.join(' ');
	}
	DOMTokenList.prototype = {
		add: function (token) {
			if (this.contains(token)) return;
			push.call(this, token);
			setToClassName(this._element, slice.call(this, 0));
		},
		contains: function (token) {
			return Array.prototype.indexOf.call(this, token) !== -1;
		},
		item: function (index) {
			return this[index] || null;
		},
		remove: function (token) {
			var i = Array.prototype.indexOf.call(this, token);
			if (i === -1) {
				return;
			}
			splice.call(this, i, 1);
			setToClassName(this._element, slice.call(this, 0));
		},
		toString: function () {
			return join.call(this, ' ');
		},
		toggle: function (token) {
			if (!this.contains(token)) {
				this.add(token);
			} else {
				this.remove(token);
			}
			return this.contains(token);
		}
	};
	window.DOMTokenList = DOMTokenList;

	function defineElementGetter(obj, prop, getter) {
		if (Object.defineProperty) {
			Object.defineProperty(obj, prop, {
				get: getter
			})
		} else {
			obj.__defineGetter__(prop, getter);
		}
	}
	defineElementGetter(Element.prototype, 'classList', function () {
		return new DOMTokenList(this);
	});
})();