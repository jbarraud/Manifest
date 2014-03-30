jQuery(document).ready(function($) {

	//$('.wp-caption').has($('.size-small-image')).addClass('flush-image');
  var $container = $('.widget-area');
  // initialize
  $container.masonry({
    itemSelector: '.widget',
  });

  $("iframe[src*='www.youtube.com']").wrap('<div class="videoWrapper" />');
  $("iframe[src*='vimeo.com']").wrap('<div class="videoWrapper" />');

});