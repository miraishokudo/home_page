<?php
		require_once 'php/hatena_scraping.php';
		$title_src = "<div class='mid_font'>■ 只今展示中<br/>".todays_book_title()."</div>";
		$photo_src = "■ 只今展示中（写真）<br/>".todays_book_photo_hatena();
?>
<html>
	<meta charset="utf-8"/>
	<head>
   <link rel="stylesheet" href="css/style.css">
	</head>
	<body class='hatena'>
		<strong>■当ブログについて</strong><br/>
		当ブログでは、<a href='http://miraishokudo.com/'>未来食堂</a>に置いてある本を紹介しています。店内で自由にお読み頂けます。<br/>
		勝手ながら店内スペースに限りがあるため、数冊づつに分けての展示となります。<br/>（背表紙の色で分けています）<br/><br/><br/>
		<iframe style="border-width: 0; margin: 0 5px 48px;float:left;" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23cccccc&amp;src=miraishokudo%40gmail.com&amp;color=%232952A3&amp;ctz=Asia%2FTokyo" width="280" height="350" frameborder="0" scrolling="no" align="top"></iframe> 
		<div width="355px" height="350px"><?=$title_src?></div><div style="clear:both;"></div>
		<?=$photo_src?><div style="clear:both;"></div><br/><br/>
		各記事のタイトル【○色の本】は背表紙の色です。<br /> <a href="http://miraitosho.hateblo.jp/entry/2014/04/22/225652">蔵書一覧はこちら</a><br /> 　<br /> 未来図書のテーマは、”知らない世界も面白い”です。<br /> 新しい世界、気になる本が見つかれば幸いです。<br /> 　<br /> ※<a href="http://miraishokudo.com">未来食堂</a>は2015年末OPENの予定です。<br /> おまたせしております、今しばらくお待ちください。
	</body>
</html>

