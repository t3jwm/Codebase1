/*
	----------------------------------------------------------
	app/Configure : 0.1.3 : 2015-05-14 : https://sketch.io
	----------------------------------------------------------
	new module.Configure(root, doc, {
		select: true, // turn | false to enable or disable tool
		text: { // {} to set properties
			fontFamily: 'Comfortaa', // string to set specific value
			fontSize: 24, // ditto - applies as .value
			fill: {style: 'white'}, // mixin
			myOtherSettings: new vars.HTML({ //- implement me // another custom control
				construct: function(container, toolType) {

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
*/

if (typeof sketch === 'undefined') sketch = {};

(function(root) { 'use strict';

root.module = root.module || {};
root.module.Configure = function(root, doc, CustomToolset) {

	var config = {};
	///
	var dom = root.dom;
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
				onchange: function(param, value) {
					var res = {};
					res[param] = ui.DOC.param.presetData[value];
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
			})
	//		,x: new vars.Input(100, 0, 100, '%')
	//		,y: new vars.Input(100, 0, 100, '%')
	//		,width: new vars.Input(100, 0, 100, '%')
	//		,height: new vars.Input(100, 0, 100, '%')
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
		stroke: UIStyle('stroke'),
		opacity: UIOpacity()
// 		, imperfection: UIRange('imperfection', 0, 0, 100, 'float')
// 		, anticlockwise: false
	}, {
		pie: {
			angle: UIRange('angle', [0, 270], 0, 360, 'degree', {canCross:true})
		},
		ring: {
			angle: UIRange('angle', [0, 360], 0, 360, 'degree', {canCross:true}),
			cutout: UIRange('cutout', 0.5, 0.0, 0.99, 'float')
		},
		ellipse: {
			cutout: UIRange('cutout', 0.0, 0.0, 0.99, 'float')
		},
		circle: {
			cutout: UIRange('cutout', 0.0, 0.0, 0.99, 'float')
		},
		rectangle: {
			roundness: UIRange('roundness', 0, 0, 1, 'float'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, 'float')
		},
		square: {
			roundness: UIRange('roundness', 0, 0, 1, 'float'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, 'float')
		},
		regularPolygon: {
			sides: UIRange('sides', 5, 3, 25, 'int'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, 'float')
		},
		triangle: {
			cutout: UIRange('cutout', 0, 0.0, 0.99, 'float')
		},
		gear: {
			sides: UIRange('sides', 30, 2, 100, 'int'),
			slope: UIRange('slope', 0.9, 0.01, 1, 'float'),
			cutout: UIRange('cutout', 0, 0.0, 0.99, 'float')
		},
		star: {
			sides: UIRange('sides', 5, 2, 50, 'int'),
			slope: UIRange('slope', 0.5, 0.01, 1, 'float'),
			cutout: UIRange('cutout', 0, 0, 0.99, 'float')
		},
		burst: {
			sides: UIRange('sides', 5, 2, 50, 'int'),
			slope: UIRange('slope', 0.001, 0.001, 10, 'float'),
			cutout: UIRange('cutout', 0, 0, 0.99, 'float')
		},
		radialBurst: {
			sides: UIRange('sides', 12, 2, 100, 'int'),
			spread: UIRange('spread', 0.5, 0.01, 1, 'float')
		},
		spiral: {
			sides: UIRange('sides', 10, 1, 25, 'int'),
			coils: UIRange('coils', 1, 0.001, 10, 'float'),
			spread: UIRange('spread', 25, 0.5, 50, '%')
		},
		supershape: {
			points: UIRange('points', 500, 50, 1000, 'int'),
			m: UIRange('m', 39, 0.10, 50, 'int'),
			n1: UIRange('n1', 1, 0.1, 15, 'float'),
			n2: UIRange('n2', 0.9, 0.1, 15, 'float'),
			n3: UIRange('n3', 0.25, 0.1, 15, 'float'),
			cutout: UIRange('cutout', 0, 0, 0.99, 'float')
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
		buttons: new ui.vars.HTML({ //- move to ConfigureText.js ?
			construct: function($parent, attr, type) {				
				var element = dom.append($parent, 'div');
				element.className = 'sk-text-buttons';
				///
				var defs = {
					'bold': {
						cssproperty: 'fontWeight',
						value: 'bold',
						defaults: 'normal',
						enabled: attr.fontWeight === 'bold'
					},
					'italic': {
						cssproperty: 'fontStyle',
						value: 'italic',
						defaults: 'normal',
						enabled: attr.fontStyle === 'italic'
					},
					'underline': {
						cssproperty: 'textDecoration',
						value: 'underline',
						defaults: 'none',
						enabled: attr.textDecoration === 'underline'
					},
					'line-through': {
						cssproperty: 'textDecoration',
						value: 'line-through',
						defaults: 'none',
						enabled: attr.textDecoration === 'line-through'
					}
				};
				///
				util.each(defs, function(def) {
					var cssproperty = def.cssproperty;
					var defaults = def.defaults;
					var value = def.value;
					///
					var UIButton = ui.Button({
						container: element,
						tooltip: def.value,
						className: 'sk-button icon-' + value,
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
							doc.setParam({
								param: cssproperty,
								value: values.join(',') || defaults
							});
						}
					});
					///
					var $element = UIButton.element;
					var classList = $element.classList;
					if (attr[cssproperty].indexOf(value) !== -1) {
						classList.add('selected');
					}
				});
			}
		}),
		///
		palette: UIPalette(),
		composite: UIComposite(),
		///
		fill: UIStyle('fill'),
		stroke: UIStyle('stroke'),
		background: UIStyle('background'),
		///
		opacity: UIOpacity(),
		content: '',
		fontWeight: 'normal', // bold | bolder | lighter | 100-900
		fontSize: UIRange('fontSize', 30, 1, 120, 'float'),
		fontFamily: 'Arial',
		fontVariant: 'normal', // small-caps | normal
		fontStyle: 'normal', // oblique | italic | normal
		lineHeight: 1.0, //UIRange('lineHeight', 30, 1, 120, 'float'),
		letterSpacing: 0.0, //UIRange('letterSpacing', 0, 0, 20, 'float'),
		textAlign: 'center', // left | right | center | justify
		textDecoration: 'none', // underline | overline | line-through
		/*
			subscript | superscript // this is a pair of properties...
			.superscript {
				vertical-align: super;
				font-size: smaller;
			}
		*/
		textTransform: 'none', // capitalize, uppercase, lowercase
		whiteSpace: 'pre-wrap' // normal, pre, pre-line, pre-wrap, pre-nowrap, nowrap
	});


	/* Speechbubble
	------------------------------------------------------- */
	Set({
		toolkitId: 'speechbubble',
		composite: UIComposite(),
		opacity: UIOpacity()
	});


	/* Image | Video
	------------------------------------------------------- */
	Set({
		toolkitId: 'media',
//		palette: UIPalette(),
		composite: UIComposite(),
// 		fill: UIStyle('fill'),
// 		stroke: UIStyle('stroke'),
		opacity: UIOpacity(),
//		src: './media/stamp/Basic/0-live.png',
		hue: UIRange('hue', 0.0, 0.0, 360.0, 'float', {gradient: ['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#f00']}),
		saturation: UIRange('saturation', 1.0, 0.0, 3.0, 'float', {gradient: ['#ffffff', '#ffffbf', '#9eff9e', '#7ffffa', '#5e5eff', '#ff3fff', '#f00']}),
		temperature: UIRange('temperature', 0.0, -32.0, 32.0, 'float', {gradient: ['#568fcf', '#f7e146']}),
		tint: UIRange('tint', 0.0, -32.0, 32.0, 'float', {gradient: ['#00ae47', '#c73baf']}),
		exposure: UIRange('exposure', 1.0, 0.0, 2.0, 'float', {gradient: ['#333', '#bbb']}),
		brightness: UIRange('brightness', 0.0, -100.0, 100.0, 'float', {gradient: ['#333', '#bbb']}),
		contrast: UIRange('contrast', 0.0, -0.5, 0.5, 'float', {gradient: ['#bbb', '#333']}),
		reset: new vars.Button({
			title: 'reset',
			style: 'width: 94%; margin: 0 3%;',
			onclick: function(event) {
				eventjs.prevent(event);
				doc.setParams({
					filter: 'image',
					params: {
						'hue': 0,
						'saturation': 1,
						'temperature': 0,
						'tint': 0,
						'exposure': 1,
						'brightness': 0,
						'contrast': 0
					}
				});
				ui.configurePane();
			}
		})
	}, {
		image: true,
		video: true
	});


	/* Clipart | Symbol
	------------------------------------------------------- */
	Set({
		toolkitId: 'media',
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
		opacity: UIOpacity(),
		interval: 1,
		spacing: {
			min: 1,
			max: 25
		},
		buttons: new vars.HTML({
			construct: function($parent, attr, type) {
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
			
				if (type === 'polygon') {
					ui.appendButton($parent, new vars.Button({
						className: 'green',
						title: 'close path',
						style: 'margin: 5px 0 5px 5px; width: 96%;',
						onclick: closePath
					}));
				} else {
					ui.appendButton($parent, new vars.Button({
						className: 'green',
						title: 'close path',
						style: 'float: left; margin: 5px 0 5px 5px; width: 43%;',
						onclick: closePath
					}));
					ui.appendButton($parent, new vars.Button({
						className: 'green',
						title: 'finish editing',
						style: 'float: right; margin: 5px 5px 5px 0; width: 50%;',
						onclick: finishEditing
					}));
					///
					$parent.appendChild(dom.create('<div style="clear: both"></div>'));
				}
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
		opacity: UIOpacity(),
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
			diameter: UIRange('diameter', 10, 1, 50, 'px')
		},
		chrome: {
			opacity: UIOpacity(25),
			spacing: {
				min: 1,
				max: 100
			},
			lineWidth: UIRange('lineWidth', 1, 0.1, 5, 'px'),
			spread: UIRange('spread', 15, 1, 50, 'float'),
			lookback: 2000
		},
		shader: {
			opacity: UIOpacity(75),
			spacing: {
				min: 1,
				max: 3
			},
			lineWidth: UIRange('lineWidth', 0.5, 0.1, 5, 'px'),
			spread: UIRange('spread', 40, 1, 50, 'float'),
			lookback: 2000
		},
		sketchy: {
			opacity: UIOpacity(50),
			spacing: {
				min: 1,
				max: 100
			},
			lineWidth: UIRange('lineWidth', 1, 0.1, 5, 'px'),
			spread: UIRange('spread', 25, 1, 100, 'float'),
			lookback: 2000
		},
		web: {
			opacity: UIOpacity(25),
			spacing: {
				min: 1,
				max: 100
			},
			lineWidth: UIRange('lineWidth', 1, 0.1, 5, 'px'),
			spread: UIRange('spread', 25, 1, 100, 'int'),
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
			opacity: UIOpacity(60),
			lineWidth: UIRange('lineWidth', 0.1, 0.1, 5, 'px'),
			distance: UIRange('distance', 25, 1, 250, 'float'),
			contract: 0.005,
			innerRadius: UIRange('innerRadius', 43.92920353982301, 1, 100, 'float'),
			outerRadius: UIRange('outerRadius', 35.16814159292035, 1, 100, 'float'),
			increment: UIRange('increment', 0.576991150442478, 0.1, 5, 'float'),
			spacing: UIRange('spacing', [1, 5], 1, 50, 'px'),
			speed: UIRange('speed', 100, 1, 100, 'float')
		},

		/* Raster brushes
		------------------------------------------------------- */
		spraypaint: {
			opacity: UIOpacity(25),
			spacing: {
				min: 1,
				max: 50
			}
	//		, speed: UIRange('speed', 100, 1, 100, 'float')
			, diameter: UIRange('diameter', 70, 25, 250, 'px')
		},
		crayon: {
			rotate: UIRange('rotate', [1, 360], 1, 360, 'degree', {hidden:true}),
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
	// 		stroke: UIStyle('stroke'),
			opacity: UIOpacity(85),
	//		speed: UIRange('speed', 100, 1, 100, 'float'),
			diameter: UIRange('diameter', 100, 5, 500, 'px'),
			rotate: UIRange('rotate', [1, 360], 1, 360, 'degree'),
			scale: UIRange('scale', [0.05, 1.5], 0.05, 3, '%'),
			translate: UIRange('translate', [0,0], 0, 250, 'px'),
			spacing: UIRange('spacing', [12, util.INFINITY], 1, 250, 'px'),
			interval: 1,
			pollock: false
	//		, src: './media/stamp/Water Colors/0-live.png'
	//		, filePicker: new vars.FilePicker('stamp')
		},

		/* Pixel brushes
		------------------------------------------------------- */
		floodfill: {
			spacing: false,
			tolerance: UIRange('tolerance', 60, 1, 100, '%'),
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
			rotate: UIRange('rotate', [1, 360], 1, 360, 'degree', {hidden: true}),
			diameter: UIRange('diameter', 25, 3, 42, 'px')
		}
	});

	/// clone defaults for reset
	(function() {
		var defaults = util.copy(config);
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
			var toolkitId = tool && tool.toolkitId || base.toolkitId;
			var toolkit = CustomToolset[toolkitId] || {};
			var tool = CustomToolset[type];
			if (tool || toolkit.allTypes) {
				return util.copyInto(tool, util.copy(toolkit));
			}
		};

		for (var type in tools) {
			var userConfig;
			if (CustomToolset && !(userConfig = getUserConfig())) {
				continue; // disable tool
			} else {
				base.__config = true; // so can be detectable as 'config' vs 'object'
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