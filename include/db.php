<?php

$dbhost = "localhost";
$dbname = "knitjoy";
$username = "knitjoy";
$password = "knitjoy";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username, $password);

function get_products_all(){
    global $db;
    $products = $db->query("SELECT * FROM `catalog`");
    return $products;
}

function get_aducation_all(){
    global $db;
    $aducation = $db->query("SELECT * FROM `aducation`");
    return $aducation;
}
