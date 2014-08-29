<html>
	<head>
   <link rel="stylesheet" href="assets/css/style.css">
	</head>
 <body><div class='portfolio-message mid_font'>

 <?php
 	require_once 'php/hatena_scraping.php';

 	$start_day = new DateTime('2014-08-03');
 	$today = new DateTime();
 	$interval = $today->diff($start_day)->format('%a');
 	$interval_to_first_sunday = floor($interval/14)*14;
 	$interval_to_last_saturday = $interval_to_first_sunday + 13;

 	$book_week_start_day = new DateTime('2014-08-03');
	$book_week_start_day->add(new DateInterval("P{$interval_to_first_sunday}D"));

 	$book_week_end_day = new DateTime('2014-08-03');
	$book_week_end_day->add(new DateInterval("P{$interval_to_last_saturday}D"));

  echo("■{$book_week_start_day->format('Y/m/d')} 〜 {$book_week_end_day->format('Y/m/d')} の本棚<br/>");
  echo(todays_book_list());
?>
		</div>
  	<script src="assets/js/iframe_height.js"></script>
	</body>
</html>

