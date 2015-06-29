var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
    waitSeconds : 20,
    urlArgs: "v=002",

	shim: {
		"bootstrap"	: {
			deps: ['jquery','jq_ui'],
		},
		"flexslider" : {
			deps : ['jquery'],
		},
		"form_elements" : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		jquery 			: ['//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min'],
		bootstrap 		: ['//maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min'],
		cart			: 'js/cart',
		flexslider		: dirTema+'assets/js/lib/jquery.flexslider',
		fancybox		: dirTema+'assets/js/lib/jquery.fancybox',
		form_elements	: dirTema+'assets/js/lib/form_elements',
		jcarousel		: dirTema+'assets/js/lib/jquery.jcarousel',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		simpletabs		: dirTema+'assets/js/lib/simpletabs_1.3',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'assets/js/pages/home',
		member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/default',
		produk          : dirTema+'assets/js/pages/produk',
		// cart         	: dirTema+'assets/js/pages/cart',
	}
});
require([
	'router',
	'bootstrap',
	'main',
], function(router,b,main)
{
	// HOME
	router.define('/','home@run');
	router.define('home', 'home@run');

	// MEMBER
	router.define('member/*', 'member@run');

	// PRODUK
	// router.define('produk', 'cart@run');
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
});