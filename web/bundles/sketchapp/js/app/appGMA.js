
(function (root) {

    var doc;
    var dom = root.dom;
    var lang = root.lang;
    var util = root.util;
    var ui = root.ui;

    var docWidth = 816; // equivalent to 8.5 x 11 inches in pixels at 72DPI
    var docHeight = 1056;


    /* onSupport */

    function onSupport(doc) {
        doc.toolkit.on('init', function () {
            root.config('tools', {
                'arrow': {
                    curved: true,
                    diameter: {
                        clamp: [1, 50]
                    }
                },
                'paintbrush->highlighter': {
                    globalPaint: false, // do not use global fill/stroke on this tool
                    fill: 'rgba(255, 255, 0, 0.75)', // semi-transparent yellow
                    composite: ['multiply', 'destination-over'], // blend mode fallback stack
                    blur: {
                        hidden: true, // hide this feature
                        value: 0 // no blur
                    },
                    diameter: {
                        value: 30,
                        clamp: [1, 100]
                    }
                },
                'pencil': {
                    diameter: {
                        value: 3,
                        clamp: [1, 20]
                    }
                }
            });
        });
    }


    /* onReady */

    function onReady(_doc) {

        doc = _doc;

        setupAddPage();
        setupExec();
        setupSidebar();
        setupToolbar();

        /// Tooltips
        var data = dom.$$('[data-title]');
        util.each(data, function (el) {
            ui.tooltip.add(el, el.getAttribute('data-title'));
        });

        /// Fastclick
        ui.fastclick('.sk-sidebar-right a');
        ui.fastclick('.sk-sidebar-right input[type="checkbox"]');
        ui.fastclick('.sk-help input');
        ui.fastclick('.sk-help textarea');

        /// Guide descriptions (toggle)
        var data = dom.$$('.sk-divider');
        util.each(data, function (el) {
            eventjs.add(dom.$('input', el), 'mousedown', eventjs.stop);
            eventjs.add(el, 'click', function (event) {
                eventjs.stop(event);
                el.classList.toggle('sk-show');
            });
        });

        /// Open Document
        var hash = root.loc.getSketchID();
        if (hash) {
            return root.open.json('./media/upload/username/' + hash + '.json?' + util.now(), function () {
// 			console.log('loaded!');
            });
        } else {
            root.exec('new');
            addPageMarker();
        }

        root.sidebarRight.open();

    }


    /* onLoad */

    eventjs.add(window, 'load', function () {
        var query = root.loc.search;

        root.construct({
            container: '.sk-doc', // DOM element where sketchpad lives
            focusElement: document.body,
            scrollElement: '.sk-doc',
            onready: onReady,
            onsupport: onSupport,
            feature: {// features enabled in sketchAPI
                lang: 'en', //'auto', // default language
                debug: !!query.debug, // debug mode
                debugCache: !!query.debugCache, // debug cache mode
                preventScroll: !query.debug, // prevent body scrolling (used on mobile or apps)
                preventTouch: !query.debug, // meh
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
                    usePixelRatio: false,
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
                tools: {// default tool setup
                    defaultTool: 'pencil',
                    defaults: {
                        useAddByDrag: true,
                        useAddByClick: true,
                        maxHeight: 4096, // maximum height of placed item
                        maxWidth: 4096, // maximum width of placed item
                        minHeight: 3, // minimum height of placed item
                        minWidth: 3, // minimum width of placed item
                        units: 'userSpaceOnUse',
                        usePointInBBox: true,
                        usePointInImageData: true,
                        usePointNearest: false
                    },
                    text: {
                        flippable: false,
                        useAutoHeight: false,
                        useHTML: false,
                        useResize: true
                    }
                },
                placement: {
                    mediaClick: false, // enable click on media in tool pane to add to canvas.
                    mediaDrag: true // enable drag media in tool pane into canvas.
                },
                history: {
                    autoSelect: true, // auto-select elements changed by undo or redo
                    limit: Infinity, // how many undos are stored (unlimited)
                    vector: true // vector history is turned on
                },
                sync: {// choose these items to synchronize with server on save
                    enabled: true,
                    hashFlag: 'file',
                    onsave: function () {
                        ui.log('changes-saved');
                        root.loader.create('syncing', lang.translate('syncing') + '...', 100);
                    },
                    onprogress: function (percent) {
                        root.loader.create('syncing', lang.translate('syncing') + '...', percent);
                    },
                    json: {// sync vector to server
                        embedAssets: true, // store assets in json
                        embedHistory: false, // store history in json
                        quality: 1.0, // encode at this quality level
                        toBlob: true // true | false - use binary upload
                    },
                    thumb: {// thumbnail of project
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
            icons: {
// 			brush: {
// 				src: 'icon-pencil', // default icon
// 				children: {
// 					'pencil': 'icon-pencil',
// 					'arrow': 'icon-arrow',
// 					'polyline': 'icon-polyline'
// 				}
// 			},
                shape: {// group shapes together
                    src: 'icon-square', // default shape
                    children: {// alternative shapes
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
            hosts: {// paths to POST and GET and various servers
                'localhost': {// my local testing environment [can be removed]
                    HOST: 'localhost/Symfony/patentthat2/web/app_dev.php',
                    GET: 'localhost/Symfony/patentthat2/web/app_dev.php/upload?sketch=',
                    POST: 'localhost/Symfony/patentthat2/web/app_dev.php/upload',
                    alias: ['mudcube.local']
                },
                'beta.patent-that.com': {// your web host
                    HOST: 'beta.patent-that.com',
                    GET: 'beta.patent-that.com/upload?sketch=',
                    POST: 'beta.patent-that.com/upload'
                }
            }
        });
    });


    /* Setup
     ---------------------------------------------------------- */
    function setupAddPage() {
        root.exec.register('add-page', function () {
            addPage();

            ui.log('New page added!');

            console.log('height', doc.height);
        });
    }

    function setupSidebar() {
        var onSidebar = function () {
            setTimeout(function () {
                var container = dom.$('.sketch-api');
                var method = sidebar.opened ? 'add' : 'remove';
                container.classList[method]('pad-left');

                var method = sidebarRight.opened ? 'add' : 'remove';
                container.classList[method]('pad-right');

                doc.setCanvasSize();
                doc.orient.reset();
                doc.orient.render();
            }, 350);
        };

        var sidebar = root.sidebar;
        sidebar.on('open', onSidebar);
        sidebar.on('close', onSidebar);

        var sidebarRight = root.sidebarRight = new root.module.UISidebar(root, 'right');
        sidebarRight.on('open', onSidebar);
        sidebarRight.on('close', onSidebar);

        util.cookie.get('show-sidebar-left', function (value) {
            if (value !== false) {
                sidebar.open();
            }
        });
    }

    function setupToolbar() {
        /// Attachments
        root.uploader.addFileInput({
            target: '.icon-attachment'
        });

        /// Undo/Redo
        eventjs.add('.icon-undo', 'click', function (event, self) {
            var target = self.target;
            var parent = target.parentNode;

            var el = dom.$('.icon-redo', parent);
            if (el) {
                el.style.display = '';
            } else {
                var el = dom.append(parent, '<span class="sk-tool" data-tool="redo" data-title="redo"><span class="sk-tool-title">Redo</span><span class="sk-icon icon-redo"></span></span>');
                ui.tooltip.add(el, 'redo');

                eventjs.add(parent, 'mousedown', eventjs.stop);
                eventjs.add(el, 'click', function () {
                    root.exec('redo');
                });
            }

            var onMouseDown = eventjs.add(document.body, 'mousedown', function (event) {
                el.style.display = 'none';
                onMouseDown.remove();
            });
        });

/// Tooltips
        var data = dom.$$('[data-title]');
        util.each(data, function (el) {
            ui.tooltip.add(el, el.getAttribute('data-title'));
        });

        ui.tooltip.add('.sk-fileInput', 'Attachment');

        function addContextMenu(target, menu) {
            eventjs.add(target, 'click', function (event, self) {
                ui.contextMenu.show({
                    menu: menu,
                    at: {
                        element: target,
                        align: 'top left to bottom left'
                    }
                });
            });
        }

        addContextMenu('.icon-file-new', 'file-new');
        addContextMenu('.icon-save', 'file-save');
    }

    function setupExec() {

        function setPane(pane) {
            var sidebar = root.sidebarRight;
            var target = dom.$('.sk-' + pane);
            var selected = target.classList.contains('selected');
            if (selected && sidebar.opened) {
                sidebar.close();
            } else {
                sidebar.open();
                dom.setClass({
                    target: target,
                    name: 'selected',
                    list: 'div'
                });
            }
        }

        root.exec.register('save-server', function () {
            alertify.prompt({
                message: 'How would you like this saved?',
                callback: function (truthy, values) {
                    if (truthy) {
                        sketch.doc.title = values['filename'];
                        sketch.doc.description = values['description'];
                        root.server.save();
                        //Get Id of New Image             
                        setTimeout(function () {
                            $.ajax({
                                url: "/uploadname",
                                type: "post",
                                data: {optionAction: "getNewIdImg"},
                                dataType: "json",
                                success: function (data) {
                                    //update URL and SketchappImgObject.idImg
                                    SketchappImgObject.idImg = data.newIdImg;
                                    SketchappImgObject.updateURL();
                                }
                            });
                        }, 5000);
                    }
                },
                verify: function (inputs, callback) {
                    for (var n = 0; n < inputs.length; n++) {
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
                        title: 'Filename',
                        type: 'text',
                        placeholder: 'Filename'
                    }, {
                        id: 'description',
                        title: 'Description',
                        type: 'textarea',
                        placeholder: 'Description'
                    }]
            });
        });

        root.exec.register('save', function () {
            if (SketchappImgObject.idImg == "") {
                sk.exec("save-server");
            } else {
                $.ajax({
                    url: "/uploadname",
                    type: "post",
                    data: {optionAction: "updateContentWithIdImg", "currentIdImg": SketchappImgObject.idImg},
                    dataType: "json",
                    success: function (data) {
                        if (data.status == "success") {
                            root.server.save();
                        }
                    }
                });
            }
        });



        root.exec.register('guide', function () {
            setPane('guide');
        });
        root.exec.register('search', function () {
            setPane('search');
        });
        root.exec.register('help', function () {
            setPane('help');
        });
    }

    /* Add Page
     ---------------------------------------------------------- */
    function addPage() {

        doc.addPage({
            width: docWidth,
            height: docHeight
        });

        addPageMarker();

    }

    function addPageMarker() {

        var page = doc.pages.length;
        var top = docHeight * page;

        if (root.feature.debug) {
            doc.scene.add({
                'type': 'square',
                'units': 'userSpaceOnUse',
                'fill': root.style.gradient[0],
                'x': 0,
                'y': docHeight - 150,
                'width': 150,
                'height': 150
            });
            doc.scene.add({
                'type': 'square',
                'units': 'userSpaceOnUse',
                'fill': root.style.gradient[0],
                'x': 0,
                'y': 0,
                'width': 150,
                'height': 150
            });
            doc.scene.add({
                'type': 'square',
                'units': 'userSpaceOnUse',
                'fill': root.style.gradient[0],
                'x': docWidth - 150,
                'y': 0,
                'width': 150,
                'height': 150
            });
            doc.scene.add({
                'type': 'square',
                'units': 'userSpaceOnUse',
                'fill': root.style.gradient[0],
                'x': docWidth - 150,
                'y': docHeight - 150,
                'width': 150,
                'height': 150
            });
        }

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
            content: 'Page ' + page,
            centerOnPoint: true,
            useStickToFront: true,
            exportable: false,
            selectable: false,
            fontSize: 12,
            textAlign: 'center',
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
    }

})(sketch);