jQuery(document).ready(function(){
    var onlyChild = jQuery(".node .field-collection-container");
    if (onlyChild.length == 1) {
        console.log("estoy dentro")
        jQuery(onlyChild).addClass("onlychild");
    }
    else {
        console.log("hay mas de dos")
    }
});