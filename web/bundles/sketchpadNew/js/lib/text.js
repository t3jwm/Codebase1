if (typeof sketch === 'undefined') sketch = {};
if (typeof (sketch.lib) === 'undefined') sketch.lib = {};

(function(root) { 'use strict';

var text = root.lib.text = {	
	defaultCategory: 'Display',
	dir: 'font',
	thumbnail: {
		_width: 118,
		_height: 30,
		columns: 2,
		rows: 6,
		padding: 0
	},
	tree: {
		'Your Files': [],
		'Sans Serif': [{
			'name': 'Arial',
			'filepath': '',
			'category': 'Sans Serif'
		}, {
			'name': 'Abel',
			'filepath': 'abel/Abel-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'Acme',
			'filepath': 'acme/Acme-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'Droid Sans',
			'filepath': 'droidsans/DroidSans',
			'category': 'Sans Serif'
		}, {
			'name': 'Economica',
			'filepath': 'economica/Economica-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'Lato',
			'filepath': 'lato/Lato-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'Open Sans',
			'filepath': 'opensans/OpenSans-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'Oswald',
			'filepath': 'oswald/Oswald-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'PT Sans Narrow',
			'filepath': 'ptsansnarrow/PT_Sans-Narrow-Web-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'PT Sans',
			'filepath': 'ptsans/PT_Sans-Web-Regular',
			'category': 'Sans Serif'
		}, {
			'name': 'PT Mono',
			'filepath': 'ptmono/PTM55FT',
			'category': 'Sans Serif'
		}, {
			'name': 'Ubuntu Condensed',
			'filepath': 'ubuntucondensed/UbuntuCondensed-Regular',
			'category': 'Sans Serif'
		}],
		'Serif': [{
			'name': 'Andada',
			'filepath': 'andada/Andada-Regular',
			'category': 'Serif'
		}, {
			'name': 'Droid Serif',
			'filepath': 'droidserif/DroidSerif',
			'category': 'Serif'
		}, {
			'name': 'Gentium Book Basic',
			'filepath': 'gentiumbookbasic/GenBkBasR',
			'category': 'Serif'
		}, {
			'name': 'Josefin Slab',
			'filepath': 'josefinsans/JosefinSans-Regular',
			'category': 'Serif'
		}, {
			'name': 'IM Fell English',
			'filepath': 'imfellenglish/IMFeENrm28P',
			'category': 'Serif'
		}, {
			'name': 'Merriweather',
			'filepath': 'merriweather/Merriweather-Regular',
			'category': 'Serif'
		}, {
			'name': 'Old Standard TT',
			'filepath': 'oldstandardtt/OldStandard-Regular',
			'category': 'Serif'
		}, {
			'name': 'PT Serif',
			'filepath': 'ptserif/PT_Serif-Web-Regular',
			'category': 'Serif'
		}, {
			'name': 'Playfair Display',
			'filepath': 'playfairdisplay/PlayfairDisplay-Regular',
			'category': 'Serif'
		}, {
			'name': 'Vollkorn',
			'filepath': 'vollkorn/Vollkorn-Regular',
			'category': 'Serif'
		}]
	}
};

})(sketch);