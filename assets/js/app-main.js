var dirTema = document.getElementsByTagName('link')[1].getAttribute('href');

require.config({
	baseUrl: '/',
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		"flexslider" : {
			deps : ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
	},

	paths: {
		// LIBRARY
		bootstrap 		: ['//maxcdn.bootstrapcdn.com/bootstrap/2.2.1/js/bootstrap.min','js/bootstrap.min'],
		cart			: 'js/cart',
		flexslider		: dirTema+'assets/js/lib/jquery.flexslider',
		fancybox		: dirTema+'assets/js/lib/jquery.fancybox',
		form_elements	: dirTema+'assets/js/lib/form_elements',
		jq_ui			: 'js/jquery-ui',
		jquery 			: ['//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min',dirTema+'assets/js/lib/jquery1.7.2.min'],
		noty			: 'js/jquery.noty',
		simpletabs		: dirTema+'assets/js/lib/simpletabs_1.3',

		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		home            : dirTema+'assets/js/pages/home',
		// member          : dirTema+'assets/js/pages/member',
		main            : dirTema+'assets/js/pages/main',
		produk          : dirTema+'assets/js/pages/produk',
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
	// router.define('member', 'member@run');

	// PRODUK
	router.define('produk/*', 'produk@run');
	
	router.run();
	main.run();
});