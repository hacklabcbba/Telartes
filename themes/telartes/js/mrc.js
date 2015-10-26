jQuery(document).ready(function(){
	//alert("INGRESO AL JS");
    var onlyChild = jQuery(".node .field-collection-container");
    if (onlyChild.length == 1) {
        jQuery(onlyChild).addClass("onlychild");
    }
    else {
        if (jQuery(".node .field-collection-container").height() > jQuery(".node .field-collection-container:last-child").height() ) {
            jQuery(".node .field-name-body + .field-collection-container").addClass("add-border-right")
        }
        else {
            jQuery(".node .field-collection-container:last-child").addClass("add-border-left")
        }

    }
});
jQuery(document).ready(function()
{
	jQuery('.l-header-region .responsive-menus').click(function(){ 
	    //alert('Evento click sobre menu right');
		jQuery(".top-bar").removeClass("expanded");
		jQuery(".sidebar-first .responsive-menus").removeClass("responsive-toggled");
	});
	
	jQuery('.sidebar-first .responsive-menus').click(function(){ 
	    //alert('Evento click sobre menu lef');
		jQuery(".top-bar").removeClass("expanded");
		jQuery(".l-header-region .responsive-menus").removeClass("responsive-toggled");
	});
	jQuery('.top-bar').click(function(){ 
	    //alert('Evento click sobre menu principal');
		jQuery(".responsive-menus").removeClass("responsive-toggled");
	});	
	jQuery('.main').click(function(){ 
	    //alert('Evento click sobre main');
		jQuery(".responsive-menus").removeClass("responsive-toggled");
		jQuery(".top-bar").removeClass("expanded");
	});	
	jQuery('.sidebar-second').click(function(){ 
	    //alert('Evento click sobre main');
		jQuery(".responsive-menus").removeClass("responsive-toggled");
		jQuery(".top-bar").removeClass("expanded");
	});
});
