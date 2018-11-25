<?php
include_once("dbhelper/dbhelper.php");

// start session
if(!isset($_SESSION)) { 
    session_start(); 
}
// get cart
if(array_key_exists('cart',$_SESSION)){
    $orders = $_SESSION["cart"];
    $price =  $_SESSION["price"];
    $salesPHPArray = serialize($orders);
    
    // Let database handle the time
    $query = "INSERT INTO `Sales` (price,salesPHPArray) VALUES (" .$price . "," . "'" . $salesPHPArray . "'" . ");";
    runQuery($query);
    //print_r($price);
    //echo("<br>");
    //print_r($dateSold);
    //echo("<br>");
    //print_r($salesPHPArray);
    //echo("<br>");
    //print_r($query);
}
// otherwise, redirect to customer order
else{
    header('Location: customer-order.php');
}
?>