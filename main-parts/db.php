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


function get_catalogCoach_all () {
    global $db;
    $catalogCoach = $db -> query("SELECT * FROM catalogCoach");
    return $catalogCoach;
}


function get_catalogCloset_all () {
    global $db;
    $catalogCloset = $db -> query("SELECT * FROM catalogCloset");
    return $catalogCloset;
}

function get_catalogTeach_all () {
    global $db;
    $catalogTeach = $db -> query("SELECT * FROM catalogTeach");
    return $catalogTeach;
}