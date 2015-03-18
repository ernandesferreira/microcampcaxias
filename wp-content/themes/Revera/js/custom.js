jQuery(window).load(function() {

  jQuery('#slidebox').flexslider({
        animation: "fade",
        directionNav:true,
        controlNav:false
      });
    
  /* Navigation */

	jQuery('#submenu ul.sfmenu').superfish({ 
		delay:       500,								// 0.1 second delay on mouseout 
		animation:   { opacity:'show',height:'show'},	// fade-in and slide-down animation 
		dropShadows: true								// disable drop shadows 
	});	  
    
    jQuery('#topmenu').mobileMenu({
			prependTo:'.mobilenavi'
			});

		jQuery(function(){   
			var nav = jQuery('#masthead');   
			jQuery(window).scroll(function () { 
				if (jQuery(this).scrollTop() > 150) {
					if(!nav.hasClass('menu-fixo')){
					var navheight = nav.height();
					var navTop = nav.offset().top;
					nav.css({'top':'-' +navheight+'px'}).addClass("menu-fixo").animate({'top' : parseInt(navTop)+'px'}, 1000);
				} 
				} else { 
					nav.removeClass("menu-fixo"); 
				}
			});  
		});	
	
    
});


