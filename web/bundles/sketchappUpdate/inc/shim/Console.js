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