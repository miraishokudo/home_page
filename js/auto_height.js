function iframeResize(){
	var PageHight = document.body.scrollHeight + 0; // ページの高さを取得
	window.parent.document.getElementById('iframe_book_info').style.height = PageHight + 'px'; // iframeの高さを変更
}
window.onload = iframeResize;

var timer = false;
//jqueryを読み込んでいないため素の関数
window.addEventListener('resize', function () {
    if (timer !== false) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
        iframeResize();
    }, 500);
});