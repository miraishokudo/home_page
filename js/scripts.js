$(document).ready(function() {
  $('.flexslider').flexslider({
      animation: "slide"
  });
});

$(function(){
   $('a[href^=#]').click(function() {
      var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      $('body,html').animate({scrollTop:position}, 500, 'swing');
      false;
   });
});