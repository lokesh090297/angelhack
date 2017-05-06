(function ($) {
  Drupal.behaviors.hktextile = {
    attach: function (context) {
      var height = jQuery('.path-frontpage #navbar').outerHeight();
      jQuery('.path-frontpage .main-container').css('margin-top', height);
    }
  };
})(jQuery);
