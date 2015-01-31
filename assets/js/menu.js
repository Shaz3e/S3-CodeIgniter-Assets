/*======================================================================*\
|| #################################################################### ||
|| # Package - S3 CodeIgniter Template based on Shaz3e S3 Framework     ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/
/**
 * dc-nav-show // for nav
 * dc-body-show  // for body
 * dc-menu-show // for menu
 * @since 1.1
 */
$(function() {
	$('.dcToggleNav a').on('click', function(e) {
		e.preventDefault();
		var body = $('body');
		var nav = $('nav');
		var menu = $('#dcToggleNav');
		
		if(body.hasClass('dc-body-show')) {
			body.removeClass('dc-body-show');
		} else {
			body.addClass('dc-body-show');
		}
		
		if(nav.hasClass('dc-nav-show')) {
			nav.removeClass('dc-nav-show');
		} else {
			nav.addClass('dc-nav-show');
		}
		
		if(menu.hasClass('dc-menu-show')) {
			menu.removeClass('dc-menu-show').addClass('dcToggleNav');
		} else {
			menu.addClass('dc-menu-show').removeClass('dcToggleNav');
		}
	
		
	});
});
