define(['jquery','bootstrap','form_elements','simpletabs'], function($)
{
	return new function(){
		var self = this;
		self.run = function(){
			//Cart SLIDE YANG DIGUNAKAN
			$('.counter a').live('click', function(){
				$('.cart_drop').slideToggle();
			});

			//FORM ELEMENTS
			$("select").uniform();
	    }
	}
});