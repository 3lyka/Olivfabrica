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