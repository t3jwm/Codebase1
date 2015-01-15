if (typeof (sketch) === "undefined") sketch = {};

(function (root) { "use strict";

root.setup.add(function() {
	var formats = [
		"jpg","jpeg","gif","png","svg"
	];
	///
	if (root.io.json) formats.push("json");
	if (root.io.zip) formats.push("zip");
	if (root.io.json && root.io.zip) formats.push("sketch");
	if (window.PDFJS) formats.push("pdf");
	if (window.PSD) formats.push("psd");
	if (root.convert.blobToABR) formats.push("abr");
	if (root.convert.blobToGBR) formats.push("gbr");
	if (sketch.util.exists("Color.open.GGR")) formats.push("gbr");
	if (sketch.util.exists("Color.open.GPL")) formats.push("gpl");
	///
	root.util.uploader = new widget.Uploader({
		confirm: "json",
		action: root.loc.POST,
		mode: "read",
		maxFiles: root.userAgent.ios ? 1 : Infinity,
		formats: formats.join(","),
		dropAreaMessage: '<div style="line-height: 1.2em; display: table-cell; vertical-align: middle;">' +
			"Drop file(s) here<br><div style='font-size: 0.35em; line-height: 2em; width:600px;display:inline-block;'>Accepted formats: <br>"+formats.join(", ") +'</div></p>\
      </div>' ,
		onChange: function (self, event) {	
			/// Get the coordinates where file was dropped.
			if (typeof(event.pageX) !== "undefined") {
				var container = root.canvas2d.container;
				var pt = eventjs.proxy.getCoord(event);
				var bbox = eventjs.proxy.getBoundingBox(container);
				var x = pt.x - bbox.x1 - bbox.scrollBodyLeft;
				var y = pt.y - bbox.y1 - bbox.scrollBodyTop;
				root.util.uploader.addMedia(self, { x: x, y: y });
			} else { // from input
				root.util.uploader.addMedia(self, {});
			}
		},
		onProgress: function(self) {
			if (root.loader.thread) {
				root.loader.update(root.loader.thread, "Uploading...", self.transferPercent);
			} else {
				root.loader.thread = root.loader.add("Uploading...", self.transferPercent);
			}
		},
		onError: function(self, error, event) {
			if (window.alertify) alertify.log("Invalid format uploaded.");
			root.loader.stop();
		}
	});
	
	root.util.uploader.addMedia = function(self, pt, callback) {
		pt = pt || {};
		///
		if (!root.addMedia) {
			return console.log("missing sk.addMedia module");
		}
		///
		var openAsNew;
		if (self.openAsNew) {
			openAsNew = true;
			self = self.self;
		}
		///
		var container = root.canvas2d.container;
		var width = container.offsetWidth;
		var height = container.offsetHeight;

		/// reset any changes made to image filters (raw image)
		root.reset.configure("image");

		/// Make sure no actions are in genesis.
		root.scene.deselectAll();
		///
		var selection = [];
		var render = function() {
			if (!root.feature.vector.edit) root.scene.deselectAll();
			if (isFinite(root.selection.idx)) selection.push(root.selection.idx);
			setTimeout(queue.next, 50);
		};
		////
		var files = self.changedFilesByName;
		if (files["sketch.json"]) { // sketch uploaded as a folder
			return root.open.folder(files);
		}
		/// Handle changed files.
		var queue = new sketch.util.Queue({
			flatten: false,
			items: self.changedFiles,
			oncomplete: function() {
				if (selection.length <= 1) {
					if (selection.length && root.ui.buildConfigure) {
						var idx = selection[0];
						var action = root.scene.data[idx];
						root.ui.buildConfigure(action.type);
					}
				} else {
					root.exec("select");
					root.scene.deselectAll();
					root.scene.selectByIndex(selection, false);
					root.render.dirtyControls = true;
					root.render("root.setup.uploader");
				}
				///
				if (callback) callback();
			},
			next: function(file) {
				queue = this;
				if (root.vortex && (file.type || "").indexOf("image/") === 0 && pt.x && pt.y) {
					var y1 = root.canvas2d.bounds.y1;
					var x1 = root.canvas2d.bounds.x1;
					pt.x += x1;
					pt.y += y1;
					///
					root.vortex.create(file, pt, function() {
						root.vortex.destroy(file.src);
						root.addMedia({
							openAsNew: openAsNew,
							blob: file,
							x: pt.x - x1,
							y: pt.y - y1,
							onload: render
						})
					});
					root.vortex.update(file.src, file.name || "adding image");
				} else {
					root.addMedia({
						openAsNew: openAsNew,
						blob: file,
						x: pt.x,
						y: pt.y,
						onload: render
					});
				}
			}
		});
	};
});

})(sketch);