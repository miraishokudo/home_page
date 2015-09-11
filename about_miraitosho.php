<?php
		require_once 'php/book.php';
		$src = todays_book_title_and_photo_hatena();
		$title_src = "■ 只今展示中<br/>".$src[0];
		$photo_src = $src[1];
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
		勝手ながら店内スペースに限りがあるため、数冊づつに分けての展示となります。<br/>（背表紙の色で分けています。４冊１セットで番号を振っています）<br/><br/>
		<div class='mid_font'>■展示スケジュール</div>
		<iframe id='tosho_calender'style="border-width: 0; margin: 0 5px 30px;" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=450&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=4pa0tc6kcip34qgb3s2a5bqr1c@group.calendar.google.com&amp;color=%232952A3&amp;ctz=Asia%2FTokyo"height="400" width="340"frameborder="0" scrolling="no" align="top"></iframe>
		<div class='mid_font'><?=$title_src?></div><br/>
		<div><?=$photo_src?></div><div style="clear:both;"></div><br/><br/>
		未来食堂は2015年9月OPEN予定。普段は定食屋ですが、喫茶の利用も出来ますよ。<br/>
    神保町徒歩3分、<a href='https://www.google.co.jp/maps/place/%E6%97%A5%E6%9C%AC%E6%95%99%E8%82%B2%E4%BC%9A%E9%A4%A8/@35.694342,139.756234,17z/data=!3m1!4b1!4m2!3m1!1s0x60188c13b8af0a3f:0x9c26ea740eb79b4d' target="_blank">日本教育会館様B1</a>です<br/><br/>
		<img src="img/access_map.png" width="50%"><br/><br/>
		ご覧いただきありがとうございました。ぜひ実物も手にとって下さいね。
	</body>
</html>

