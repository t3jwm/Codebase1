/*
	----------------------------------------------------------
	Scroller.js : 0.1 : 2014-11-26 : https://sketch.io
	----------------------------------------------------------
	Copyright 2010-2015 SketchIO. All rights reserved.
	----------------------------------------------------------
	dom.scrollTo({
		target: container,
		top: 100,
		left: 100,
		duration: 250, // in ms
		callback: function() {
			console.log('done!');
		}
	});
*/

if (typeof sketch === 'undefined') sketch = {};

(function(root) { 'use strict';

    var dom = root.dom || (root.dom = {});

    dom.scrollTo = function(params) {
        params = params || {};
        var callback = params.callback;
        var target = params.target;
        var top = params.top;
        var left = params.left;
        var duration = params.duration || 250;
        ///
		var startTop = target.scrollTop;
		var startLeft = target.scrollLeft;
		var targetTop = Math.abs(top) === top ? top : startTop;
		var targetLeft = Math.abs(left) === left ? left : startLeft;
		var distTop = Math.abs(startTop - targetTop);
		var distLeft = Math.abs(startLeft - targetLeft);
		///
        var dist = Math.abs(Math.max(distLeft, distTop));
        if (dist < 100) {
            target.scrollLeft = targetLeft;
            target.scrollTop = targetTop;
            return;
        }
		///
		var steps = 25;
        var speed = duration / steps;
        ///
        var stepTop = distTop / steps * (targetTop > startTop ? 1.0 : -1.0);
        var stepLeft = distLeft / steps * (targetLeft > startLeft ? 1.0 : -1.0);
        var posTop = startTop;
        var posLeft = startLeft;
        ///
        var timer = 0;
		for (var n = 0; n <= steps; n ++) {
			createTimeout(target, posTop, posLeft, timer * speed);
			posLeft += stepLeft;
			posTop += stepTop;
			timer++;
		}
		if (callback) {
			setTimeout(callback, timer * speed);
		}
    };

    var createTimeout = function(target, top, left, delay) {
    	setTimeout(function() {
			target.scrollTop = (top + 0.5) >> 0;
			target.scrollLeft = (left + 0.5) >> 0;
		}, delay);
	};

})(sketch);