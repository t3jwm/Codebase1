if (typeof sketch === 'undefined') sketch = {};
if (typeof (sketch.lib) === 'undefined') sketch.lib = {};

(function(root) { 'use strict';

root.lib.image = {
	defaultCategory: '',
	dir: 'image',
	thumbnail: { 
		_width: 44, // image preview dimensions
		_height: 44,
		columns: 4, 
		rows: 4, 
		padding: 4
	},
	tree: {}
};

root.lib.clipart = {
	defaultCategory: 'animals',
	dir: 'clipart',
	thumbnail: { 
		_width: 44, // image preview dimensions
		_height: 44,
		columns: 4, 
		rows: 4, 
		padding: 4
	},
	tree: {}
};

})(sketch);