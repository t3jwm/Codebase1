sk.addScene = function() {
	sk.scene.add([
		{
			"type": "square",
			"opacity": 100,
			"composite": "source-over",
			"selectable": false,
			"x": 0.01,
			"y": 0.01,
			"width": 600,
			"height": 627,
			"rotate": 0,
			"scale": {x:2,y:1},
			"sides": 20,
			"slope": 0.95,
			"fill": "#fff",
			"stroke": {lineWidth:0.5}
		}, {
			"type": "image",
			"src": "test.jpg",
			"composite": "source-atop",
			"x": 1200 / 2,
			"y": 627 / 2,
			"width": 1200,
			"height": 627
		}, {
			"type": "group",
			"groupId": "Group1",
			"locked": true, // lock coordinates together when scaling
			"composite": "source-atop",
			"opacity": 100,
			"children": [{
				"id": 123,
				"type": "rectangle",
				"opacity": 100,
				"selectable": false,
				"composite": "source-over",
				"x": 0.01,
				"y": 0.01,
				"width": 600,
				"height": 627,
				"rotate": 0,
				"scale": {x:2,y:1},
				"sides": 10,
				"slope": 0.5,
				"fill": "linear-gradient(top left, rgba(0,0,255,0.15) 0%, black 100%)",
				"stroke": {lineWidth:0.5}
			}, {
				"type": "clipart",
				"src": "thorns.svg",
				"opacity": 100,
				"composite": "destination-out",
				"x": 300,
				"y": 300,
				"width": 400,
				"height": 400,
				"rotate": 0,
				"scale": 1,
				"sides": 20,
				"slope": 0.95,
				"fill": "#fff000",
				"stroke": {lineWidth:0.5}
			}]
		}
	], function(action) {
		sk.setTool("select");
		sk.setFill("linear-gradient(top left, red, black)");
	});
};