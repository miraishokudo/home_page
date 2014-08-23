function iframeResize(){
	var PageHight = document.body.scrollHeight + 0; // ページの高さを取得
	window.parent.document.getElementById('disp').style.height = PageHight + 'px'; // iframeの高さを変更
}
window.onload = iframeResize;