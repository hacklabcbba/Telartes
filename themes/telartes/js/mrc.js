jQuery(document).ready(function(){
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