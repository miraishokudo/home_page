
<?php
    require_once 'hatena_scraping.php';
    $books_src = todays_book_title_and_photo();

    $start_day = new DateTime('2014-08-03');
    $today = new DateTime();
    $interval = $today->diff($start_day)->format('%a');
    $interval_to_first_sunday = floor($interval/14)*14;
    $interval_to_last_saturday = $interval_to_first_sunday + 13;

    $book_week_start_day = new DateTime('2014-08-03');
    $book_week_start_day = $book_week_start_day->add(new DateInterval("P{$interval_to_first_sunday}D"))->format('Y/m/d');

    $book_week_end_day = new DateTime('2014-08-03');
    $book_week_end_day = $book_week_end_day->add(new DateInterval("P{$interval_to_last_saturday}D"))->format('Y/m/d');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div id='book_list_title'>
            ■<?=$book_week_start_day?> 〜 <?=$book_week_end_day?>の本棚（背表紙の色で4冊づつ分けています）
        </div>
        <div><?=$books_src?></div>
        <script src="../js/auto_height.js"></script>
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>