define(['jquery','flexslider'], function()
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			//FLEXISLIDER
			jQuery('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
					$('body').removeClass('loading');
				}
			});			

			//JCAROUSEL
			jQuery('.first-and-second-carousel').jcarousel();
		};
	};
});