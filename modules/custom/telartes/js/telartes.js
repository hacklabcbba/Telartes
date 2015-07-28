(function ($){
  Drupal.behaviors.telartes = {
    attach: function (context, settings) { 
      mediateca(context);
      titulo(context);
      Buscador(context);
    }
  };
 
  var mediateca  = function(context) {
    $('.tabmultimedia', context).hide().eq(0).show();
    $('.mediateca li', context).click(function(m) {
      m.preventDefault();
      $('.tabmultimedia', context).hide();
      $('.mediateca li', context).removeClass("seleccion_multimedia");
      var id = $(this, context).find("a").attr("href");
      $(id, context).fadeToggle();
      $(this, context).addClass("seleccion_multimedia");
    });
  }

  var titulo = function(context) {
    $("#edit-name--2", context).focusout(function() {
      var title_value = $("#edit-name--2", context).val();
      $("#edit-title", context).val(title_value);
    });
  }

  var Buscador = function(context) {
  $( '.fa-search',context ).click(function() {
  $( "#search-block-form",context ).toggle( "slow", function() {
  });
 });
}

})(jQuery);
 


