if (typeof sketch === 'undefined') var sketch = {};

(function(root) { 'use strict';

root.module.add(function(root, doc) {

	var addContextMenu = root.ui.contextMenu.add;

	/* Main menu
	---------------------------------------------------- */
	var items = [];
	items.push({
		label: 'New File',
		onclick: function() {
			root.save.confirm({
				oncontinue: function() {
					root.exec('new');
					root.ui.log(lang.translate('new-doc-created'));
				},
				onrequestsave: function() {
					root.exec('save-server');
				}
			});
		}
	});
	items.push({
		label: 'Add Page',
		onclick: function() {
			root.exec('add-page');
		}
	});
	///
	addContextMenu('file-new', items);


	/* Main menu
	---------------------------------------------------- */
	var items = [];
	items.push({
		label: 'Save',
		onclick: function() {
			root.exec('save');
		}
	});
	items.push({
		label: 'Save to Server',
		onclick: function() {
			root.exec('save-server');
		}
	});
	items.push({
		label: 'Download PDF',
		onclick: function() {
			root.download.pdf();
		}
	});
	items.push({
		label: 'Print',
		onclick: function() {
			root.print();
		}
	});
	///
	addContextMenu('file-save', items);


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
			doc.scene.selectAll();
			root.exec('object-copy');
		}
	});
	items.push({
		label: 'Cut all',
		onclick: function() {
			doc.scene.selectAll();
			root.exec('object-cut');
		}
	});
	items.push({
		label: 'Paste',
		onclick: function() {
			root.exec('object-paste');
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
	addContextMenu('selectDefault', items);


	/* Select.js - TreeMenu
	---------------------------------------------------- */
	var items = [];
	items.push({
		label: 'Layer To Back',
		onclick: function() {
			root.exec('object-to-back');
		}
	});
	items.push({
		label: 'Layer To Front',
		onclick: function() {
			root.exec('object-to-front');
		}
	});
	items.push({
		label: 'Layer Backwards',
		onclick: function() {
			root.exec('object-backwards');
		}
	});
	items.push({
		label: 'Layer Forwards',
		onclick: function() {
			root.exec('object-forwards');
		}
	});
	items.push({
		label: 'Delete',
		onclick: function() {
			root.exec('object-delete');
		}
	});
	///
	addContextMenu('layers', items);

	/* Select.js - Multiple Selections
	---------------------------------------------------- */
	var items = [];
/*	items.push({
		label: 'Group Layers',
		onclick: function() {
			root.exec('object-group');
		}
	});*/
	items.push({
		label: 'Layer To Back',
		onclick: function() {
			root.exec('object-to-back');
		}
	});
	items.push({
		label: 'Layer To Front',
		onclick: function() {
			root.exec('object-to-front');
		}
	});
	items.push({
		label: 'Layer Backwards',
		onclick: function() {
			root.exec('object-backwards');
		}
	});
	items.push({
		label: 'Layer Forwards',
		onclick: function() {
			root.exec('object-forwards');
		}
	});
	items.push({
		label: 'Cut',
		onclick: function() {
			root.exec('object-cut');
		}
	});
	items.push({
		label: 'Copy',
		onclick: function() {
			root.exec('object-copy');
		}
	});
	items.push({
		label: 'Paste',
		onclick: function() {
			root.exec('object-paste');
		}
	});
	items.push({
		label: 'Delete',
		onclick: function() {
			root.exec('object-delete');
		}
	});
	///
	addContextMenu('selectSingle', items);
	addContextMenu('selectMultiple', items);
});
	
})(sketch);