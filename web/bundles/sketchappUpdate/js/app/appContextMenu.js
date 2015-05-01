if (typeof sketch === 'undefined') var sketch = {};

(function(root) { 'use strict';

root.queue.module.add(function(root, doc) {

	var createContextMenu = root.ui.contextMenu.create;

	/* Select.js - No Selection
	---------------------------------------------------- */
	var items = [];
	items.push({
		label: 'Select all',
		onclick: function() {
			root.exec('select-all');
		}
	});
	items.push({
		label: 'Copy all',
		onclick: function() {
			root.exec('select-all');
			root.exec('layer-copy');
		}
	});
	items.push({
		label: 'Cut all',
		onclick: function() {
			root.exec('select-all');
			root.exec('layer-cut');
		}
	});
	items.push({
		label: 'Paste',
		onclick: function() {
			root.exec('layer-paste');
		}
	});
	items.push({
		label: 'Undo',
		onclick: function() {
			root.exec('undo');
		}
	});
	items.push({
		label: 'Redo',
		onclick: function() {
			root.exec('redo');
		}
	});
	///
	root.ui.menu.selectDefault = createContextMenu(items);

	/* Select.js - TreeMenu
	---------------------------------------------------- */
	var items = [];
	items.push({
		label: 'Layer To Back',
		onclick: function() {
			root.exec('layer-to-back');
		}
	});
	items.push({
		label: 'Layer To Front',
		onclick: function() {
			root.exec('layer-to-front');
		}
	});
	items.push({
		label: 'Layer Backwards',
		onclick: function() {
			root.exec('layer-backwards');
		}
	});
	items.push({
		label: 'Layer Forwards',
		onclick: function() {
			root.exec('layer-forwards');
		}
	});
	items.push({
		label: 'Delete',
		onclick: function() {
			root.exec('layer-delete');
		}
	});
	///
	root.ui.menu.layers = createContextMenu(items);

	/* Select.js - Multiple Selections
	---------------------------------------------------- */
	var items = [];
/*	items.push({
		label: 'Group Layers',
		onclick: function() {
			root.exec('layer-group');
		}
	});*/
	items.push({
		label: 'Layer To Back',
		onclick: function() {
			root.exec('layer-to-back');
		}
	});
	items.push({
		label: 'Layer To Front',
		onclick: function() {
			root.exec('layer-to-front');
		}
	});
	items.push({
		label: 'Layer Backwards',
		onclick: function() {
			root.exec('layer-backwards');
		}
	});
	items.push({
		label: 'Layer Forwards',
		onclick: function() {
			root.exec('layer-forwards');
		}
	});
	items.push({
		label: 'Cut',
		onclick: function() {
			root.exec('layer-cut');
		}
	});
	items.push({
		label: 'Copy',
		onclick: function() {
			root.exec('layer-copy');
		}
	});
	items.push({
		label: 'Paste',
		onclick: function() {
			root.exec('layer-paste');
		}
	});
	items.push({
		label: 'Delete',
		onclick: function() {
			root.exec('layer-delete');
		}
	});
	///
	root.ui.menu.select = // Single selections
	root.ui.menu.selectMultiple = createContextMenu(items);
});
	
})(sketch);