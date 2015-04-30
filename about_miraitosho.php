<?php
		require_once 'php/hatena_scraping.php';
		$title_src = "■ 只今展示中<br/>".todays_book_title();
		$photo_src = todays_book_photo_hatena();
?>
<html>
	<meta charset="utf-8"/>
	<head>
   <link rel="stylesheet" href="css/style.css">
	</head>
	<body class='hatena'>
		<strong>■当ブログ（未来図書）について</strong><br/>
		未来図書は、<a href='http://miraishokudo.com/' target="_blank">未来食堂</a>に置いてある本を紹介しているブログです。<br/>
		こちらで紹介している本は、店内で自由にお読み頂けます。<br/>
		勝手ながら店内スペースに限りがあるため、数冊づつに分けての展示となります。<br/>（背表紙の色で分けています）<br/><br/>
		<div class='mid_font'>■展示スケジュール</div>
		<iframe id='tosho_calender'style="border-width: 0; margin: 0 5px 30px;" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=miraishokudo%40gmail.com&amp;color=%232952A3&amp;ctz=Asia%2FTokyo"height="220" width="340"frameborder="0" scrolling="no" align="top"></iframe>
		<div class='mid_font'><?=$title_src?></div><br/>
		<div><?=$photo_src?></div><div style="clear:both;"></div><br/><br/>
		各記事のタイトル【○色の本】は背表紙の色です。<br /> <a href="http://miraitosho.hateblo.jp/entry/2014/04/22/225652" target="_blank">蔵書一覧はこちら</a><br /> 　<br /> 未来図書のテーマは、”知らない世界も面白い”です。<br /> 新しい世界、気になる本が見つかれば幸いです。<br /> 　<br /> 
		※2015年7月OPEN予定。神保町徒歩3分。<a href='https://www.google.co.jp/maps/place/%E6%97%A5%E6%9C%AC%E6%95%99%E8%82%B2%E4%BC%9A%E9%A4%A8/@35.694342,139.756234,17z/data=!3m1!4b1!4m2!3m1!1s0x60188c13b8af0a3f:0x9c26ea740eb79b4d' target="_blank">千代田区一ツ橋2−6−2 日本教育会館様B1</a>
	</body>
</html>

