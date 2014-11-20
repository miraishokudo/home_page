<?php
 	require_once 'google_calender.php';
 	require_once 'html_dom/simple_html_dom.php';

	function todays_book_list(){
		$book_categories = array(
			"黒色の本１" => "kuro_1",
			"黒色の本２" => "kuro_2",
			"黒色の本３" => "kuro_3",
			"黒色の本４" => "kuro_4",
			"黒色の本５" => "kuro_5",
			"黒色の本６" => "kuro_6",
			
			"緑色の本１" => "midori_1",
			
			"赤色の本１" => "aka_1",
			"赤色の本２" => "aka_2",
			"赤色の本３" => "aka_3",
			
			"白色の本１" => "shiro_1",
			"白色の本２" => "shiro_2",
			"白色の本３" => "shiro_3",
			"白色の本４" => "shiro_4",
			"白色の本５" => "shiro_5",
			"白色の本６" => "shiro_6",
			"白色の本７" => "shiro_7",
			
			"茶色の本１" => "cha_1",
			"茶色の本２" => "cha_2",
			
			"黃色の本１" => "kiiro_1",
			"黃色の本２" => "kiiro_2",

			"ピンク色の本１" => "pinku_1",
			"ピンク色の本２" => "pinku_2",
			
			"青色の本１" => "ao_1",
			
			"水色の本１" => "mizu_1",
			"水色の本２" => "mizu_2",
			"水色の本３" => "mizu_3",

			"灰色の本１" => "hai_1",

			"銀色の本１" => "gin_1",
			"銀色の本２" => "gin_2",

			"オレンジ色の本１" => "orenji_1",
			"色の本" => ""
		);
		$book_list = '';
		foreach (todays_categories() as $japanese) {
			$books = file_get_html(
				'http://miraitosho.hateblo.jp/entry/2014/04/22/225652'
			)->find("div[id=$book_categories[$japanese]]", 0);
			$book_list .= str_replace(">【", "target='_blank'>【", $books);
		}
		return $book_list;
	}
