Object.keys = Object.keys || function(obj) { // <= IE8
	var keys = [];
	for (var i in obj) {
		if (obj.hasOwnProperty(i)) {
			keys.push(i);
		}
	}
	return keys;
};