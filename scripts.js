/*
    Slider
*/
$(document).ready(function() {
  $('.flexslider').flexslider({
      animation: "slide"
  });
});

function iframeResize(){
	var PageHight = document.body.scrollHeight + 0; // ページの高さを取得
	alert(PageHight);
	window.parent.document.getElementById('iframe_book_info').style.height = PageHight + 'px'; // iframeの高さを変更
}
window.onload = iframeResize;