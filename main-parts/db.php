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

//вывод данных на catalog-coach.php по ее id
function get_category_by_id($id) {
    global $db;
    $categories = $db -> query("SELECT * FROM categories WHERE id = $id");
    foreach ($categories as $category) {
        return $category["category_name"];
    }
    
}
//Получение всех товаров
function get_filters_all () {
    global $db;
    $filters = $db -> query("SELECT * FROM catalogcoach");
    return $filters;
}
//шаблон карточки товара
function get_filter_by_id($id) {
    global $db;
    $filters = $db -> query("SELECT * FROM catalogcoach WHERE id = $id");
    foreach ($filters as $filter) {
        return $filter;
    }
}