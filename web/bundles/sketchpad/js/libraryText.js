if (typeof (sketch) === "undefined") sketch = {};
if (typeof (sketch.lib) === "undefined") sketch.lib = {};

(function(root) {

var text = root.lib.text = {	
	defaultCategory: "Display",
	dir: "font",
	thumbnail: { 
		_width: 197, 
		_height: 40, 
		columns: 1, 
		rows: 4, 
		padding: 0 
	},
	tree: {
		"yourFiles": [],
		"Sans Serif": [{
			"name": "Arial",
			"filepath": "",
			"category": "Sans Serif"
		}, {
			"name": "Abel",
			"filepath": "abel/Abel-Regular",
			"category": "Sans Serif"
		}, {
			"name": "Acme",
			"filepath": "acme/Acme-Regular",
			"category": "Sans Serif"
		}, {
			"name": "Droid Sans",
			"filepath": "droidsans/DroidSans",
			"category": "Sans Serif"
		}, {
			"name": "Economica",
			"filepath": "economica/Economica-Regular",
			"category": "Sans Serif"
		}, {
			"name": "Lato",
			"filepath": "lato/Lato-Regular",
			"category": "Sans Serif"
		}, {
			"name": "Open Sans",
			"filepath": "opensans/OpenSans-Regular",
			"category": "Sans Serif"
		}, {
			"name": "Oswald",
			"filepath": "oswald/Oswald-Regular",
			"category": "Sans Serif"
		}, {
			"name": "PT Sans Narrow",
			"filepath": "ptsansnarrow/PT_Sans-Narrow-Web-Regular",
			"category": "Sans Serif"
		}, {
			"name": "PT Sans",
			"filepath": "ptsans/PT_Sans-Web-Regular",
			"category": "Sans Serif"
		}, {
			"name": "PT Mono",
			"filepath": "ptmono/PTM55FT",
			"category": "Sans Serif"
		}, {
			"name": "Ubuntu Condensed",
			"filepath": "ubuntucondensed/UbuntuCondensed-Regular",
			"category": "Sans Serif"
		}],
		"Serif": [{
			"name": "Andada",
			"filepath": "andada/Andada-Regular",
			"category": "Serif"
		}, {
			"name": "Droid Serif",
			"filepath": "droidserif/DroidSerif",
			"category": "Serif"
		}, {
			"name": "Gentium Book Basic",
			"filepath": "gentiumbookbasic/GenBkBasR",
			"category": "Serif"
		}, {
			"name": "Josefin Slab",
			"filepath": "josefinsans/JosefinSans-Regular",
			"category": "Serif"
		}, {
			"name": "IM Fell English",
			"filepath": "imfellenglish/IMFeENrm28P",
			"category": "Serif"
		}, {
			"name": "Merriweather",
			"filepath": "merriweather/Merriweather-Regular",
			"category": "Serif"
		}, {
			"name": "Old Standard TT",
			"filepath": "oldstandardtt/OldStandard-Regular",
			"category": "Serif"
		}, {
			"name": "PT Serif",
			"filepath": "ptserif/PT_Serif-Web-Regular",
			"category": "Serif"
		}, {
			"name": "Playfair Display",
			"filepath": "playfairdisplay/PlayfairDisplay-Regular",
			"category": "Serif"
		}, {
			"name": "Vollkorn",
			"filepath": "vollkorn/Vollkorn-Regular",
			"category": "Serif"
		}],
		"Display": [{
			"name": "Abril Fatface",
			"filepath": "abrilfatface/AbrilFatface-Regular",
			"category": "Display"
		}, {
			"name": "Bubblegum Sans",
			"filepath": "bubblegumsans/BubblegumSans-Regular",
			"category": "Display"
		}, {
			"name": "Cabin Sketch",
			"filepath": "cabinsketch/CabinSketch-Regular",
			"category": "Display"
		}, {
			"name": "Chelsea Market",
			"filepath": "chelseamarket/ChelseaMarket-Regular",
			"category": "Display"
		}, {
			"name": "Codystar",
			"filepath": "codystar/Codystar-Regular",
			"category": "Display"
		}, {
			"name": "Comfortaa",
			"filepath": "comfortaa/Comfortaa-Regular",
			"category": "Display"
		}, {
			"name": "Emilys Candy",
			"filepath": "emilyscandy/EmilysCandy-Regular",
			"category": "Display"
		}, {
			"name": "Gravitas One",
			"filepath": "gravitasone/GravitasOne",
			"category": "Display"
		}, {
			"name": "Jolly Lodger",
			"filepath": "jollylodger/JollyLodger-Regular",
			"category": "Display"
		}, {
			"name": "Lobster",
			"filepath": "lobster/Lobster",
			"category": "Display"
		}, {
			"name": "Londrina Shadow",
			"filepath": "londrinashadow/LondrinaShadow-Regular",
			"category": "Display"
		}, {
			"name": "Londrina Solid",
			"filepath": "londrinasolid/LondrinaSolid-Regular",
			"category": "Display"
		}, {
			"name": "Love Ya Like a Sister",
			"filepath": "loveyalikeasister/LoveYaLikeASister",
			"category": "Display"
		}, {
			"name": "Mystery Quest",
			"filepath": "mysteryquest/MysteryQuest-Regular",
			"category": "Display"
		}, {
			"name": "Supermercado One",
			"filepath": "supermercadoone/SupermercadoOne-Regular",
			"category": "Display"
		}],
		"Handwriting": [{
			"name": "Aladin",
			"filepath": "aladin/Aladin-Regular",
			"category": "Handwriting"
		}, {
			"name": "Amatic SC",
			"filepath": "amaticsc/AmaticSC-Regular",
			"category": "Handwriting"
		}, {
			"name": "Architects Daughter",
			"filepath": "architectsdaughter/ArchitectsDaughter",
			"category": "Handwriting"
		}, {
			"name": "Arizonia",
			"filepath": "arizonia/Arizonia-Regular",
			"category": "Handwriting"
		}, {
			"name": "Bilbo Swash Caps",
			"filepath": "bilboswashcaps/BilboSwashCaps-Regular",
			"category": "Handwriting"
		}, {
			"name": "Delius Swash Caps",
			"filepath": "deliusswashcaps/DeliusSwashCaps-Regular",
			"category": "Handwriting"
		}, {
			"name": "Italianno",
			"filepath": "italiana/Italiana-Regular",
			"category": "Handwriting"
		}, {
			"name": "Maiden Orange",
			"filepath": "maidenorange/MaidenOrange"
		}, {
			"name": "Ruge Boogie",
			"filepath": "rugeboogie/RugeBoogie-Regular",
			"category": "Handwriting"
		}]
	}
};

})(sketch);