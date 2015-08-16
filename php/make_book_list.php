<?php

//【オレンジ色の本１】
//【青色の本１】
//【黒色の本８】【黒色の本７】【黒色の本６】【黒色の本５】【黒色の本４】【黒色の本３】【黒色の本２】【黒色の本１】
//【緑色の本３】【緑色の本２】【緑色の本１】
//【水色の本４】【水色の本３】【水色の本２】【水色の本１】
//【白色の本１２】【白色の本１１】【白色の本１０】【白色の本９】【白色の本８】【白色の本７】【白色の本６】【白色の本５】【白色の本４】【白色の本３】【白色の本２】【白色の本１】
//【赤色の本４】【赤色の本３】【赤色の本２】【赤色の本１】
//【灰色の本２】【灰色の本１】
//【茶色の本４】【茶色の本３】【茶色の本２】【茶色の本１】
//【黄色の本３】【黄色の本２】【黄色の本１】
//【ピンク色の本２】【ピンク色の本１】
//【銀色の本２】【銀色の本１】
//が読めます

 	require_once 'google_calender.php';
 	require_once 'html_dom/simple_html_dom.php';

	function _exec(){
		$urls = array();
		foreach (todays_categories() as $japanese) {
			$book_category = convert($japanese);
			echo "<br/>";
			echo '"'.$book_category.'": [';
			$pattern = '/a href="(.*?)"/';
			preg_match_all(
				$pattern, 
				file_get_html('http://miraitosho.hateblo.jp/entry/2014/04/22/225652')->find("div[id=$book_category]", 0),
				$matches
			);
			foreach ($matches[1] as $url) {
				$html = file_get_html($url);
				$img_url = $html->find('.hatena-fotolife', 0)->src;
				$title = $html->find('.entry-title-link', 0)->innertext;
				echo '{';
				echo '"url": "'.$url.'",';
				echo '"title": "'.$title.'",';
				echo '"img_url": "'.$img_url.'"},';
			}
			echo '],';
		}
	}

 	function convert($japanese){
		$search = array(
			'色の本',
			'黒','緑','赤','白','茶','黄','ピンク','青','水','灰','銀','オレンジ'
			,'１０','１１','１２','１３','１４','１','２','３','４','５','６','７','８','９'
		);
		$replace = array(
			'_',
			'kuro','midori','aka','shiro','cha','kiiro','pinku','ao','mizu','hai','gin','orenji'
			,'10','11','12','13','14','1','2','3','4','5','6','7','8','9'
		);
		return str_replace($search, $replace, $japanese);
 	}
echo _exec();