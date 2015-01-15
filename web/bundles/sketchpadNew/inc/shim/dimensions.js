if (typeof(window.innerHeight) === "undefined") {
	(function() {
		var type;
		var onresize = function() {
			if (type === 1 || (document.body && document.body.offsetWidth)) {
				type = 1;
				window.innerWidth = document.body.offsetWidth;
				window.innerHeight = document.body.offsetHeight;
			} else if (type === 2 || (document.compatMode === 'CSS1Compat' && document.documentElement && document.documentElement.offsetWidth)) {
				type = 2;
				window.innerWidth = document.documentElement.offsetWidth;
				window.innerHeight = document.documentElement.offsetHeight;
			}
		};
		///
		window.attachEvent("resize", onresize);
		onresize();
	})();
}