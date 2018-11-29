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
    if(array_key_exists('customerID',$_SESSION)){
        $customerID = $_SESSION['customerID'];
        $query = "INSERT INTO `Sales` (price,customerID,salesPHPArray) VALUES (" .$price . "," .$customerID . ","  . "'" . $salesPHPArray . "'" . ");";
        runQuery($query);
    }
    // if customer not loged in
    else{
        $query = "INSERT INTO `Sales` (price,salesPHPArray) VALUES (" .$price . "," . "'" . $salesPHPArray . "'" . ");";
        runQuery($query);
    }

    // Auto-Deduction
    // flattern the array to get toppings order
    $orders_values_items = array_values_recursive($orders);
    // do size replacement
    $replacement = ['0'=>'small','1'=>'medium','0'=>'large'];
    $orders_values_items= array_replace($orders_values_items,$replacement);
    // get orders keys
    $orders_keys = array_keys($orders);
    // get the itemID
    $orders_key_items = array();
    foreach($orders_keys as $orders_key){
        $keys = explode("-",$orders_key);
        array_push($orders_key_items,$keys[0]);
    }
    // append toppings and item
    $order_items = array_merge($orders_key_items,$orders_values_items);
    // count items ordered
    $order_items_count = array_count_values($order_items);
    // get rid of size
    unset($order_items_count['small']);
    unset($order_items_count['medium']);
    unset($order_items_count['large']);


    // get the ordersID
    $order_items_count_keys = array_keys($order_items_count);
    $where_ItemID = "(";
    foreach($order_items_count_keys as $order_items_count_key){
        $where_ItemID .= $order_items_count_key . ",";
    }
    $where_ItemID = substr($where_ItemID, 0, -1);
    $where_ItemID .= ")";
    // query recipe
    $recipe_query = "SELECT * FROM `Menu Recipes` WHERE ItemID in " . $where_ItemID;
    $recipe_rows = getRows($recipe_query);

    // get IngredientID
    $where_IngredientID = "(";
    foreach($recipe_rows as $recipe_row){
        $where_IngredientID .= $recipe_row['ingredientID'] . ",";
    }
    $where_IngredientID = substr($where_IngredientID, 0, -1);
    $where_IngredientID .= ")";
    // query current ingredient level
    $igredient_query = "SELECT * FROM `Ingredients` WHERE ingredientID in " . $where_IngredientID;
    $ingredient_rows = getRows($igredient_query);

    // update IngredientQuantity
    foreach($recipe_rows as $recipe){
        $quantity = $order_items_count[(string)$recipe['itemID']] * $recipe['quantityused'];
        foreach($ingredient_rows as $ingredient){
            if($recipe['ingredientID'] == $ingredient['IngredientID']){
                $new_quantity = $ingredient['IngredientQuantity'] - $quantity;
                $update_query = "UPDATE `Ingredients` SET IngredientQuantity = {$new_quantity}  WHERE IngredientID = {$ingredient['IngredientID']}";
                runQuery($update_query);
            }
        }
    }

    // redirect to Paypal
    header("Location: https://paypal.me/bmgt407/{$price}");
}
// otherwise, redirect to customer order
else{
    header('Location: customer-order.php');
}
?>