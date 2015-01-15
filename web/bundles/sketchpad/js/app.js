/*
	-------------------------------------------------------
	SketchAPI - Basic example
	-------------------------------------------------------
*/

sk.addEvent(window, "load", function() {
	sk.construct({
		onready: function () { // when sketch.js completes loading
			sk.palette.init();
			sk.addScene();
			///
			sk.util.uploader.createFileInput({
				element: document.querySelector("#tool-open")
			});
		},
		onsupport: function() {
			sk.windows.add({
				"sk-palette": {
					format: "px", 
					position: "top left",
					left: 20,
					top: 40
				}
			});
		},
		/// 
		lang: "en", // default language (i18n).
		container: ".sketchapi", // DOM element where sketchpad will reside.
		background: "#fff", // w3 style background for sketch
		prefix: "myAppName", // prefix used in localStorage.
		///
		feature: { // features enabled in sketch.js
			project: {
				lockProperties: true,
				background: "#fff", // w3 style background for sketch
//				width: 1200/2, // width of project
//				height: 627, // height of project
//				units: "px"
			},
			palette: {
				blend: true,
				hexInput: true, // enable hex input
				colorPicker: true, // enable color picker
				closeButton: true,
				eyeDropper: true, // enable eye dropper support
				gradient: true, // enable gradient support
				pattern: true, 
				grid: true // display palette 
			},
			canvas: {
				clearWithBackground: false,
				saveWithBackground: false,
				zoom: {
					min: 0.25, 
					max: 6,
					increment: 0.10
				}
			},
			tools: { // default tool setup
				controls: {
					"mouse": {
						"width": 21,
						"height": 21,
						"padding": 10
					},
					"touch": {
						"width": 21,
						"height": 21,
						"padding": 10
					},
					"anchor": { // bounding box around focused object
						"command": "move",
						"cursor": "pointer",
						"title": "Click To Select", // title for generic tools
						"title:selected": "Drag to Move", // title for selected tool
						"title.text": "Double Click To Edit", // title for text tool
						"padding": 5,
						"normal": {
							"lineWidth": 0.5,
							"shadowColor": "rgba(0,0,0,0.75)",
							"shadowOffsetX": 1,
							"shadowOffsetY": 1,
							"shadowBlur": 1,
							"strokeStyle": "#DADADA"
						},
						"focus": {
							"lineWidth": 2,
							"shadowColor": "rgba(0,0,0,0.5)",
							"shadowOffsetX": 1,
							"shadowOffsetY": 1,
							"shadowBlur": 1,
							"strokeStyle": "#0080C2"
						}
					},
					"nw": { // remove
						"command": "delete",
						"cursor": "pointer",
						"title": "<span style='color: red; text-shadow: 0 0 9px #fff;'>Delete</span>",
						"normal": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<path fill="#ffffff" d="M8,0L8,0c4.418,0,8,3.582,8,8l0,0c0,4.418-3.582,8-8,8l0,0c-4.418,0-8-3.582-8-8l0,0C0,3.582,3.582,0,8,0z"/>\
								<path fill="#9b9a9a" d="M10.285,13.577l-2.192-3.391l-2.194,3.391H2.672l3.816-5.523L2.814,2.695h3.309l2.03,3.167l2.05-3.167 h3.228l-3.675,5.3l3.837,5.583H10.285z"/>\
							</svg>'
						},
						"hover": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<path fill="#ffffff" d="M8,0L8,0c4.418,0,8,3.582,8,8l0,0c0,4.418-3.582,8-8,8l0,0c-4.418,0-8-3.582-8-8l0,0C0,3.582,3.582,0,8,0z"/>\
								<path fill="#F90B0B" d="M10.285,13.577l-2.192-3.391l-2.194,3.391H2.672l3.816-5.523L2.814,2.695h3.309l2.03,3.167l2.05-3.167 h3.228l-3.675,5.3l3.837,5.583H10.285z"/>\
							</svg>'
						}
					},
					"sw": { // move
						"command": "move",
						"cursor": "pointer",
						"title": "Drag to Move",
						"normal": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<path fill="rgba(255,255,255,1)" d="M8,0L8,0c4.418,0,8,3.582,8,8l0,0c0,4.418-3.582,8-8,8l0,0c-4.418,0-8-3.582-8-8l0,0C0,3.582,3.582,0,8,0z"/>\
								<polygon fill="#9b9a9a" points="15.542,8.148 12.229,5.664 12.229,7.319 8.914,7.319 8.914,4.007 10.571,4.007 8.086,0.692 \
									5.601,4.007 7.257,4.007 7.257,7.319 3.944,7.319 3.944,5.664 0.63,8.148 3.944,10.634 3.944,8.977 7.257,8.977 7.257,12.292 \
									5.601,12.292 8.086,15.604 10.571,12.292 8.914,12.292 8.914,8.977 12.229,8.977 12.229,10.634 "/>\
							</svg>'
						},
						"hover": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<path fill="rgba(255,255,255,1)" d="M8,0L8,0c4.418,0,8,3.582,8,8l0,0c0,4.418-3.582,8-8,8l0,0c-4.418,0-8-3.582-8-8l0,0C0,3.582,3.582,0,8,0z"/>\
								<polygon fill="#F90B0B" points="15.542,8.148 12.229,5.664 12.229,7.319 8.914,7.319 8.914,4.007 10.571,4.007 8.086,0.692 \
									5.601,4.007 7.257,4.007 7.257,7.319 3.944,7.319 3.944,5.664 0.63,8.148 3.944,10.634 3.944,8.977 7.257,8.977 7.257,12.292 \
									5.601,12.292 8.086,15.604 10.571,12.292 8.914,12.292 8.914,8.977 12.229,8.977 12.229,10.634 "/>\
							</svg>'
						}
					},
					"ne": { // rotate
						"command": "rotate",
						"cursor": "pointer",
						"title": "Drag To Rotate",
						"normal": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<rect fill="rgba(255,255,255,1)" x="0" y="0" rx="8" ry="8" width="16" height="16"/>\
								<path fill="#9b9a9a" d="M11.275,3H13V1h-3H8v2v3h2V4.555C11.19,5.248,12,6.523,12,8c0,2.209-1.791,4-4,4s-4-1.791-4-4 c0-1.477,0.81-2.752,2-3.445V2.349C3.671,3.174,2,5.389,2,8c0,3.314,2.686,6,6,6s6-2.686,6-6C14,5.9,12.91,4.07,11.275,3z"/>\
							</svg>'
						},
						"hover": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<rect fill="rgba(255,255,255,1)" x="0" y="0" rx="8" ry="8" width="16" height="16"/>\
								<path fill="#F90B0B" d="M11.275,3H13V1h-3H8v2v3h2V4.555C11.19,5.248,12,6.523,12,8c0,2.209-1.791,4-4,4s-4-1.791-4-4 c0-1.477,0.81-2.752,2-3.445V2.349C3.671,3.174,2,5.389,2,8c0,3.314,2.686,6,6,6s6-2.686,6-6C14,5.9,12.91,4.07,11.275,3z"/>\
							</svg>'
						}
					},
					"se": { // resize
						"command": "scale",
						"cursor": "pointer",
						"title": "Drag To Resize",
						"normal": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<rect fill="rgba(255,255,255,1)" x="0" y="0" rx="8" ry="8" width="16" height="16"/>\
								<polygon fill="#9b9a9a" points="12,8 12,10.586 5.414,4 8,4 8,2 2,2 2,8 4,8 4,5.414 10.586,12 8,12 8,14 14,14 14,8 "/>\
							</svg>'
						},
						"hover": {
							"src": '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">\
								<rect fill="rgba(255,255,255,1)" x="0" y="0" rx="8" ry="8" width="16" height="16"/>\
								<polygon fill="#F90B0B" points="12,8 12,10.586 5.414,4 8,4 8,2 2,2 2,8 4,8 4,5.414 10.586,12 8,12 8,14 14,14 14,8 "/>\
							</svg>'
						}
					}
				},
				drawCenterPoint: false,
				drawBoundingBox: true,
				usePointInPath: false,
				usePointInBoundingBox: true,
				usePointInImageData: false,
				usePointNearest: true,
				movable: true
			},
			vector: {
				record: true, // record data to root.scene.data
				edit: true // enable data for editing
			},
			history: {
				autoSelect: true, // auto-select elements changed by undo or redo
				limit: sk.util.INFINITY, // how many undos are stored (unlimited)
				vector: true, // vector history is turned on 
				bitmap: false // bitmap history is turned off (no need if in editable mode)
			},
			sync: { // synchronize these items with server on save
				json: true, // turn off if not saving vector format
				image: { // sync image to server (optional sizing object).
					format: "png", // format of file
//					compress: 0.7, // float between 0-1 [jpeg option]
					background: "#ffffff" // #000, black, ect
				}
			}
		},
		///
		hosts: { // paths to POST and GET and various servers
			"localhost": { // your localhost
				HOST: "localhost/sketch",
				GET: "localhost/sketch/filesystem.php?sketch=",
				POST: "localhost/sketch/filesystem.php",
				alias: [ "192.168.0.3", "mud.local" ] // aliases for host setup
			},
			"yourserver.com": { // your server
				HOST: "sketch.io/",
				GET: "sketch.io/projects/basic/filesystem.php?sketch=",
				POST: "sketch.io/projects/basic/filesystem.php"
			}
		}
	});
});