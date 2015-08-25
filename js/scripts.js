	function centering_news() {
		var PageHight = window.innerHeight;
		var w = $( window ).width() ;
		var h = $( window ).height() ;
		var cw = $("#news").outerWidth();
		var ch = $("#news").outerHeight();
		var top = ( $( window ).width() > 768 ) ? 133 : 60;
		$("#news").css( {"left": ((w - cw)/2) + "px","top": top + "px","height": (PageHight/1.5) + "px"} ) ;
	}

	$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
	$( "#modal-overlay" ).fadeIn( "slow" ) ;

	centering_news() ;
	$("#news").fadeIn( "slow" ) ;
	$("#modal-overlay,#modal-close").unbind().click(
		function(){
			$( "#news,#modal-overlay" ).fadeOut( "slow" , function(){
				$('#news,#modal-overlay').remove() ;
			});
		});

$(document).ready(function() {
  $('header').headshrinker({mobileMenu: true});
  $('.flexslider').flexslider({
      animation: "slide"
  });
});