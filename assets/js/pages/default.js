define(['jquery','form_elements','easing','jcarousel'], function($)
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

			showOption();
	    }

	    var showOption = function(){
			$('#show').change(function(){
				id=this.value;		
				link = $(this).attr('data-rel');
				arr = new Array();
				data = getQueryVariable();
				qry = '';
				if(data['page']!=undefined){
					qry = qry+'?page='+data['page'];
				}
				if(data['show']!=undefined){
					if(qry==''){
						qry = qry+'?show='+id;
					}				
					else{
						qry = qry+'&show='+id;
					}
						
				}else{
					if(qry==''){
						qry = qry+'?show='+id;
					}
					else{
						qry = qry+'&show='+id;
					}

				}
				if(data['view']!=undefined){
					if(qry==''){
						qry = qry+'?view='+data['view'];
					}
					else{
						qry = qry+'&view='+data['view'];
					}
				}
				window.location = link+qry;
			});
		};
		var getQueryVariable = function() {
		    var query = window.location.search.substring(1);
		    var vars = query.split('&');
		    var rs = new Array();
		    for (var i = 0; i < vars.length; i++) {
		        var pair = vars[i].split('=');
		        rs[decodeURIComponent(pair[0])] = decodeURIComponent(pair[1]);
		    }
		    return rs;
		};
	}
});