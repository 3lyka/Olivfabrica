<?php

$dbhost = "localhost";
$dbname = "base-data";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username, $password );

//вывод данных на index.pph популярные товары
function get_swiper_all () {
    global $db;
    $swiper = $db -> query("SELECT * FROM card");
    return $swiper;
}
//вывод данных на index.php акции
function get_slide_all () {
    global $db;
    $slide = $db -> query("SELECT * FROM card_sale");
    return $slide;
}

//вывод данных на catalog-coach.php 
//Также создание шаблона товарв
function get_filter_all () {
    global $db;
    $filter = $db -> query("SELECT * FROM catalogcoach");
    return $filter;
}