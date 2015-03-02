define(['jquery','flexslider','jcarousel'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			//FLEXISLIDER
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});			

			//JCAROUSEL
			$('.first-and-second-carousel').jcarousel();
		};
	};
});