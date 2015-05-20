if (typeof sketch === 'undefined') sketch = {};
if (typeof (sketch.lib) === 'undefined') sketch.lib = {};

(function(root) { 'use strict';

root.lib.image = {
	defaultCategory: '',
	dir: 'image',
	thumbnail: { 
		_width: 44, // image preview dimensions
		_height: 44,
		columns: 4, 
		rows: 4, 
		padding: 4
	},
	tree: {}
};

root.lib.clipart = {
	defaultCategory: 'animals',
	dir: 'clipart',
	thumbnail: { 
		_width: 44, // image preview dimensions
		_height: 44,
		columns: 4, 
		rows: 4, 
		padding: 4
	},
	tree: {
	  'Your Files': [],
	  'animals': [{
		'name': '1216139760278927551lemmling Cartoon cow',
		'filepath': 'animals/1216139760278927551lemmling_Cartoon_cow.svg',
		'category': 'animals'
	  }, {
		'name': 'Anonymous Architetto -- Dinosauri 05',
		'filepath': 'animals/Anonymous_Architetto_--_Dinosauri_05.svg',
		'category': 'animals'
	  }, {
		'name': 'Anonymous Architetto -- Dinosauri 06',
		'filepath': 'animals/Anonymous_Architetto_--_Dinosauri_06.svg',
		'category': 'animals'
	  }, {
		'name': 'antontw BlackCat with White Sockets',
		'filepath': 'animals/antontw_BlackCat_with_White_Sockets.svg',
		'category': 'animals'
	  }, {
		'name': 'conejo',
		'filepath': 'animals/conejo.svg',
		'category': 'animals'
	  }, {
		'name': 'FunDraw dot com Coloring Book Octopus',
		'filepath': 'animals/FunDraw_dot_com_Coloring_Book_Octopus.svg',
		'category': 'animals'
	  }, {
		'name': 'Gerald G Cartoon Cat Sitting',
		'filepath': 'animals/Gerald_G_Cartoon_Cat_Sitting.svg',
		'category': 'animals'
	  }, {
		'name': 'gth',
		'filepath': 'animals/gth.svg',
		'category': 'animals'
	  }, {
		'name': 'JazzyNico Dino Simple T-REX',
		'filepath': 'animals/JazzyNico_Dino_Simple_T-REX.svg',
		'category': 'animals'
	  }, {
		'name': 'Lucky Beckoning Cat',
		'filepath': 'animals/Lucky_Beckoning_Cat.svg',
		'category': 'animals'
	  }, {
		'name': 'monster truck',
		'filepath': 'animals/monster_truck.svg',
		'category': 'animals'
	  }, {
		'name': 'MrBordello Chimpzilla',
		'filepath': 'animals/MrBordello_Chimpzilla.svg',
		'category': 'animals'
	  }, {
		'name': 'qilin',
		'filepath': 'animals/qilin.svg',
		'category': 'animals'
	  }, {
		'name': 'rg1024 Little octopus',
		'filepath': 'animals/rg1024_Little_octopus.svg',
		'category': 'animals'
	  }, {
		'name': 'stone-giant',
		'filepath': 'animals/stone-giant.svg',
		'category': 'animals'
	  }, {
		'name': 'StudioFibonacci Cartoon peacock',
		'filepath': 'animals/StudioFibonacci_Cartoon_peacock.svg',
		'category': 'animals'
	  }, {
		'name': 'StudioFibonacci Cartoon Pterodactyl',
		'filepath': 'animals/StudioFibonacci_Cartoon_Pterodactyl.svg',
		'category': 'animals'
	  }, {
		'name': 'StudioFibonacci Cartoon triceratops',
		'filepath': 'animals/StudioFibonacci_Cartoon_triceratops.svg',
		'category': 'animals'
	  }],
	  'people': [{
		'name': '1300463358',
		'filepath': 'people/1300463358.svg',
		'category': 'people'
	  }, {
		'name': 'archer',
		'filepath': 'people/archer.svg',
		'category': 'people'
	  }, {
		'name': 'burglar',
		'filepath': 'people/burglar.svg',
		'category': 'people'
	  }, {
		'name': 'centaur',
		'filepath': 'people/centaur.svg',
		'category': 'people'
	  }, {
		'name': 'dwarf',
		'filepath': 'people/dwarf.svg',
		'category': 'people'
	  }, {
		'name': 'girl with lantern',
		'filepath': 'people/girl_with_lantern.svg',
		'category': 'people'
	  }, {
		'name': 'johnny automatic geisha playing shamisen',
		'filepath': 'people/johnny_automatic_geisha_playing_shamisen.svg',
		'category': 'people'
	  }, {
		'name': 'ninja',
		'filepath': 'people/ninja.svg',
		'category': 'people'
	  }],
	  'plants': [{
		'name': '1313071007',
		'filepath': 'plants/1313071007.svg',
		'category': 'plants'
	  }, {
		'name': 'automne',
		'filepath': 'plants/automne.svg',
		'category': 'plants'
	  }, {
		'name': 'baronchon palm trees 1',
		'filepath': 'plants/baronchon_palm_trees_1.svg',
		'category': 'plants'
	  }, {
		'name': 'ete',
		'filepath': 'plants/ete.svg',
		'category': 'plants'
	  }, {
		'name': 'mekonee 29 vegetables set 1',
		'filepath': 'plants/mekonee_29_vegetables_set_1.svg',
		'category': 'plants'
	  }, {
		'name': 'mekonee 29 vegetables set 2',
		'filepath': 'plants/mekonee_29_vegetables_set_2.svg',
		'category': 'plants'
	  }, {
		'name': 'mekonee 29 vegetables set 7',
		'filepath': 'plants/mekonee_29_vegetables_set_7.svg',
		'category': 'plants'
	  }, {
		'name': 'molumen fern',
		'filepath': 'plants/molumen_fern.svg',
		'category': 'plants'
	  }, {
		'name': 'rg1024 country landscape ',
		'filepath': 'plants/rg1024_country_landscape_.svg',
		'category': 'plants'
	  }, {
		'name': 'spring',
		'filepath': 'plants/spring.svg',
		'category': 'plants'
	  }, {
		'name': 'treehouse',
		'filepath': 'plants/treehouse.svg',
		'category': 'plants'
	  }]
	}
};

})(sketch);