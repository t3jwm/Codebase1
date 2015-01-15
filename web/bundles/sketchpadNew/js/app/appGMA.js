/*
	----------------------------------------------------------
	Green Mountain Apps
	----------------------------------------------------------
		3. Line types (non re-editable)
			- polyline w/ arrow tip
		4. Slide out bar for patent advice with check-boxes
		5. Ability to save projects and restart ✓
		8. Including in the (?) drop down menu items, a patent search feature that, when selected, would bring up a pop-up to say, Google Patent Search.
*/

(function(root) {

var dom = root.dom;
var lang = root.lang;
var util = root.util;

eventjs.add(window, 'load', function() {
	var width = 816; // equivalent to 8.5 x 11 inches in pixels at 72DPI
	var height = 1056;
	var obj = calcZoomToFit(width, height, true); // calculate zoom size to fit into screen
	///
	root.construct({
		container: '.sk-content', // DOM element where sketchpad exists
		focusElement: document.body,
		///
		onready: onReady,
		feature: { // features enabled in sketchAPI
			lang: 'auto', // default language - i18n
			prefix: 'gma', // prefix used in localStorage
			doc: {
				background: '#fff', // w3 style background for sketch
				width: obj.targetWidth,
				height: obj.targetHeight,
				units: 'px'
			},
			palette: {
				colorPicker: true,
				drag: true,
				eyeDropper: true, // enable eye dropper support
				grid: true, // display palette
				hexInput: true // enable hex input
			},
			style: {
				color: 'black' // default color
			},
			io: {
				pdf: true // enable importing PDFs
			},
			ui: {
				tooltips: true
			},
			sidebar: {
				subtool: 'menu',
				palette: 'v2',
				configure: 'left'
			},
			canvas: {
				saveWithBackground: false,
				containerScale: true
			},
			zoom: {
				defaultValue: obj.zoom,
				fromCenter: false,
				increment: 0.10,
				max: 6,
				min: 0.1,
				value: obj.zoom
			},
			tools: { // default tool setup
				defaultTool: 'pencil',
				units: 'userSpaceOnUse',
				usePointInBoundingBox: true,
				usePointInImageData: true,
				usePointNearest: true,
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
						'shape': 'circle'
					},
					'ne': {
						'title': 'drag-to-resize',
						'command': 'scale'
					},
					'nw': {
						'title': 'drag-to-resize',
						'command': 'scale'
					},
					'se': {
						'title': 'drag-to-resize',
						'command': 'scale'
					},
					'sw': {
						'title': 'drag-to-resize',
						'command': 'scale'
					},
					'n': {
						'title': 'drag-to-resize',
						'command': 'scale'
					},
					's': {
						'title': 'drag-to-resize',
						'command': 'scale'
					},
					'e': {
						'title': 'drag-to-resize',
						'command': 'scale'
					},
					'w': {
						'title': 'drag-to-resize',
						'command': 'scale'
					}
				},
				text: {
					useSearch: "text"
				},
				media: {
					useSearch: "no"
				}
			},
			placement: {
				drag: true, // enable drag to place media.
				click: false, // enable click to place media.
				mediaClick: false, // enable click on media in tool pane to add to canvas.
				mediaDrag: true, // enable drag media in tool pane into canvas.
				constrainToCanvas: false
			},
			vector: {
				record: true, // record vector data
				edit: true // enable data for editing
			},
			history: {
				autoSelect: true, // auto-select elements changed by undo or redo
				limit: root.util.INFINITY, // how many undos are stored (unlimited)
				vector: true // vector history is turned on
			},
			sync: { // choose these items to synchronize with server on save
				onsave: function() {
					//alert('input');
					
					

					
					        // user clicked "ok"
					    	root.ui.log(lang.translate('changes-saved'));
							root.loader.create('syncing', lang.translate('syncing') + '...', 100);
							
							
							//return false;		
				
	 				
				},
				onprogress: function(percent) {
					//alert('dsds');
					root.loader.create('syncing', lang.translate('syncing') + '...', percent);
				},
// 				folder: true, // folder with resources
				json: { // sync vector to server
					toBlob: true, // true | false - use binary upload
					assets: 'encode', // encode assets into JSON
					quality: 1.0, // encode at this quality level
					history: false // sync json history
				},
				thumb: { // thumbnail of project
					format: 'jpeg',
					toBlob: true,
					suffix: 'thumb',
					compress: 0.92, // 0-1
// 					background: '#000', // #000, black, rgb, rgba, hsl, hsla
					width: 480,
					height: 480,
					useBoundingBox: false,
					useVisibleRegion: false,
					center: true, // centers the image horizontally + vertically [optional]
					crop: 'edge' // fit | edge | none [optional]
				}
			}
		},
		///
		icons: {
			shapes: { // group shapes together
				src: 'icon-square', // default shape
				children: { // alternative shapes
					'square': 'icon-square',
					'rectangle': 'icon-square',
					'regularPolygon': 'icon-polygon',
					'triangle': 'icon-triangle',
					'star': 'icon-star',
					'burst': 'icon-burst',
					'circle': 'icon-circle',
					'ellipse': 'icon-circle',
 					'pie': 'icon-pie',
 					'ring': 'icon-ring',
					'radialBurst': 'icon-radial-burst',
					'gear': 'icon-gear',
					'spiral': 'icon-spiral'
				}
			}
		}, 
		
		///
		hosts: { // paths to POST and GET and various servers
			'symfony.local': { // my local testing environment [can be removed]
				HOST: 'symfony.local',
				POST: 'symfony.local/upload/',
				GET: 'symfony.local/upload?sketch=$name',
				alias: ['75.175.27.33', 'mudcube.local']
			},
			'sketchapp.miratik.com': { // your web host
				HOST: 'http://sketchapp.miratik.com',
				POST: 'http://sketchapp.miratik.com/upload/',
				GET: 'http://sketchapp.miratik.com/upload?sketch=$name'
			},
			'sketchapp2.miratik.com': { // your web host
				HOST: 'http://sketchapp2.miratik.com',
				POST: 'http://sketchapp2.miratik.com/upload/',
				GET: 'http://sketchapp2.miratik.com/upload?sketch=$name'
			},
			'patent-that.com': { // your web host
				HOST: 'http://patent-that.com',
				POST: 'http://patent-that.com/upload/',
				GET: 'http://patent-that.com/upload?sketch=$name'
			}
		}
	});
});

var calcZoomToFit = function (width, height, opened) {
	var innerHeight = window.innerHeight - 40;
	var innerWidth = window.innerWidth;
	var topbar = true ? 0 : 0;
	var sidebar = opened || root.sidebar.left.opened ? 220 : 0;
	var ratioX = (innerWidth - sidebar) / width;
	var ratioY = (innerHeight - topbar) / height;
	var ratio = Math.min(ratioX, ratioY);
	if (ratioX < ratioY) {
		ratio = Math.min(width, innerWidth - sidebar) / width;
	} else {
		ratio = Math.min(height, innerHeight - topbar) / height;
	}
	///
	var zoomMin = root.feature && root.feature.zoom.min || 1.0;
	var zoom = Math.max(zoomMin, ratio);
	var container = dom.$('.sk-content');
	container.style.width = (width * zoom) + 'px';
	container.style.height = (height * zoom) + 'px';
	///
	if (root.feature) {
		root.feature.zoom.defaultValue = zoom;
	}
	///
	return {
		targetWidth: width,
		targetHeight: height,
		zoom: zoom
	};
};

var triggerZoomToFit = function() {
	setTimeout(function() {
		root.on.beforeResize();
		root.doc.setCanvasSize();
		root.doc.render.sceneGCO('onResize');
	}, 350);
};

var setupToolbar = function() {
	eventjs.add(dom.$('#tool-download-pdf'), 'click', function() {
		root.download.pdf();
	});
	///
	root.uploader.addFileInput({
		target: document.querySelector('#tool-attach')
	});
};

var setupSidebar = function() {
	root.sidebar.left.on('open', triggerZoomToFit);
	root.sidebar.left.on('close', triggerZoomToFit);
	///
	util.getItem('show-sidebar-left', function(value) {
		if (value !== 'false') {
			root.sidebar.left.open();
		}
	});	
	///
	root.ui.enableSidebarTabs();
};

var setupIncludes = function() {
	if (window.PDFJS) { // setup worker for reading PDFs
		PDFJS.workerSrc = root.loc.HOST + 'inc/pdf/pdf.worker.min.js';
	}
};

var onReady = function(doc) {
	setupSidebar();
	setupToolbar();
	setupIncludes();
	///
	doc.toolkit.clone('highlighter', 'paintbrush');
	///
	root.on('beforeResize', function() {
		var feature = root.feature;
		var obj = calcZoomToFit(feature.doc.width, feature.doc.height);
		doc.orient.setZoom(obj.zoom);
	});
	///
	root.doc.restoreSettings();
	///
	if (root.loc.hash.sketch) {
		var file = root.loc.hash.sketch;
		return root.open.json('./media/upload/username/' + file + '.json?' + util.timestamp(), function() {
			triggerZoomToFit();
		});
	}
};

})(sketch);