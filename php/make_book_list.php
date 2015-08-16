<?php
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