define(['jquery','flexslider','fancybox'], function($)
{
	return new function()
	{
		var self = this;
		self.run = function()
		{			
			// Fancybox function
			$('#flexslider-product .slides a').fancybox();
		};
	};
});