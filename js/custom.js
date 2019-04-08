

;(function( jQuery, window ) {
  "use strict";
  
  
  //Scroll To top  
  var duration = 800; 
  $('.top').click(function() {
    $('html, body').animate({scrollTop: 0}, duration);
    return false;
  })

  
  /* SITENAME colored */
  $(".sitename a").lettering("words");
  $(".sitetag").lettering("words");

  
  /* Settings of the sticky menu - fix on top the categories main menu */
  $('.header-bottom').sticky({
    topSpacing: 0,
    zIndex: 100 
  });
  
  /* Settings of the ticker */
  $('.newsticker').newsTicker({
    row_height: 14,
    max_rows: 1,
    speed: 1000,
    direction: 'down',
    duration: 4000,
    autostart: 1,
    pauseOnHover: 1
  });  
  
})( jQuery, window );