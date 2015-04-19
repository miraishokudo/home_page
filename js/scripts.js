$(document).ready(function() {
  $('header').headshrinker({mobileMenu: true});
  $('.flexslider').flexslider({
      animation: "slide"
  });
});

$(function(){
   $('a[href^=#]').click(function() {
      var href= $(this).attr("href");
      if (href != '#nav') {
        var target = $(href);
        var position = target.offset().top;
        $('body,html').animate({scrollTop:position}, 500, 'swing');
        false;
      }
   });
});