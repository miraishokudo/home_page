<?php
 	require_once 'google_calender.php';
 	require_once 'html_dom/simple_html_dom.php';

 	function convert($japanese){
		$search = array(
			'色の本',
			'黒','緑','赤','白','茶','黄','ピンク','青','水','灰','銀','オレンジ'
			,'１','２','３','４','５','６','７','８','９','１０','１１','１２'
		);
		$replace = array(
			'_',
			'kuro','midori','aka','shiro','cha','kiiro','pinku','ao','mizu','hai','gin','orenji'
			,'1','2','3','4','5','6','7','8','9','10','11','12'
		);
		return str_replace($search, $replace, $japanese);
 	}

	function todays_book_list(){
		$book_list = '';
		foreach (todays_categories() as $japanese) {
			$book_category_id = convert($japanese);
			$books = file_get_html(
				'http://miraitosho.hateblo.jp/entry/2014/04/22/225652'
			)->find("div[id=$book_category_id]", 0);
			$book_list .= str_replace(">【", "target='_blank'>【", $books);
		}
		return $book_list;
	}
