<?php

$dbhost = "localhost";
$dbname = "base-data";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username, $password );


function get_swiper_all () {
    global $db;
    $swiper = $db -> query("SELECT * FROM card");
    return $swiper;
}

function get_slide_all () {
    global $db;
    $slide = $db -> query("SELECT * FROM card_sale");
    return $slide;
}


function get_catalogСoach_all () {
    global $db;
    $catalogСoach = $db -> query("SELECT * FROM catalogcoach");
    return $catalogСoach;
}