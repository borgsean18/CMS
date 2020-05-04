(function($){"use strict";

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) { 
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

jQuery(document).ready(function($) {
    
    var bkWindow = $(window),
    bkRatingBars = $('.shadowfiend-overlay').find('.shadowfiend-zero-trigger');
    $('.page-wrap').imagesLoaded(function(){
        setTimeout(function() {
            var shadowfiend_thumbnail = $('.page-wrap').find('.thumb');
            $.each(shadowfiend_thumbnail, function(i, value) {
                var shadowfiendValue = $(value);
                if (( shadowfiendValue.visible(true) )&& ( shadowfiendValue.hasClass('hide-thumb'))) {
                    shadowfiendValue.removeClass('hide-thumb');
                } 
            });
        },800);
    });
    setTimeout(function() {
        bkWindow.scroll(function(event) {
            var shadowfiend_thumbnail = $('.page-wrap').find('.thumb');
            $.each(shadowfiend_thumbnail, function(i, value) {
                var shadowfiendValue = $(value);
                if (( shadowfiendValue.visible(true) )&& ( shadowfiendValue.hasClass('hide-thumb'))) {
                    shadowfiendValue.removeClass('hide-thumb');
                } 
            });
        });
    },2000);  
});