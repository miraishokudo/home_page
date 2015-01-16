<html>
	<head>
   <link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<div class='portfolio-message mid_font'>
	<?php
	 	require_once 'php/hatena_scraping.php';
	 	 echo(todays_book_title_and_photo());
	?>
		</div>
  	<script src="assets/js/iframe_height.js"></script>
	</body>
</html>

