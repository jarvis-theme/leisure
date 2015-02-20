define(['jquery','form_elements'], function()
{
	return new function()
	{
		var self = this;
		self.run = function()
		{
			//SUB MENU
			jQuery("ul.departments > li.menu_cont > a").toggle(function(){
				$(this).addClass('active');
				$(this).siblings('.side_sub_menu').slideDown(300);
			}, function(){
				$(this).removeClass('active');
				$(this).siblings('.side_sub_menu').slideUp(300);
			});

			//SHORTCODES
			//Toggle Box
			jQuery(".toggle_box > li:first-child .toggle_title, .toggle_box > li:first-child .toggle_content").addClass('active');
			jQuery(".toggle_box > li > a.toggle_title").toggle(function(){
				$(this).addClass('active');
				$(this).siblings('.toggle_content').slideDown(300);
			}, function(){
				$(this).removeClass('active');
				$(this).siblings('.toggle_content').slideUp(300);
			});		
		};
	};
});