/*
	----------------------------------------------------------
	app/Configure : 0.1.3 : 2015-07-03 : https://sketch.io
	----------------------------------------------------------
	new module.Configure(root, doc, {
		select: true, // turn | false to enable or disable tool
		text: { // {} to set properties
			fontFamily: 'Comfortaa', // string to set specific value
			fontSize: 24, // ditto - applies as .value
			fill: {style: 'white'}, // mixin
			myOtherSettings: new vars.HTML({
				construct: function(attr) {

				}
			})
		},
		brush: { // helper applies settings to all brushes - ditto w/ utility | shape
			fill: {color: 'white'}
		},
		paintbrush: {
			size: 40 // set medium width (sets controllable)
			size: new vars.Range({ // or create new controllable
				param: 'size',
				value: 40
			})
			size: new vars.Range({ // or create new hidden controllable
				param: 'size',
				value: 40,
				hidden: true
			})
		},
		eraser: {
			hidden: true //- implement me // hide gui for all params
			hidden: { // hide gui for certain params
				blur: 0
			}
		}
	});

	/// reset 'image' config
	doc.setConfig({
		filter: 'image',
		params: config.getDefaultValues('image')
	});
*/

if (typeof sketch === 'undefined') sketch = {};

(function(root) { 'use strict';

root.module = root.module || {};
root.module.Configure = function(root, doc, CustomToolset) {

	var config = {};
	///
	var dom = root.dom;
	var lang = root.lang;
	var ui = root.ui;
	var util = root.util;
	var vars = root.ui.vars;


	/* Utilities
	------------------------------------------------------- */	
	Set({
		subtool: UIToolGroup('utility', 'utilities')
	}, {
		crop: {
			toolkitId: 'crop',
	// 		aspect: new vars.Select({
	// 			label: 'Orientation',
	// 			options: ['portrait','landscape'],
	// 			param: 'aspect',
	// 			selected: 'portrait',
	// 			title: 'Aspect Orientation',
	// 			onchange: function(param, value) {
	// 				var ret = {};
	// 				ret[param] = value;
	// 				doc.tool.update(ret);
	// 			}
	// 		})
			ratio: new vars.Select({
				options: function() {
					return ui.DOC.param.preset;
				},
				param: 'ratio',
				selected: 'size:377x197,units:px,dpi:72', //'377 x 197 (Facebook)',
				label: 'aspect-ratio',
				title: 'choose-aspect-ratio',
				onchange: function(key, value) {
					var res = {};
					res[key] = ui.DOC.param.presetData[value];
					doc.tool.update(res);
				}
			}),
			constrain: new vars.Checkbox({
				checked: true,
				label: 'constrain',
				param: 'constrain',
				title: 'choose-constrain',
				onchange: function(checked) {
					var config = {};
					config[this.param] = checked;
					doc.tool.update(config);
				}
			}),
	//		,x: new vars.Input(100, 0, 100, '%')
	//		,y: new vars.Input(100, 0, 100, '%')
	//		,width: new vars.Input(100, 0, 100, '%')
	//		,height: new vars.Input(100, 0, 100, '%')
			footer: new vars.HTML({
				construct: function(attr) {
					return ui.createFooter({
						ok: {
							title: 'crop',
							className: 'sk-yellow',
							onclick: function() {
								doc.tool.apply();
							}
						}
					});
				}
			})
		},
		eyedropper: {
			toolkitId: 'eyedropper'
		},
		laserPointer: {
			toolkitId: 'laserPointer'
		},
		screenshot: {
			toolkitId: 'screenshot'
		},
		select: {
			toolkitId: 'select'
		},
		zoom: {
			toolkitId: 'zoom'
	//		, amount: UIRange('amount', 100, 10, 500, '%')
		}
	});


	/* Groups
	------------------------------------------------------- */
	Set({
		toolkitId: 'group',
		composite: UIComposite(),
		opacity: UIOpacity()
	});


	/* Shapes
	------------------------------------------------------- */
	Set({
		toolkitId: 'shape',
		subtool: UIToolGroup('shape', 'shapes'),
		palette: UIPalette(),
		composite: UIComposite(),
		fill: UIStyle('fill'),
		stroke: UIStyle('stroke')
// 		, opacity: UIOpacity()
// 		, imperfection: UIRange('imperfection', 0, 0, 100, 'float')
// 		, anticlockwise: false
	}, {
		pie: {
			angle: UIRange('angle', [0, 270], 0, 360, 'degree', {canCross:true})
		},
		ring: {
			angle: UIRange('angle', [0, 360], 0, 360, 'degree', {canCross:true}),
			cutout: UIRange('cutout', 0.5, 0.0, 0.99, '%')
		},
		ellipse: {
			cutout: UIRange('cutout', 0.0, 0.0, 0.99, '%')
		},
		circle: {
			cutout: UIRange('cutout', 0.0, 0.0, 0.99, '%')
		},
		rectangle: {
			roundness: UIRange('roundness', 0, 0, 1, '%'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, '%')
		},
		square: {
			roundness: UIRange('roundness', 0, 0, 1, '%'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, '%')
		},
		regularPolygon: {
			sides: UIRange('sides', 5, 3, 25, 'int'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, '%')
		},
		triangle: {
			cutout: UIRange('cutout', 0, 0.0, 0.99, '%')
		},
		gear: {
			sides: UIRange('sides', 30, 2, 100, 'int'),
			slope: UIRange('slope', 0.9, 0.0, 0.99, '%'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, '%')
		},
		star: {
			sides: UIRange('sides', 5, 2, 50, 'int'),
			slope: UIRange('slope', 0.5, 0.0, 0.99, '%'),
			cutout: UIRange('cutout', 0.0, 0.0, 0.99, '%')
		},
		burst: {
			sides: UIRange('sides', 5, 2, 50, 'int'),
			slope: UIRange('slope', 0.001, 0.001, 10, '%'),
			cutout: UIRange('cutout', 0, 0, 0.99, '%')
		},
		radialBurst: {
			sides: UIRange('sides', 12, 2, 100, 'int'),
			spread: UIRange('spread', 0.5, 0.01, 1, '%')
		},
		spiral: {
			sides: UIRange('sides', 10, 1, 25, 'int'),
			coils: UIRange('coils', 1, 0.001, 10, 'float'),
			spread: UIRange('spread', 1, 1, 100, '%')
		},
		supershape: {
			points: UIRange('points', 500, 50, 1000, 'int'),
			m: UIRange('m', 39, 0.10, 50, 'int'),
			n1: UIRange('n1', 1, 0.1, 15, 'float'),
			n2: UIRange('n2', 0.9, 0.1, 15, 'float'),
			n3: UIRange('n3', 0.25, 0.1, 15, 'float'),
			cutout: UIRange('cutout', 0, 0, 0.99, '%')
		}
	});


	/* Text
	------------------------------------------------------- */
	Set({
		toolkitId: 'text',
		///
		resource: new vars.Resource({
			format: 'text',
			label: 'font',
			title: 'choose-font'
		}),
		///
		textAlignment: new vars.HTML({
			construct: function(attr) {
				var $node = dom.create('div');
				$node.className = 'sk-text-styles';
				///
				util.each(['left', 'center', 'right', 'justify'], function(value) {
					var classList = ['sk-button'];
					classList.push('icon-paragraph-' + value);
					if (attr.textAlign === value) {
						classList.push('selected');
					}
					///
					var button = ui.Button({
						container: $node,
						tooltip: value,
						class: classList.join(' '),
						onclick: function() {
							dom.setClass({
								list: '.sk-button',
								target: button.element,
								name: 'selected'
							});
							///
							doc.setConfig({
								param: 'textAlign',
								value: value
							});
						}
					});
				});
				///
				return $node;
			}
		}),
		///
		textStyles: new vars.HTML({ //- move to ConfigureText.js ?
			construct: function(attr) {
				var $node = dom.create('div');
				$node.className = 'sk-text-styles';
				///
				var textDecoration = attr.textDecoration || 'none';
				var fontStyle = attr.fontStyle || 'normal';
				var fontWeight = attr.fontWeight || 'normal';
				///
				var defs = {
					'bold': {
						cssproperty: 'fontWeight',
						value: 'bold',
						defaults: 'normal',
						enabled: fontWeight === 'bold'
					},
					'italic': { // firefox requires italic version of the font...
						cssproperty: 'fontStyle',
						value: 'italic',
						defaults: 'normal',
						enabled: fontStyle === 'italic'
					},
					'underline': {
						cssproperty: 'textDecoration',
						value: 'underline',
						defaults: 'none',
						enabled: textDecoration.indexOf('underline') !== -1
					},
					'line-through': {
						cssproperty: 'textDecoration',
						value: 'line-through',
						defaults: 'none',
						enabled: textDecoration.indexOf('line-through') !== -1
					}
				};
				///
				util.each(defs, function(def) {
					var cssproperty = def.cssproperty;
					var defaults = def.defaults;
					var icon = def.icon || def.value;
					var value = def.value;
					///
					var button = ui.Button({
						container: $node,
						tooltip: def.value,
						class: 'sk-button icon-' + icon,
						onclick: function () {
							def.enabled = classList.toggle('selected');
							///
							var values = [];
							function push(def, value) {
								if (def.enabled) {
									values.push(value);
								}
							};
							///
							if (cssproperty === 'textDecoration') {
								push(defs['underline'], 'underline');
								push(defs['line-through'], 'line-through');
							} else {
								push(def, value);
							}
							///
							doc.setConfig({
								param: cssproperty,
								value: values.join(',') || defaults
							});
						}
					});
					///
					var $element = button.element;
					var classList = $element.classList;
					var prop = attr[cssproperty];
					if (prop && prop.indexOf(value) !== -1) {
						classList.add('selected');
					}
				});
				///
				return $node;
			}
		}),
		///
		lineBreak: new vars.HTML({
			construct: function(attr) {
				return dom.create('<div class="sk-break" style="margin: 10px 0 0;"></div>');
			}
		}),
		///
		palette: UIPalette(),
		composite: UIComposite(),
		///
		fill: UIStyle('fill'),
		stroke: UIStyle('stroke'),
// 		border: UIStyle('border'),
		background: UIStyle('background'),
		///
		opacity: UIOpacity(),

		content: '',

		fontWeight: 'normal', // bold | bolder | lighter | 100-900
		fontSize: UIRange('fontSize', 30, 1, 120, 'px'),
		fontFamily: 'Arial',
		fontVariant: 'normal', // small-caps | normal
		fontStyle: 'normal', // oblique | italic | normal

		lineHeight: UIRange('lineHeight', 1, 1, 2.5, 'em'),
		letterSpacing: UIRange('letterSpacing', 0, 0, 20, 'px'),
		wordSpacing: UIRange('wordSpacing', 0, 0, 20, 'px'),

		textAlign: 'center', // left | right | center | justify
		textDecoration: 'none', // underline | overline | line-through
		textTransform: 'none', // capitalize, uppercase, lowercase

		/*
			subscript | superscript // this is a pair of properties...
			.superscript {
				vertical-align: super;
				font-size: smaller;
			}
		*/

		whiteSpace: 'pre-wrap' // normal, pre, pre-line, pre-wrap, pre-nowrap, nowrap
	});


	/* Image | Video
	------------------------------------------------------- */
	Set({
		toolkitId: 'media',
		subtool: UIToolGroup('media', 'media'),
		composite: UIComposite(),
		opacity: UIOpacity(),
		///
		hue: UIRange('hue', 0.0, 0.0, 360.0, 'degree', {gradient: ['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#f00']}),
		saturation: UIRange('saturation', 1.0, 0.0, 3.0, 'float', {gradient: ['#ffffff', '#ffffbf', '#9eff9e', '#7ffffa', '#5e5eff', '#ff3fff', '#f00']}),
		temperature: UIRange('temperature', 0.0, -32.0, 32.0, 'float', {gradient: ['#568fcf', '#f7e146']}),
		tint: UIRange('tint', 0.0, -32.0, 32.0, 'float', {gradient: ['#00ae47', '#c73baf']}),
		exposure: UIRange('exposure', 1.0, 0.0, 2.0, 'float', {gradient: ['#333', '#bbb']}),
		brightness: UIRange('brightness', 0.0, -100.0, 100.0, '%', {gradient: ['#333', '#bbb']}),
		contrast: UIRange('contrast', 0.0, -0.5, 0.5, 'float', {gradient: ['#bbb', '#333']}),
		///
// 		showFilterStack: new vars.HTML({
// 			construct: function(attr) {
// 				var $container = dom.create('div');
// 				///
// 				var filter = attr.filter;
// 				if (filter) {
// 					var $filter = ui.createFilterStack(filter);
// 					$container.appendChild($filter);
// 				}
// 				///
// 				return $container;
// 			}
// 		}),
// 		addFilter: new vars.HTML({
// 			construct: function(attr) {
// 				if (doc.selection.length === 1 && hasGLFX()) {
// 					return ui.createFooter({
// 						ok: {
// 							title: 'add filter',
// 							className: 'sk-yellow',
// 							onclick: function() {
// 								var filters = util.sort({
// 									fn: 'natural',
// 									data: Object.keys(glfx.filters)
// 								});
// 								///
// 								var $container = dom.create('div');
// 								$container.className = 'alert-filter-stack';
// 								///
// 								filters.forEach(function(filterId) {
// 									var div = dom.append($container, 'div');
// 									div.innerHTML = filterId;
// 									div.className = 'filter';
// 									div.onclick = function() {
// 										alertify.hide(alertId);
// 										///
// 										var object = doc.selection.item;
// 										addFilter(object, filterId);
// 									};
// 								});
// 								///
// 								var alertId = ui.alert($container);
// 							}
// 						}
// 					});
// 				}
// 			}
// 		})
	}, {
		image: true,
		video: true
	});
	
	function hasGLFX() {
		return window.glfx && root.agent.webgl;
	};
	
	function addFilter(object, filterId) {
		var useGLFX = hasGLFX();
		var useColorMatrix = root.gl.ColorMatrix && object.type === 'image';
		var useGLColorMatrix = useColorMatrix && useGLFX;
		///
		var filter = object.filter;
		if (filter === undefined) {
			object.filter = [
				[ // layer0
					{
						'cmd': 'input',
						'id': 'source0',
						'enabled': true
					}
				]
			];
		}
		///
		var layer0 = object.filter[0];
		var defaults = glfx.filters[filterId].defaults;
		layer0.push({
			id: filterId,
			cmd: 'shader',
			enabled: true,
			data: defaults
		});
		///
		object.dirtyCache = true;
		root.doc.render.dirty = true;
		root.ui.configurePane();
	};



	/* Camera
	------------------------------------------------------- */
	Set({
		toolkitId: 'camera',
		subtool: UIToolGroup('media', 'media'),
		video: new vars.HTML({
			construct: function(attr) {
				var camera = doc.toolkit.camera;
				var userMedia = camera.userMedia;
				///
				var $container = dom.create('div');
				$container.className = 'sk-video-container';
				///
				var $title = dom.append($container, 'title');
				$title.className = 'sk-title';
				$title.innerHTML = lang.translate('presets');
				///
				var $node = dom.append($container, 'div');
				$node.className = 'sk-yellow button';
				$node.textContent = lang.translate('take-snapshot');
				eventjs.add($node, 'click', function() {
					camera.capture();
				});
				///
				if (userMedia.$container) {
					$container.appendChild(userMedia.$container);
				} else {
					root.module.getUserMedia({
						userMedia: camera.userMedia,
						onsuccess: function() {
							ui.configurePane(null, true);
						}
					});
				}
				///
				return $container;
			}
		}),
		composite: UIComposite(),
		opacity: UIOpacity()
	});


	/* Clipart | Symbol
	------------------------------------------------------- */
	Set({
		toolkitId: 'media',
		subtool: UIToolGroup('media', 'media')
	}, {
		clipart: {
			filePicker: new vars.FilePicker('clipart'),
			resource: new vars.Resource({
				format: 'clipart',
				label: 'clipart',
				title: 'choose-clipart'
			}),
			src: 'clipart/animals/1216139760278927551lemmling_Cartoon_cow.svg',
			composite: UIComposite(),
	// 		fill: UIStyle('fill'),
	// 		stroke: UIStyle('stroke'),
			opacity: UIOpacity()
		},
		symbol: {
			palette: UIPalette(),
	// 		src: 'clipart/animals/1216139760278927551lemmling_Cartoon_cow.svg',
			composite: UIComposite(),
			fill: UIStyle('fill'),
	// 		stroke: UIStyle('stroke'),
			opacity: UIOpacity()
		}
	});


	/* Speechbubble
	------------------------------------------------------- */
	Set({
		toolkitId: 'speechbubble',
		subtool: UIToolGroup('media', 'media'),
		composite: UIComposite(),
		opacity: UIOpacity()
	});


	/* Vectorfill
	------------------------------------------------------- */
	Set({
		toolkitId: 'vectorfill',
		palette: UIPalette(),
		composite: UIComposite(),
		fill: UIStyle('fill'),
		opacity: UIOpacity()
	});


	/* Path | Polygon | Polyline | Scissors
	------------------------------------------------------- */
	Set({
		toolkitId: 'brush',
		subtool: UIToolGroup('brush', 'brushes'),
		palette: UIPalette(),
		composite: UIComposite(),
		fill: UIStyle('fill', {
		    enabled: false
		}),
		stroke: UIStyle('stroke', {
		    enabled: true,
		    lineWidth: 2
		}),
// 		opacity: UIOpacity(),
		interval: 1,
		spacing: {
			min: 1,
			max: 25
		},
		reset: new vars.HTML({
			construct: function(attr) {
				if (doc.tool.type === 'select') {
					return;
				}
				///
				function closePath(event) {
					for (var pointerId in doc.render.pointer);
					var pointer = doc.render.pointer[pointerId];
					pointer.object.brush.closePath();
					pointer.object.brush.savePath();
				};
				
				function finishEditing(event) {
					for (var pointerId in doc.render.pointer);
					var pointer = doc.render.pointer[pointerId];
					pointer.object.brush.savePath();
				};
				
				if (attr.type === 'polygon') {
					var $footer = ui.createFooter({
						className: 'buttons',
						ok: {
							title: 'close path',
							className: 'sk-yellow',
							onclick: closePath
						}
					});
				} else {
					var $footer = ui.createFooter({
						className: 'buttons',
						ok: {
							title: 'finish editing',
							className: 'sk-yellow',
							onclick: finishEditing
						},
						cancel: {
							title: 'close path',
							className: 'sk-yellow',
							onclick: closePath
						}
					});
				}
				return $footer;
			}
		})
	}, {
		path: true,
		polygon: true,
		polyline: true,
		scissor: {
			opacity: {hidden: true},
			fill: {hidden: true},
			stroke: {hidden: true},
			buttons: {hidden: true}
		}
	});


	/* Brushes
	------------------------------------------------------- */
	Set({
		toolkitId: 'brush',
		subtool: UIToolGroup('brush', 'brushes'),
		palette: UIPalette(),
		composite: UIComposite(),
		fill: UIStyle('fill'),
		stroke: false,
// 		opacity: UIOpacity(),
		interval: 1,
		spacing: {
			min: 1,
			max: 25
		}
	}, {
		arrow: {
			diameter: UIRange('diameter', 35, 1, 250, 'px'),
	//		, mode: UIRange('mode', 1, 1, 3, 'int')
			curved: new vars.Checkbox({
				checked: false,
				label: 'curved',
				param: 'curved'
			})
		},
		eraser: {
			subtool: {hidden: true},
			palette: {hidden: true},
			fill: {hidden: true},
	// 		stroke: {hidden: true},
			opacity: UIOpacity(),
			composite: 'destination-out',
			diameter: UIRange('diameter', 40, 1, 250, 'px'),
			blur: UIRange('blur', 0, 0, 100, '%')
		},
		paintbrush: {
			diameter: UIRange('diameter', 40, 1, 250, 'px'),
			blur: UIRange('blur', 10, 0, 100, '%')
		},
		pencil: {
			diameter: UIRange('diameter', 2, 1, 250, 'px'),
		},
		textbrush: {
			diameter: UIRange('diameter', 10, 1, 100, 'px'),
			content: new vars.Textarea({
				label: 'content',
				param: 'content',
				value: '“The quick brown fox jumps over the lazy dog” is an English-language pangram – a phrase that contains all of the letters of the English alphabet.'
			})
		},

		/* Vector brushes
		------------------------------------------------------- */
		streamer: {
			diameter: UIRange('diameter', [0.001, 15], 0.001, 150, 'px'),
			spacing: {
				min: 5,
				max: util.INFINITY
			}
		},
		pen: {
			diameter: UIRange('diameter', [0.5, 10], 0.001, 50, 'px'),
			spacing: {
				min: 5,
				max: util.INFINITY
			}
		},
		calligraphy: {
			diameter: UIRange('diameter', 10, 1, 100, 'px')
		},
		chrome: {
// 			opacity: UIOpacity(25),
			spacing: {
				min: 1,
				max: 100
			},
			lineWidth: UIRange('lineWidth', 1, 0.1, 5, 'px'),
			spread: UIRange('spread', 15, 1, 50, 'px'),
			lookback: 2000
		},
		shader: {
// 			opacity: UIOpacity(75),
			spacing: {
				min: 1,
				max: 3
			},
			lineWidth: UIRange('lineWidth', 0.5, 0.1, 5, 'px'),
			spread: UIRange('spread', 40, 1, 50, 'px'),
			lookback: 2000
		},
		sketchy: {
// 			opacity: UIOpacity(50),
			spacing: {
				min: 1,
				max: 100
			},
			lineWidth: UIRange('lineWidth', 1, 0.1, 5, 'px'),
			spread: UIRange('spread', 25, 1, 100, 'px'),
			lookback: 2000
		},
		web: {
// 			opacity: UIOpacity(40),
			spacing: {
				min: 1,
				max: 100
			},
			lineWidth: UIRange('lineWidth', 1, 0.1, 5, 'px'),
			spread: UIRange('spread', 25, 1, 100, 'px'),
			lookback: 2000
		},
		fur: {
			spacing: {
				min: 1,
				max: 10
			},
			lineWidth: UIRange('lineWidth', 1, 0.1, 25, 'px'),
			diameter: UIRange('diameter', 75, 1, 750, 'px'),
			lookback: 2000
		},
		hair: {
			spacing: {
				min: 1,
				max: 5
			},
			lineWidth: UIRange('lineWidth', 0.5, 0.1, 10, 'px'),
			diameter: UIRange('diameter', 50, 1, 250, 'px'),
			lookback: 5
		},
		spirograph: {
// 			opacity: UIOpacity(60),
			lineWidth: UIRange('lineWidth', 0.1, 0.1, 5, 'px'),
			diameter: UIRange('diameter', 25, 1, 250, 'px'),
			contract: 0.005,
			radius: UIRange('radius', [43.92920353982301/100, 35.16814159292035/100], 0, 1, '%', {canCross:true}),
			speed: UIRange('speed', 100, 1, 100, 'float'),
			spacing: {
				min: 1,
				max: 5
			}
		},

		/* Raster brushes
		------------------------------------------------------- */
		spraypaint: {
// 			opacity: UIOpacity(25),
			spacing: {
				min: 1,
				max: 50
			}
	//		, speed: UIRange('speed', 100, 1, 100, 'float')
			, diameter: UIRange('diameter', 70, 25, 250, 'px')
		},
		crayon: {
			rotate: UIRange('rotate', [0, 360], 0, 360, 'degree', {hidden:true}),
			diameter: UIRange('diameter', 19, 3, 100, 'px')
		},
		stamp: {
			toolkitId: 'brush',
			subtool: UIToolGroup('brush', 'brushes'),
			resource: new vars.Resource({
				format: 'stamp',
				label: 'stamp',
				title: 'choose-stamp'
			}),
			palette: UIPalette(),
			composite: UIComposite(),
			fill: UIStyle('fill'),
// 			opacity: UIOpacity(85),
// 			speed: UIRange('speed', 100, 1, 100, 'float'),
			diameter: UIRange('diameter', 100, 5, 500, 'px'),
			rotate: UIRange('rotate', [0, 360], 0, 360, 'degree', {canCross:true}),
			scale: UIRange('scale', [0.05, 1.5], 0.05, 3, 'x'),
			translate: UIRange('translate', [0,0], 0, 250, 'px'),
			spacing: UIRange('spacing', [12, util.INFINITY], 1, 250, 'px'),
			interval: 1
// 			, pollock: false
// 			, src: './media/stamp/Water Colors/0-live.png'
// 			, filePicker: new vars.FilePicker('stamp')
		},

		/* Pixel brushes
		------------------------------------------------------- */
		floodfill: {
			spacing: false,
			tolerance: UIRange('tolerance', 20, 1, 100, '%'),
			antialias: false,
			contiguous: new vars.Checkbox({
				checked: true,
				label: 'contiguous',
				param: 'contiguous'
			})
		},
		oil: {
			spacing: {
				min: 1,
				max: 1
			},
			blend: 0.98,
			bristles: 8,
			diameter: UIRange('diameter', 50, 1, 100, 'px')
		},
		pastel: {
			spacing: false,
			blend: 0.97,
			bristles: 35,
			rotate: UIRange('rotate', [0, 360], 0, 360, 'degree', {hidden: true}),
			diameter: UIRange('diameter', 25, 3, 42, 'px')
		}
	});

	/// clone defaults for reset
	(function() {
		
		var defaults = util.copy(config);
		
		config.getDefaultValues = function(type) {
			var res = {};
			var values = defaults[type];
			for (var key in values) {
				var data = values[key];
				if (data.getValue) {
					res[key] = data.getValue();
				}
			}
			return res;
		};
	
		config.reset = function(type) {
			config[type] = util.copy(defaults[type]);
		};

	})();
	
	config.addClone = Config; // used in toolkit.clone

	return config;




	/* helpers */

	function Set(base, tools) {

		tools = tools || (function() {	
			var res = {};
			res[base.toolkitId] = true;
			return res;
		})();
		
		function getUserConfig() {
			var toolkitId = base.toolkitId;
			var toolkit = CustomToolset[toolkitId] || {};
			var custom = CustomToolset[type];
			if (custom || toolkit.allTypes) {
				return util.copyInto(custom, util.copy(toolkit));
			}
		};

		for (var type in tools) {
			var userConfig;
			if (CustomToolset && !(userConfig = getUserConfig())) {
				continue; // disable tool
			} else {
				base.__config = true; // so can be detectable as 'config' vs 'object'
				///
				Config(base, type, tools[type]); // create new config of type cloned from base
				///
				if (typeof userConfig === 'object') {
					SetConfig(type, userConfig);
				}
			}
		}	
	};

	function SetConfig(type, override) { // set config
		var CONFIG = config[type];
		util.each(override, function(source, key) {
			if (key === 'allTypes') {
				return;
			}
			///
			var dest = CONFIG[key];
			var stype = typeof source;
			var dtype = typeof dest;
			if (stype === dtype) {
				if (stype === 'object') {
					if (root.style.methods[key]) { // Style
						root.style.copyInto(source, dest);
						return;
					} else if (source.getValue) { // Var
						var value = source.getValue();
						if (dest.setValue && dest.type === source.type) { // valid Var
							dest.setValue(value);
							if (source.hidden === true) { // Disable GUI
								dest.hidden = true;
							}
						} else {
							console.warn('%c'+key,'color:red', source, dest)
						}
						return;
					}
				} else { // Boolean | Number | String
					CONFIG[key] = source;
					return;
				}
			} else if (stype === 'object' && key === 'disable') { // Disable GUI
				for (var key in source) {
					CONFIG[key].hidden = true;
				}
				return;
			} else if (dest && dest.setValue) { // Boolean | Number | String
				dest.setValue(source);
				return;
			} else if (source && !dest) {
				CONFIG[key] = source;
				return;
			}
			///
			console.warn(key, source, dest);					
		});
	};

	function Config(from, to, extend) { // create config
		if (typeof from === 'string') from = config[from];
		///
		var copy = util.copy(from);
		if (copy) {
			copy.type = to;
			config[to] = copy;
			///
			if (extend) {
				for (var key in extend) {
					if (extend[key] === null) {
						delete copy[key];
					} else {
						delete copy[key];
						copy[key] = extend[key];
					}
				}
			}
		}
	};
	
	function UIRange(param, value, min, max, format, opts) {
		return new vars.Range(util.copyInto(opts, {
			param: param,
			value: value,
			min: min,
			max: max,
			format: format
		}));
	};
	
	function UIStyle(method, opts) {
		if (root.style) {
			return root.style.create(opts, method); //- params should be flipped
		} else {
			return console.warn('requires sk.style');
		}
	};

	function UIOpacity(value) {
		value = isFinite(value) ? value : 100;
		return new vars.Range({ // 0.001 so selection still works
			param: 'opacity',
			value: value,
			min: 0.001,
			max: 100,
			format: '%',
			gradient: ['#333', '#bbb']
		});
	};

	function UIComposite() {
		return new vars.Select({
			label: 'blend', // <span class='icon-opacity' style='color: #999'></span>',
// 			labelIcon: 'icon-opacity',
			param: 'composite',
			selected: 'normal',
			title: 'choose-blend',
			options: function() {
				return root.style.getBlendOptions();
			},
			onchange: function(param, value) {
				doc.setComposite(value, null, true);
			}
		});
	};
	
	function UIToolGroup(param, title) {
		return new vars.SubTool({
			param: param,
			title: title
		});
	};
	
	function UIPalette() {
		return new vars.Palette();
	};
};

})(sketch);