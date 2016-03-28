var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    waitSeconds : 60,
    urlArgs: "v=011",

	shim: {
		"bootstrap"	: {
			deps: ['jquery','jq_ui']
		},
		"cart" : {
			deps : ['jquery','noty']
		},
		"noty" : {
			deps : ['jquery']
		},
		'jq_ui' : {
			deps : ['jquery']
		},
		"fancybox" : {
			deps : ['jquery']
		},
		"flexslider" : {
			deps : ['jquery']
		},
		"form_elements" : {
			deps : ['jquery']
		},
		"easing" : {
			deps : ['jquery']
		},
		"jcarousel" : {
			deps : ['jquery']
		},
		'simpletabs': {
            exports: 'Simpletabs'
        }
	},

	paths: {
		// LIBRARY
		jquery 			: ['//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min', dirTema+'/assets/js/lib/jquery-1.7.2.min'],
		bootstrap 		: ['//maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min', dirTema+'/assets/js/lib/bootstrap.min'],
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		easing			: dirTema+'/assets/js/lib/jquery.easing',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox',
		flexslider		: dirTema+'/assets/js/lib/jquery.flexslider',
		form_elements	: dirTema+'/assets/js/lib/form_elements',
		jcarousel		: dirTema+'/assets/js/lib/jquery.jcarousel',
		simpletabs		: dirTema+'/assets/js/lib/simpletabs_1.3',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'/assets/js/pages/home',
		main            : dirTema+'/assets/js/pages/default',
		produk          : dirTema+'/assets/js/pages/produk',
	}
});
require([
	'router',
	'bootstrap',
	'main',
	'cart',
], function(router,b,main,cart)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// PRODUK
	router.define('produk/*', 'produk@run');

	router.run();
	main.run();
	cart.run();
});