// Console.log - MIT
// https://github.com/paulmillr/console-polyfill
(function(con) { 'use strict';
	var prop, method;
	var empty = {};
	var dummy = function() {};
	var properties = 'memory'.split(',');
	var methods = ('assert,clear,count,debug,dir,dirxml,error,exception,group,' +
		 'groupCollapsed,groupEnd,info,log,markTimeline,profile,profiles,profileEnd,' +
		 'show,table,time,timeEnd,timeline,timelineEnd,timeStamp,trace,warn').split(',');
	while (prop = properties.pop()) if (!con[prop]) con[prop] = empty;
	while (method = methods.pop()) if (!con[method]) con[method] = dummy;
})(self.console = self.console || {});

// Console.image - WTFPL
// https://github.com/adriancooney/console.image
self.console.image = function(element) {
	function process(element, src) {
		var width = element.width;
		var height = element.height;
		var dim = 'font-size: 1px; padding: ' + Math.floor(height / 2.0) + 'px ' + Math.floor(width / 2.0) + 'px; line-height: ' + height + 'px;';
		console.log('%c+', dim + 'background: url(' + src + '); background-size: ' + width + 'px ' + height + 'px; color: transparent;', arguments);
	};
	///
	var name = element.nodeName;
	if (name === 'IMG') {
		process(element, element.src);
	} else if (name === 'CANVAS') {
		process(element, element.toDataURL());
	} else {
		console.log(element);
	}
};