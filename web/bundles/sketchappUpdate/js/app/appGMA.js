/*
	----------------------------------------------------------
	GMA: EXTRAS
	----------------------------------------------------------
		* PDF Export
			- fix pdf with new pages attribute... setSize should update page? how to work, meh?
			- export each page individually
			- find best fitting boundingBox for each page, crop, and place into document
	----------------------------------------------------------
		* Scrolling
			- stylize scrollbars (perfect scroll?)
	----------------------------------------------------------
		* doc.pages = [];
	----------------------------------------------------------
*/

(function(root) {

var doc;
var dom = root.dom;
var lang = root.lang;
var util = root.util;
var ui = root.ui;
///
var docWidth = 816; // equivalent to 8.5 x 11 inches in pixels at 72DPI
var docHeight = 1056;

eventjs.add(window, 'load', function() {
	var query = root.loc.getSearch();
	///
	root.construct({
		container: '.sk-canvas', // DOM element where sketchpad lives
		focusElement: document.body,
		scrollElement: '.sk-canvas',
		///
		onready: onReady,
		feature: { // features enabled in sketchAPI
			lang: 'en', //'auto', // default language
			debug: !!query.debug, // debug mode
			debugCache: !!query.debugCache, // debug cache mode
			preventScroll: !query.debug, // prevent body scrolling (used on mobile or apps)
			preventTouch: !query.debug, // meh
			///
			prefix: 'gma', // prefix used in localStorage
			doc: {
				background: '#fff', // w3 style background for sketch
				width: docWidth,
				height: docHeight,
				units: 'px',
				gestureScroll: true, // gesture to scroll document on touch device
				gestureTransform: false // beta
			},
			palette: {
				colorPicker: {
					eyeDropper: true, // enable eye dropper support
					hexInput: true // enable hex input
				},
				drag: true,
				grid: true, // display palette
 				header: false
			},
			style: {
				blend: false,
				lineJoin: true,
				gradient: false,
				pattern: false,
				color: {
					fill: '#2b65a9',
					stroke: '#000'
				}
			},
			io: {
				pdf: true // enable importing PDFs
			},
			ui: {
				listText: 'dropmenu',
				cursorDynamic: true,
				tooltips: true
			},
			pane: {
				tabs: true,
				position: 'left',
				configure: true,
				layers: true,
				history: true
			},
			canvas: {
// 				usePixelRatio: true,
				usePixelRatioDesktop: true,
				useBGSave: false
			},
			zoom: {
				defaultValue: 1.0,
				fromCenter: false,
				increment: 0.10,
				max: 6,
				min: 0.1,
				value: 1.0
			},
			tools: { // default tool setup
				defaultTool: 'pencil',
				defaults: {
					addByDrag: true,
					addByClick: true,
					maxHeight: 4096, // maximum height of placed item
					maxWidth: 4096, // maximum width of placed item
					minHeight: 3, // minimum height of placed item
					minWidth: 3, // minimum width of placed item
					units: 'userSpaceOnUse',
					usePointInBBox: true,
					usePointInImageData: true,
					usePointNearest: false,
					controls: {
						'touch': {
							'width': 12,
							'height': 12,
							'padding': 16
						},
						'mouse': {
							'width': 12,
							'height': 12,
							'padding': 8
						},
						'normal': {
							'fillStyle': '#000'
						},
						'hover': {
							'fillStyle': '#0080C2'
						},
						'focus': {
							'fillStyle': '#dd167a'
						},
						'anchor': { // bounding box around focused object
							'command': 'move',
							'title': 'click-to-select', // title for generic tools
							'title:selected': 'drag-to-move', // title for selected tool
							'title.text': 'dbltap-to-edit', // title for text tool
							'title.text:selected': 'click-to-edit', // title for text tool
							'padding': 0
						},
						'spinner': {
							'title': 'drag-to-rotate',
							'command': 'rotate',
							'cursor': 'n-rotate',
							'shape': 'circle'
						},
						'ne': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 'ne-resize'
						},
						'nw': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 'nw-resize'
						},
						'se': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 'se-resize'
						},
						'sw': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 'sw-resize'
						},
						'n': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 'n-resize'
						},
						's': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 's-resize'
						},
						'e': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 'e-resize'
						},
						'w': {
							'title': 'drag-to-resize',
							'command': 'scale',
							'cursor': 'w-resize'
						}
					}
				}
			},
			placement: {
				mediaClick: false, // enable click on media in tool pane to add to canvas.
				mediaDrag: true // enable drag media in tool pane into canvas.
			},
			vector: {
				record: true, // record vector data
				edit: true // enable data for editing
			},
			history: {
				autoSelect: true, // auto-select elements changed by undo or redo
				limit: Infinity, // how many undos are stored (unlimited)
				vector: true // vector history is turned on
			},
			sync: { // choose these items to synchronize with server on save
				enabled: true,
				hashFlag: 'file',
				onsave: function() {
	 				ui.log(lang.translate('changes-saved'));
					root.loader.create('syncing', lang.translate('syncing') + '...', 100);
				},
				onprogress: function(percent) {
					root.loader.create('syncing', lang.translate('syncing') + '...', percent);
				},
// 				folder: true, // folder with resources
				json: { // sync vector to server
					embedAssets: true, // store assets in json
					embedHistory: false, // store history in json
					quality: 1.0, // encode at this quality level
					toBlob: true // true | false - use binary upload
				},
				thumb: { // thumbnail of project
					format: 'jpeg',
					toBlob: true,
					suffix: 'thumb',
					compress: 0.92, // float between 0-1 [jpeg option]
// 					background: '#000', // #000, black, rgb, rgba, hsl, hsla
					width: 480,
					height: 480,
					useBBox: false,
					useVisibleRegion: false,
					center: true, // centers the image horizontally + vertically [optional]
					crop: 'edge' // fit | edge | none [optional]
				}
			}
		},
		///
		icons: {
// 			brush: {
// 				src: 'icon-pencil', // default icon
// 				children: {
// 					'pencil': 'icon-pencil',
// 					'arrow': 'icon-arrow',
// 					'polyline': 'icon-polyline'
// 				}
// 			},
			shape: { // group shapes together
				src: 'icon-square', // default shape
				children: { // alternative shapes
					'square': 'icon-square',
					'rectangle': 'icon-rectangle',
					'regularPolygon': 'icon-polygon',
					'triangle': 'icon-triangle',
					'star': 'icon-star',
// 					'burst': 'icon-burst',
					'circle': 'icon-circle',
					'ellipse': 'icon-ellipse',
 					'pie': 'icon-pie',
 					'ring': 'icon-ring',
// 					'radialBurst': 'icon-radial-burst',
					'gear': 'icon-gear',
// 					'spiral': 'icon-spiral'
				}
			}
		},
		///
		hosts: { // paths to POST and GET and various servers
			'localhost': { // my local testing environment [can be removed]
				HOST: 'localhost/patentthat/web/app_dev.php',
				GET: 'localhost/patentthat/web/app_dev.php/upload?sketch=',
				POST: 'localhost/patentthat/web/app_dev.php/upload',
				alias: ['mudcube.local']
			},
			'beta.patent-that.com': { // your web host
				HOST: 'beta.patent-that.com',
				GET: 'beta.patent-that.com/upload?sketch=',
				POST: 'beta.patent-that.com/upload'
			}
		}
	});
});


/* Setup
---------------------------------------------------------- */
var setupAddPage = function() {
	root.exec.register('add-page', function() {
		addPage();
		///
		ui.log('New page added!');
		///
		console.log('height', doc.height);
	});
};

var setupIncludes = function() {
	if (window.PDFJS) { // setup worker for reading PDFs
		PDFJS.workerSrc = root.loc.HOST + 'inc/pdf/pdf.worker.min.js';
	}
};

var setupSidebar = function() {
	var onSidebar = function() {
		setTimeout(function() {
			var container = dom.$('.sketch-api');
			var method = sidebar.opened ? 'add' : 'remove';
			container.classList[method]('pad-left');
			///
			var method = sidebarRight.opened ? 'add' : 'remove';
			container.classList[method]('pad-right');
			///
			doc.setCanvasSize();
			doc.orient.reset();
			doc.orient.render();
		}, 350);
	};
	///
	var sidebar = root.sidebar;
	sidebar.on('open', onSidebar);
	sidebar.on('close', onSidebar);
	///
	var sidebarRight = root.sidebarRight = new root.module.UISidebar(root, 'right');
	sidebarRight.on('open', onSidebar);
	sidebarRight.on('close', onSidebar);
	///
	util.getItem('show-sidebar-left', function(value) {
		if (value !== false) {
			sidebar.open();
		}
	});
};

var setupToolbar = function() {
	/// Attachments
	root.uploader.addFileInput({
		target: '.icon-attachment'
	});

	/// Undo/Redo
	eventjs.add('.icon-undo', 'click', function(event, self) {
		var target = self.target;
		var parent = target.parentNode;
		///	
		var el = dom.$('.icon-redo', parent);
		if (el) {
			el.style.display = '';
		} else {
			var el = dom.append(parent, '<span class="sk-tool" data-tool="redo" data-title="redo"><span class="sk-tool-title">Redo</span><span class="sk-icon icon-redo"></span></span>');
			if (ui.tooltip) {
				ui.tooltip.add(el, 'redo');
			}
			eventjs.add(target, 'mousedown', eventjs.stop);
			eventjs.add(el, 'mousedown', eventjs.stop);
			eventjs.add(el, 'click', function() {
				root.exec('redo');
			});
		}
		///
		var onMouseDown = eventjs.add(document.body, 'mousedown', function(event) {
			el.style.display = 'none';
			onMouseDown.remove();
		});
	});

	/// Tooltips
	var data = dom.$$('[data-title]');
	util.each(data, function(el) {
		if (ui.tooltip) {
			ui.tooltip.add(el, el.getAttribute('data-title'));
		}
	});	
	///
	function addContextMenu(target, menu) {
		eventjs.add(target, 'click', function(event, self) {
			ui.contextMenu.show({
				menu: menu, 
				at: {
					element: target,
					align: 'top left to bottom left'
				}
			});
		});	
	};
	///
	addContextMenu('.icon-file-new', 'file-new');
	addContextMenu('.icon-save', 'file-save');
};

var setupExec = function() {
	var setPane = function(pane) {
		var sidebar = root.sidebarRight;
		var target = dom.$('.sk-' + pane);
		var selected = target.classList.contains('selected');
		if (selected && sidebar.opened) {
			sidebar.close();
		} else {
			sidebar.open();
			dom.setClass({
				target: target,
				className: 'selected',
				on: true,
				list: 'div'
			});
		}
	};
	///
	root.exec.register('save-server', function() {
		alertify.prompt({
			message: 'How would you like this saved?', 
			callback: function(truthy, values) {
			if (truthy) {
				var filename = values['filename'];
				var description = values['description'];

					$.ajax({
						url: "/uploadname",
						type: "get",
						data: { getLastIdImage: "false", isExist: "false", nameImage: filename, descriptionImage: description},
						dataType: "json",
						success: function(data){        
							root.server.save();
							$.ajax({
								url: "/uploadname",
								type: "get",
								data: { getLastIdImage: "true"},
								dataType: "json",
								success: function(data){  
									isExist = true;		
									console.log('data:  ',data);
									IdImage = data['IdImage'];																								
								}
						    });
						}
					    });
				}
			
			}, 
			verify: function(inputs, callback) {
				for (var n = 0; n < inputs.length; n ++) {
					if (inputs[n].value === '') {
						alertify.error('<i>' + inputs[n].title + '</i> is required');
						callback(false);
						return;
					}
				}
				callback(true);
			},
			labels: {
				ok: 'Save',
				cancel: 'Cancel'
			},
			fields: [{
				id: 'filename',
				name: 'filename1',
				title: 'Filename',
				type: 'text',
				placeholder: 'Filename'
			}, {
				id: 'description',
				name: 'description1',
				title: 'Description',
				type: 'textarea',
				placeholder: 'Description'
			}]
		});
	});
	root.exec.register('save', function() {
		
		if(isExist == true){
			alertify.confirm("Are you sure you want to overwrite this sketch?", function(result) {
				$.ajax({
					url: "/uploadname",
					type: "get",
					data: { getLastIdImage: "false", isExist: "true", idImage:  IdImage},
					//data: { isExist: "false", nameImage: fileName, descriptionImage: description},
					dataType: "json",
					success: function(data){						
						root.server.save();  
					}
				    });
			}); 
//			alertify.prompt({
//				message: 'Are you sure you want to overwrite this sketch?', 
//				callback: function(truthy) {			
//					if (truthy) {												
//						$.ajax({
//							url: "/uploadname",
//							type: "get",
//							data: { isExist: "true", idImage:  IdImage},
//							//data: { isExist: "false", nameImage: fileName, descriptionImage: description},
//							dataType: "json",
//							success: function(data){
//								console.log("thanhcong1");
//								root.server.save();  
//							}
//						    });
//					}
//				
//				},
//				labels: {
//					ok: 'Save',
//					cancel: 'Cancel'
//				}
//			});
		
		}else{
			alertify.prompt({
				message: 'How would you like this saved?', 
				callback: function(truthy, values) {
			
					if (truthy) {
					var fileName = values['filename'];
					var description = values['description'];
						$.ajax({
							url: "/uploadname",
							type: "get",
							data: { getLastIdImage: "false", isExist: "false", nameImage: fileName, descriptionImage: description},
							dataType: "json",
							success: function(data){  
								root.server.save();
								$.ajax({
									url: "/uploadname",
									type: "get",
									data: { getLastIdImage: "true"},
									dataType: "json",
									success: function(data){  
										root.server.save();																				
										$.ajax({
											url: "/uploadname",
											type: "get",
											data: { getLastIdImage: "true"},
											dataType: "json",
											success: function(data){  
												isExist = true;
												console.log('data:  ',data);
												IdImage = data['IdImage'];																								
											}
									    });
										
									}
							    });
								  
							}
						    });
					}
				
				}, 
				verify: function(inputs, callback) {
					for (var n = 0; n < inputs.length; n ++) {
						if (inputs[n].value === '') {
							alertify.error('<i>' + inputs[n].title + '</i> is required');
							callback(false);
							return;
						}
					}
					callback(true);
				},
				labels: {
					ok: 'Save',
					cancel: 'Cancel'
				},
				fields: [{
					id: 'filename',
					name: 'filename1',
					title: 'Filename',
					type: 'text',
					placeholder: 'Filename'
				}, {
					id: 'description',
					name: 'description1',
					title: 'Description',
					type: 'textarea',
					placeholder: 'Description'
				}]
			});
		}
	});
	///
	root.exec.register('guide', function() {
		setPane('guide');
	});
	root.exec.register('search', function() {
		setPane('search');
	});
	root.exec.register('help', function() {
		setPane('help');
	});
};


/* Add Page
---------------------------------------------------------- */
var addPage = function() {
	doc.addPage({
		width: docWidth,
		height: docHeight
	});
	///
	addPageMarker();
};

var addPageMarker = function() {
	var page = doc.pages.length;
	var top = docHeight * page;

	/// page break marker
	doc.scene.add({
		type: 'rectangle',
		fill: '#000',
		useStickToFront: true,
		exportable: false,
		selectable: false,
		width: docWidth,
		height: 1,
		x: 0,
		y: top
	}, null, null, {
		useHistory: false
	});

	/// page number marker
	doc.scene.add({
		type: 'text',
		fill: '#000',
 		centerOnPoint: true,
		useStickToFront: true,
		exportable: false,
 		selectable: false,
		fontSize: 12,
		textAlign: 'center',
		content: 'Page ' + page,
		x: docWidth / 2.0,
		y: top - 20
	}, null, null, {
		useHistory: false
	});

	/// scroll to the next page - animate 350ms
	doc.scrollTo({
	    top: top,
	    duration: 350
	});
};


/* OnReady
---------------------------------------------------------- */
var onReady = function(_doc) {
	doc = _doc;
	///
	doc.config.arrow.curved.checked = true;
	///
	setupAddPage();
	setupExec();
	setupIncludes();
	setupSidebar();
	setupToolbar();
	///
	doc.toolkit.clone('highlighter', 'paintbrush');
	
	/// Tooltips
	var data = dom.$$('[data-title]');
	util.each(data, function(el) {
		if (ui.tooltip) {
			ui.tooltip.add(el, el.getAttribute('data-title'));
		}
	});	

	/// Fastclick
	ui.fastclick('.sk-sidebar-right a');
	ui.fastclick('.sk-sidebar-right input[type="checkbox"]');
	ui.fastclick('.sk-help input');
	ui.fastclick('.sk-help textarea');

	/// Guide descriptions (toggle)
	var data = dom.$$('.sk-divider');
	util.each(data, function(el) {
		eventjs.add(dom.$('input', el), 'mousedown', eventjs.stop);
		eventjs.add(el, 'click', function(event) {
			eventjs.stop(event);
			el.classList.toggle('sk-show');
		});
	});

	/// Open Document
	var hash = root.loc.getSketchID();
	if (hash) {
		return root.open.json('./media/upload/username/' + hash + '.json?' + util.timestamp(), function() {
// 			console.log('loaded!');
		});
	} else {
		root.exec('new');
		addPageMarker();
	}
	/// 
	root.sidebarRight.open();
};

})(sketch);
