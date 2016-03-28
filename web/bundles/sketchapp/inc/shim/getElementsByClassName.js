var DOMElement = {
	extend: function (name, fn) {
		if (document[name]) return;
		if (typeof (HTMLElement) !== "undefined") {
			HTMLElement.prototype[name] = fn;
		} else {
			var _createElement = document.createElement;
			document.createElement = function (tag) {
				var _elem = _createElement(tag);
				_elem[name] = fn;
				return _elem;
			}
			///
			var _getElementById = document.getElementById;
			document.getElementById = function (id) {
				var _elem = _getElementById(id);
				if (!_elem) {
					console.log("element '" + id + "' does not exist.");
					return;
				}
				_elem[name] = fn;
				return _elem;
			}
			///
			var _getElementsByTagName = document.getElementsByTagName;
			document.getElementsByTagName = function (tag) {
				var _arr = _getElementsByTagName(tag);
				for (var _elem = 0; _elem < _arr.length; _elem++) {
					_arr[_elem][name] = fn;
				}
				return _arr;
			}
			///
			document[name] = fn;
		}
	}
};

/*
	Developed by Robert Nyman, http://www.robertnyman.com
	Code/licensing: http://code.google.com/p/getelementsbyclassname/
*/	

var getElementsByClassName = function (className, tag){
	if (document.evaluate) {alert(10)
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			elm = elm || document;
			var classes = className.split(" "),
				classesToCheck = "",
				xhtmlNamespace = "http://www.w3.org/1999/xhtml",
				namespaceResolver = (document.documentElement.namespaceURI === xhtmlNamespace)? xhtmlNamespace : null,
				returnElements = [],
				elements,
				node;
			for(var j=0, jl=classes.length; j<jl; j+=1){
				classesToCheck += "[contains(concat(' ', @class, ' '), ' " + classes[j] + " ')]";
			}
			try	{
				elements = document.evaluate(".//" + tag + classesToCheck, elm, namespaceResolver, 0, null);
			}
			catch (e) {
				elements = document.evaluate(".//" + tag + classesToCheck, elm, null, 0, null);
			}
			while ((node = elements.iterateNext())) {
				returnElements.push(node);
			}
			return returnElements;
		};
	}
	else {
		getElementsByClassName = function (className, tag, elm) {
			tag = tag || "*";
			elm = elm || document;
			var classes = className.split(" "),
				classesToCheck = [],
				elements = (tag === "*" && elm.all)? elm.all : elm.getElementsByTagName(tag),
				current,
				returnElements = [],
				match;
			for(var k=0, kl=classes.length; k<kl; k+=1){
				classesToCheck.push(new RegExp("(^|\\s)" + classes[k] + "(\\s|$)"));
			}
			for(var l=0, ll=elements.length; l<ll; l+=1){
				current = elements[l];
				match = false;
				for(var m=0, ml=classesToCheck.length; m<ml; m+=1){
					match = classesToCheck[m].test(current.className);
					if (!match) {
						break;
					}
				}
				if (match) {
					returnElements.push(current);
				}
			}
			return returnElements;
		};
	}
	return getElementsByClassName(className, tag, this);
};

DOMElement.extend("getElementsByClassName", getElementsByClassName);
