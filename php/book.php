<?php
    require_once 'google_calender.php';
    
    define("BOOK_LIST", dirname(__FILE__). '/miraitosho_book_list.json');

    function todays_book_title_and_photo(){
        $book_list = json_decode(file_get_contents(BOOK_LIST), true);

        $title_src = '';
        $photo_src = '';
        foreach (todays_categories() as $category) {
            foreach ($book_list[$category] as $book) {
                $title_src .= "<a href='".$book["url"]."'target='_blank'>".$book["title"]."</a><br />";
                $photo_src .= "<a href='".$book["url"]."'target='_blank'><img title='".$book["title"]."'src='".$book["img_url"]."' class='book_photo'></a>";
            }
        }
        return $title_src."<div class='book_photo_list'>".$photo_src."</div>";
    }

    function todays_book_title_and_photo_hatena(){
        $book_list = json_decode(file_get_contents(BOOK_LIST), true);

        $title_src = '';
        $photo_src = '';
        foreach (todays_categories() as $category) {
            foreach ($book_list[$category] as $book) {
                $title_src .= "<a href='".$book["url"]."'target='_blank' class='book_title_hatena'>".$book["title"]."</a><br />";
                $photo_src .= "<a href='".$book["url"]."'target='_blank'><img title='".$book["title"]."'src='".$book["img_url"]."' class='book_photo_hatena'></a>";
            }
        }
        return array($title_src, $photo_src);
    }