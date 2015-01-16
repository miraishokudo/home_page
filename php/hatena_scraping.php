<?php
 	require_once 'google_calender.php';
 	require_once 'html_dom/simple_html_dom.php';

	function todays_book_title_and_photo(){
		$title_src = '';
		$photo_src = '';
		foreach (_todays_book_urls() as $url) {
			$title_src .= each_title_src($url);
			$photo_src .= each_photo_src($url);
		}
		return $title_src."<div class='book_photo_list'>".$photo_src."</div>";
	}
	function todays_book_title(){
		$title_src = '';
		foreach (_todays_book_urls() as $url) {
			$title_src .= each_title_src($url);
		}
		return $title_src;
	}
	function todays_book_photo_hatena(){
		$photo_src = '';
		foreach (_todays_book_urls() as $url) {
			$photo_src .= each_photo_src_hatena($url);
		}
		return $photo_src;
	}

	function each_title_src($url){
			$html = file_get_html($url);
			$title = $html->find('.entry-title-link', 0)->innertext;
			return "<a href='$url' target='_blank'>$title</a><br />";
	}

	function each_photo_src($url){
			$html = file_get_html($url);
			$img_url = $html->find('.hatena-fotolife', 0)->src;
			$title = $html->find('.entry-title-link', 0)->innertext;
			return "<a href='$url' target='_blank'><img title='$title' src='$img_url' class='book_photo'></a>";
	}

	function each_photo_src_hatena($url){
			$html = file_get_html($url);
			$img_url = $html->find('.hatena-fotolife', 0)->src;
			$title = $html->find('.entry-title-link', 0)->innertext;
			return "<a href='$url' target='_blank'><img title='$title' src='$img_url' class='book_photo_hatena'></a>";
	}

	function _todays_book_urls(){
		$urls = array();
		foreach (todays_categories() as $japanese) {
			$book_category = convert($japanese);
			$pattern = '/a href="(.*?)"/';
			preg_match_all(
				$pattern, 
				file_get_html('http://miraitosho.hateblo.jp/entry/2014/04/22/225652')->find("div[id=$book_category]", 0),
				$matches
			);
			foreach ($matches[1] as $url) { array_push($urls, $url); };
		}
		return $urls;
	}

 	function convert($japanese){
		$search = array(
			'色の本',
			'黒','緑','赤','白','茶','黄','ピンク','青','水','灰','銀','オレンジ'
			,'１','２','３','４','５','６','７','８','９','１０','１１','１２','１３','１４'
		);
		$replace = array(
			'_',
			'kuro','midori','aka','shiro','cha','kiiro','pinku','ao','mizu','hai','gin','orenji'
			,'1','2','3','4','5','6','7','8','9','10','11','12','13','14'
		);
		return str_replace($search, $replace, $japanese);
 	}
