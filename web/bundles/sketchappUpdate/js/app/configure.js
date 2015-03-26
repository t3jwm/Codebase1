/*
	----------------------------------------------------------
	app/Configure : 0.1.3 : 2015-03-09 : https://sketch.io
	----------------------------------------------------------
*/

if (typeof sketch === 'undefined') sketch = {};

(function(root) { 'use strict';

root.module = root.module || {};
root.module.Configure = function(root, doc) {

	var config = {};
	///
	var util = root.util;
	var vars = root.ui.vars;
	///
	var Button = vars.Button;
	var Checkbox = vars.Checkbox;
	var Input = vars.Input;
	var Palette = vars.Palette;
	var Radio = vars.Radio;
	var Range = vars.Range;
	var Resource = vars.Resource;
	var Select = vars.Select;
	var SubTool = vars.SubTool;
	///
	var addClone = config.addClone = function(from, to, extend) {
		var isObject = typeof from === 'object';
		var obj = util.copy(isObject ? from : config[from]);
		if (obj) {
			obj.type = to;
			config[to] = obj;
			///
			if (extend) {
				for (var key in extend) {
					if (extend[key] === null) {
						delete obj[key];
					} else {
						obj[key] = extend[key];
					}
				}
			}
		}
	};

	var createRange = function(param, value, min, max, format, params) {
		return new Range(util.copyInto(params, {
			param: param,
			value: value,
			min: min,
			max: max,
			format: format
		}));
	};

	var createFill = function(params) {
		if (root.style) {
			return new root.style.Fill(params);
		} else {
			return console.warn('requires sk.style');
		}
	};

	var createStroke = function(params) {
		if (root.style) {
			return new root.style.Stroke(params);
		} else {
			return console.warn('requires sk.style');
		}
	};

	var createOpacity = function(value) {
		value = isFinite(value) ? value : 100;
		return new Range({ // 0.001 so selection still works
			param: 'opacity',
			value: value,
			min: 0.001,
			max: 100,
			format: '%',
			gradient: ['#333', '#bbb']
		});
	};

	var createComposite = function() {
		return new Select({
			label: 'blend', // <span class='icon-opacity' style='color: #999'></span>',
// 			labelIcon: 'icon-opacity',
			param: 'composite',
			selected: 'normal',
			title: 'choose-blend',
			options: function() {
				return root.style.getBlendOptions();
			},
			onchange: function(param, value) {
				root.style.setComposite(value, null, true);
			}
		});
	};
	
	
	/* Utilities
	------------------------------------------------------- */
	var UTILITY = {
		subtool: new SubTool({
			param: 'utility',
			title: 'utilities'
		})
	};

	addClone(UTILITY, 'select', {
		toolkit: 'select',
		type: 'select'
	});

	addClone(UTILITY, 'screenshot', {
		toolkit: 'screenshot',
		type: 'screenshot'
	});

	addClone(UTILITY, 'eyedropper', {
		toolkit: 'eyedropper',
		type: 'eyedropper'
	});

	addClone(UTILITY, 'laserPointer', {
		toolkit: 'laserPointer',
		type: 'laserPointer'
	});
	

	/* Crop
	------------------------------------------------------- */
	config.crop = {
		toolkit: 'crop',
		type: 'crop',
		subtool: new SubTool({
			param: 'utility',
			title: 'utilities'
		}),
// 		aspect: new Select({
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
		ratio: new Select({
			options: function() {
				return root.ui.DOC.param.preset;
			},
			param: 'ratio',
			selected: 'size:377x197,units:px,dpi:72', //'377 x 197 (Facebook)',
			label: 'aspect-ratio',
			title: 'choose-aspect-ratio',
			onchange: function(param, value) {
				var res = {};
				res[param] = root.ui.DOC.param.presetData[value];
				doc.tool.update(res);
			}
		}),
		constrain: new Checkbox({
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
//		,x: new Input(100, 0, 100, '%')
//		,y: new Input(100, 0, 100, '%')
//		,width: new Input(100, 0, 100, '%')
//		,height: new Input(100, 0, 100, '%')
	};


	/* Zoom
	------------------------------------------------------- */
	config.zoom = {
		toolkit: 'zoom',
		type: 'zoom',
		subtool: new SubTool({
			param: 'utility',
			title: 'utilities'
		})
//		, amount: createRange('amount', 100, 10, 500, '%')
	};


	/* Group
	------------------------------------------------------- */
	config.group = {
		toolkit: 'group',
		type: 'group',
		composite: createComposite(),
		opacity: createOpacity()
	};


	/* Shapes
	------------------------------------------------------- */
	var SHAPE = {
		toolkit: 'shape',
		subtool: new SubTool({
			param: 'shape',
			title: 'shapes'
		}),
		palette: new Palette(),
		composite: createComposite(),
		fill: createFill(),
		stroke: createStroke(),
		opacity: createOpacity()
// 		, lineWidth: createRange('lineWidth', 1, 0.1, 5, 'px')
// 		, imperfection: createRange('imperfection', 0, 0, 100, 'float')
// 		, anticlockwise: false
	};

	addClone(SHAPE, 'pie', {
		angle: createRange('angle', [0, 270], 0, 360, 'float', {canCross:true})
	});

	addClone(SHAPE, 'ring', {
		angle: createRange('angle', [0, 360], 0, 360, 'float', {canCross:true}),
		cutout: createRange('cutout', 0.5, 0.0, 0.99, 'float')
	});

	addClone(SHAPE, 'rectangle', {
		roundness: createRange('roundness', 0, 0, 1, 'float'),
		cutout: createRange('cutout', 0, 0.0, 0.99, 'float')
	});

	addClone(SHAPE, 'square', {
		roundness: createRange('roundness', 0, 0, 1, 'float'),
		cutout: createRange('cutout', 0, 0.0, 0.99, 'float')
	});

	addClone(SHAPE, 'regularPolygon', {
		sides: createRange('sides', 5, 3, 25, 'int'),
		cutout: createRange('cutout', 0, 0.0, 0.99, 'float')
	});

	addClone(SHAPE, 'gear', {
		sides: createRange('sides', 30, 2, 100, 'int'),
		slope: createRange('slope', 0.9, 0.01, 1, 'float'),
		cutout: createRange('cutout', 0, 0.0, 0.99, 'float')
	});

	addClone(SHAPE, 'star', {
		sides: createRange('sides', 5, 2, 50, 'int'),
		slope: createRange('slope', 0.5, 0.01, 1, 'float'),
		cutout: createRange('cutout', 0, 0, 0.99, 'float')
	});

	addClone(SHAPE, 'burst', {
		sides: createRange('sides', 5, 2, 50, 'int'),
		slope: createRange('slope', 0.001, 0.001, 10, 'float'),
		cutout: createRange('cutout', 0, 0, 0.99, 'float')
	});

	addClone(SHAPE, 'radialBurst', {
		sides: createRange('sides', 12, 2, 100, 'int'),
		spread: createRange('spread', 0.5, 0.01, 1, 'float')
	});

	addClone(SHAPE, 'spiral', {
		sides: createRange('sides', 10, 1, 25, 'int'),
		coils: createRange('coils', 1, 0.001, 10, 'float'),
		spread: createRange('spread', 25, 0.5, 50, '%')
	});

	addClone(SHAPE, 'supershape', {
		points: createRange('points', 500, 50, 1000, 'int'),
		m: createRange('m', 39, 0.10, 50, 'int'),
		n1: createRange('n1', 1, 0.1, 15, 'float'),
		n2: createRange('n2', 0.9, 0.1, 15, 'float'),
		n3: createRange('n3', 0.25, 0.1, 15, 'float'),
		cutout: createRange('cutout', 0, 0, 0.99, 'float')
	});

	addClone(SHAPE, 'ellipse', {
		cutout: createRange('cutout', 0.0, 0.0, 0.99, 'float')
	});

	addClone(SHAPE, 'circle', {
		cutout: createRange('cutout', 0.0, 0.0, 0.99, 'float')
	});
	///
	addClone('regularPolygon', 'triangle', {sides: null});


	/* Text
	------------------------------------------------------- */
	config.text = {
		toolkit: 'text',
		type: 'text',
		resource: new Resource({
			format: 'text',
			label: 'fontFamily',
			title: 'choose-font'
		}),
		palette: new Palette(),
		composite: createComposite(),
		fill: createFill(),
		stroke: createStroke(),
		opacity: createOpacity(),
		content: '',
		fontWeight: 'normal', // bold, bolder, lighter, 100-900
		fontSize: createRange('fontSize', 30, 1, 120, 'float'),
		fontFamily: 'Arial',
		fontVariant: 'normal', // small-caps, normal
		fontStyle: 'normal', // oblique, italic, normal
//		lineHeight: createRange('lineHeight', 30, 1, 120, 'float'),
//		letterSpacing: createRange('letterSpacing', 0, 0, 20, 'float'),
		textAlign: 'center', // left, right, center, justify
		textDecoration: 'none', // overline, underline, line-through
		textTransform: 'none', // capitalize, uppercase, lowercase
		whiteSpace: 'pre-wrap' // normal, pre, pre-line, pre-wrap, pre-nowrap, nowrap
//		, blur: createRange('blur', 0, 0, 25, '%')
	};


	/* Speechbubble
	------------------------------------------------------- */
	config.speechbubble = {
		toolkit: 'speechbubble',
		type: 'speechbubble',
		composite: createComposite(),
		opacity: createOpacity()
	};


	/* Image
	------------------------------------------------------- */
	var IMAGE = {
		toolkit: 'media',
		type: 'image',
//		palette: new Palette(),
		composite: createComposite(),
// 		fill: createFill(),
// 		stroke: createStroke(),
		opacity: createOpacity(),
//		src: './media/stamp/Basic/0-live.png',
		hue: createRange('hue', 0.0, 0.0, 360.0, 'float', {gradient: ['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#f00']}),
		saturation: createRange('saturation', 1.0, 0.0, 3.0, 'float', {gradient: ['#ffffff', '#ffffbf', '#9eff9e', '#7ffffa', '#5e5eff', '#ff3fff', '#f00']}),
		temperature: createRange('temperature', 0.0, -32.0, 32.0, 'float', {gradient: ['#568fcf', '#f7e146']}),
		tint: createRange('tint', 0.0, -32.0, 32.0, 'float', {gradient: ['#00ae47', '#c73baf']}),
		exposure: createRange('exposure', 1.0, 0.0, 2.0, 'float', {gradient: ['#333', '#bbb']}),
		brightness: createRange('brightness', 0.0, -100.0, 100.0, 'float', {gradient: ['#333', '#bbb']}),
		contrast: createRange('contrast', 0.0, -0.5, 0.5, 'float', {gradient: ['#bbb', '#333']}),
		reset: new Button({
			title: 'reset',
			style: 'width: 94%; margin: 0 3%;',
			callback: function(event) {
				eventjs.prevent(event);
				doc.toolkit.setParams({
					selection: doc.selection.items,
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
				root.ui.configureBuild();
			}
		})
	};

	addClone(IMAGE, 'image');
	addClone(IMAGE, 'video');


	/* Clipart
	------------------------------------------------------- */
	config.clipart = {
		toolkit: 'media',
		type: 'clipart',
		filePicker: new vars.FilePicker('clipart'),
		resource: new Resource({
			format: 'clipart',
			label: 'clipart',
			title: 'choose-clipart'
		}),
		src: 'clipart/animals/1216139760278927551lemmling_Cartoon_cow.svg',
		composite: createComposite(),
// 		fill: createFill(),
// 		stroke: createStroke(),
		opacity: createOpacity()
	};


	/* Symbol
	------------------------------------------------------- */
	config.symbol = {
		toolkit: 'media',
		type: 'symbol',
		palette: new Palette(),
// 		src: 'clipart/animals/1216139760278927551lemmling_Cartoon_cow.svg',
		composite: createComposite(),
		fill: createFill(),
// 		stroke: createStroke(),
		opacity: createOpacity()
	};


	/* Vectorfill
	------------------------------------------------------- */
	config.vectorfill = {
		toolkit: 'vectorfill',
		type: 'vectorfill',
		palette: new Palette(),
		composite: createComposite(),
		fill: createFill(),
		opacity: createOpacity()
	};


	/* SVG Paths
	------------------------------------------------------- */
	var BRUSH = {
		toolkit: 'brush',
		subtool: new SubTool({
			param: 'brush',
			title: 'brushes'
		}),
		palette: new Palette(),
		composite: createComposite(),
		fill: createFill({
		    enabled: false
		}),
		stroke: createStroke({
		    enabled: true,
		    lineWidth: 2
		}),
		opacity: createOpacity(),
		interval: 1,
		spacing: {
			min: 1,
			max: 25
		},
		buttons: new vars.HTML({
			construct: function(node) {
// 				node.className = 'sk-footer';
				root.ui.appendButton(node, new Button({
					className: 'grey',
					title: 'close path',
					style: 'float: left; margin: 5px 0 5px 5px; width: 43%;',
					callback: function(event) {
						for (var pointerId in doc.render.pointer);
						var pointer = doc.render.pointer[pointerId];
						pointer.object.brush.closePath();
						pointer.object.brush.savePath();
					}
				}));
				root.ui.appendButton(node, new Button({
					className: 'grey',
					title: 'finish editing',
					style: 'float: right; margin: 5px 5px 5px 0; width: 50%;',
					callback: function(event) {
						for (var pointerId in doc.render.pointer);
						var pointer = doc.render.pointer[pointerId];
						pointer.object.brush.savePath();
					}
				}));
				node.appendChild(root.dom.create('<div style="clear: both"></div>'));
			}
		})
	};
	///
	addClone(BRUSH, 'polyline');
	addClone(BRUSH, 'polygon');
	addClone(BRUSH, 'path');
	///
	addClone(BRUSH, 'scissor', {
		fill: false,
		stroke: false,
		closePath: false
	});


	/* Brushes
	------------------------------------------------------- */
	var BRUSH = {
		toolkit: 'brush',
		subtool: new SubTool({
			param: 'brush',
			title: 'brushes'
		}),
		palette: new Palette(),
		composite: createComposite(),
		fill: createFill(),
		stroke: false,
		opacity: createOpacity(),
		interval: 1,
		spacing: {
			min: 1,
			max: 25
		}
	};

	///
	addClone(BRUSH, 'textbrush', {
		diameter: createRange('diameter', 10, 1, 100, 'px'),
		content: new vars.Textarea({
			label: 'content',
			param: 'content',
			value: '“The quick brown fox jumps over the lazy dog” is an English-language pangram – a phrase that contains all of the letters of the English alphabet.'
		})
	});

	addClone(BRUSH, 'arrow', {
		diameter: createRange('diameter', 35, 1, 250, 'px'),
//		, mode: createRange('mode', 1, 1, 3, 'int')
		curved: new Checkbox({
			checked: false,
			label: 'curved',
			param: 'curved'
		})
	});

	addClone(BRUSH, 'pencil', {
		diameter: createRange('diameter', 2, 1, 250, 'px'),
	});

	addClone(BRUSH, 'eraser', {
		subtool: false,
		palette: false,
		fill: false,
// 		stroke: false,
		composite: 'destination-out',
		diameter: createRange('diameter', 40, 1, 250, 'px'),
		blur: createRange('blur', 0, 0, 100, '%')
	});

	addClone(BRUSH, 'paintbrush', {
		diameter: createRange('diameter', 40, 1, 250, 'px'),
		blur: createRange('blur', 10, 0, 100, '%')
	});

	/* Vector brushes
	------------------------------------------------------- */
	addClone(BRUSH, 'streamer', {
		diameter: createRange('diameter', [0.001, 15], 0.001, 150, 'px'),
		spacing: {
			min: 5,
			max: util.INFINITY
		}
	});

	addClone(BRUSH, 'pen', {
		diameter: createRange('diameter', [0.5, 10], 0.001, 50, 'px'),
		spacing: {
			min: 5,
			max: util.INFINITY
		}
	});

	addClone(BRUSH, 'calligraphy', {
		diameter: createRange('diameter', 10, 1, 50, 'px')
	});

	addClone(BRUSH, 'chrome', {
		opacity: createOpacity(25),
		spacing: {
			min: 1,
			max: 100
		},
		lineWidth: createRange('lineWidth', 1, 0.1, 5, 'px'),
		spread: createRange('spread', 15, 1, 50, 'float'),
		lookback: 2000
	});

	addClone(BRUSH, 'shader', {
		opacity: createOpacity(75),
		spacing: {
			min: 1,
			max: 3
		},
		lineWidth: createRange('lineWidth', 0.5, 0.1, 5, 'px'),
		spread: createRange('spread', 40, 1, 50, 'float'),
		lookback: 2000
	});

	addClone(BRUSH, 'sketchy', {
		opacity: createOpacity(50),
		spacing: {
			min: 1,
			max: 100
		},
		lineWidth: createRange('lineWidth', 1, 0.1, 5, 'px'),
		spread: createRange('spread', 25, 1, 100, 'float'),
		lookback: 2000
	});

	addClone(BRUSH, 'web', {
		opacity: createOpacity(25),
		spacing: {
			min: 1,
			max: 100
		},
		lineWidth: createRange('lineWidth', 1, 0.1, 5, 'px'),
		spread: createRange('spread', 25, 1, 100, 'int'),
		lookback: 2000
	});

	addClone(BRUSH, 'fur', {
		spacing: {
			min: 1,
			max: 10
		},
		lineWidth: createRange('lineWidth', 1, 0.1, 25, 'px'),
		diameter: createRange('diameter', 75, 1, 750, 'px'),
		lookback: 2000
	});

	addClone(BRUSH, 'hair', {
		spacing: {
			min: 1,
			max: 5
		},
		lineWidth: createRange('lineWidth', 0.5, 0.1, 10, 'px'),
		diameter: createRange('diameter', 50, 1, 250, 'px'),
		lookback: 5
	});

	addClone(BRUSH, 'spirograph', {
		opacity: createOpacity(60),
		lineWidth: createRange('lineWidth', 0.1, 0.1, 5, 'px'),
		distance: createRange('distance', 25, 1, 250, 'float'),
		contract: 0.005,
		innerRadius: createRange('innerRadius', 43.92920353982301, 1, 100, 'float'),
		outerRadius: createRange('outerRadius', 35.16814159292035, 1, 100, 'float'),
		increment: createRange('increment', 0.576991150442478, 0.1, 5, 'float'),
		spacing: createRange('spacing', [1, 5], 1, 50, 'px'),
		speed: createRange('speed', 100, 1, 100, 'float')
	});

	/* Raster brushes
	------------------------------------------------------- */
	addClone(BRUSH, 'spraypaint', {
		opacity: createOpacity(25),
		spacing: {
			min: 1,
			max: 50
		}
//		, speed: createRange('speed', 100, 1, 100, 'float')
		, diameter: createRange('diameter', 70, 25, 250, 'px')
	});

	addClone(BRUSH, 'crayon', {
		rotate: createRange('rotate', [1, 360], 1, 360, 'degree', {hidden:true}),
		diameter: createRange('diameter', 19, 3, 100, 'px')
	});

	config.stamp = {
		toolkit: 'brush',
		type: 'stamp',
		subtool: new SubTool({
			param: 'brush',
			title: 'brushes'
		}),
		resource: new Resource({
			format: 'stamp',
			label: 'stamp',
			title: 'choose-stamp'
		}),
		palette: new Palette(),
		composite: createComposite(),
		fill: createFill(),
// 		stroke: createStroke(),
		opacity: createOpacity(85),
//		speed: createRange('speed', 100, 1, 100, 'float'),
		diameter: createRange('diameter', 100, 5, 500, 'px'),
		rotate: createRange('rotate', [1, 360], 1, 360, 'degree'),
		scale: createRange('scale', [0.05, 1.5], 0.05, 3, '%'),
		translate: createRange('translate', [0,0], 0, 250, 'px'),
		spacing: createRange('spacing', [12, util.INFINITY], 1, 250, 'px'),
		interval: 1,
		pollock: false
//		, src: './media/stamp/Water Colors/0-live.png'
//		, filePicker: new vars.FilePicker('stamp')
	};

	/* Pixel brushes
	------------------------------------------------------- */
	addClone(BRUSH, 'floodfill', {
		spacing: false,
		tolerance: createRange('tolerance', 60, 1, 100, '%'),
		antialias: false,
		contiguous: new Checkbox({
			checked: true,
			label: 'contiguous',
			param: 'contiguous'
		})
	});

	addClone(BRUSH, 'oil', {
		spacing: {
			min: 1,
			max: 1
		},
		blend: 0.98,
		bristles: 8,
		diameter: createRange('diameter', 50, 1, 100, 'px')
	});

	addClone(BRUSH, 'pastel', {
		spacing: false,
		blend: 0.97,
		bristles: 35,
		rotate: createRange('rotate', [1, 360], 1, 360, 'degree', {hidden: true}),
		diameter: createRange('diameter', 25, 3, 42, 'px')
	});

	/// clone defaults for reset
	(function() {
		var defaults = util.copy(config);
		config.reset = function(type) {
			config[type] = util.copy(defaults[type]);
		};
	})();

	return config;

};

})(sketch);