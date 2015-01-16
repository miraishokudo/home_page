<html>
	<head>
   <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body style="margin-top: 0px;">
		<div class='portfolio-message small_font'>
		■ 只今展示中<br/>
	<?php
	 	require_once 'php/hatena_scraping.php';
	 	echo(todays_book_title());
	?>
		</div>
	</body>
</html>

