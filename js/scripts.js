$(document).ready(function() {
  $('header').headshrinker({mobileMenu: true});
  $('.flexslider').flexslider({
      animation: "slide"
  });
});

$(function(){
   $('a[href^=#]').click(function() {
      var href= $(this).attr("href");
      var _target = $(href);

      if (href != '#nav' && (typeof _target !== "undefined") && (typeof _target.offset() !== "undefined")) {
        var position = _target.offset().top;
        $('body,html').animate({scrollTop:position}, 500, 'swing');
        false;
      }
   });
});