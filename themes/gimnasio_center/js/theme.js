(function ($) {
  Drupal.behaviors.hktextile = {
    attach: function (context) {
      var height = jQuery('.path-frontpage #navbar').outerHeight();
      jQuery('.path-frontpage .main-container').css('margin-top', height);
      var minHeight = jQuery(window).height();
      jQuery('.main-container').css('min-height', minHeight - 150);
      jQuery('.path-frontpage .main-container').css('min-height', 0);
    }
  };
})(jQuery);
