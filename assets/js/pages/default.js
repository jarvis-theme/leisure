define(['jquery','bootstrap','form_elements'], function($)
{
	return new function(){
		var self = this;
		self.run = function(){
			//SHORTCODES
			//Toggle Box
			$(".toggle_box > li:first-child .toggle_title, .toggle_box > li:first-child .toggle_content").addClass('active');
			$(".toggle_box > li > a.toggle_title").toggle(function(){
				$(this).addClass('active');
				$(this).siblings('.toggle_content').slideDown(300);
			}, function(){
				$(this).removeClass('active');
				$(this).siblings('.toggle_content').slideUp(300);
			});

			//Cart SLIDE YANG DIGUNAKAN
			$('.counter a').live('click', function(){
				$('.cart_drop').slideToggle();
			});

			//FORM ELEMENTS
			$("select").uniform();

			//SUB MENU
			$("ul.departments > li.menu_cont > a").toggle(function(){
				$(this).addClass('active');
				$(this).siblings('.side_sub_menu').slideDown(300);
			}, function(){
				$(this).removeClass('active');
				$(this).siblings('.side_sub_menu').slideUp(300);
			});
	    }
	}
});