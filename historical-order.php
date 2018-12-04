<?php 
// Start session
if(!isset($_SESSION)) { 
    session_start(); 
}
// if not log-in redirect to sign-in
if(!isset($_SESSION['customerEmail'])){
    header('Location: ./sign-in.php');
}
require_once('dbhelper/dbhelper.php');
// query customer historical order and order by dateSold
if (array_key_exists('customerEmail', $_SESSION)){
    $emailAddress = $_SESSION['customerEmail'];
    $customerID = $_SESSION['customerID'];
    $query = "SELECT * FROM Sales WHERE customerID = '{$customerID}' ORDER BY dateSold; ";
    $records = getRows($query);
}
?> 
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="./styles/styles.css">
		<title> Location </title>
	</head>
	<body>
	<!-- Navbar Start --><?php require_once'navbar.php'; ?><!-- Navbar End -->
		
        <!-- Main Content Start -->
        <main role="main">
        <!-- Carousel Start --><?php require_once'carousel.php'; ?><!-- Carousel End -->
		
		<!-- Content Start -->
            <div class="container">
            <?php
            // Checks whether or not the record is empty (i.e. there are no order records)
            if ($records) {
                echo "<div class='table-responsive'>";
                echo "<table class='table table-striped table-sm'>";
                echo "<tr><th>saleID</th><th>employeeID</th><th>price</th><th>dateSold</th><th>Finish?</th><th>CustomerName</th><th>EmailAddress</th><th>Order</th></tr>";
                foreach ($records as $record) {
                    echo "<tr>";
                    echo "<td>{$record['saleID']}</td>";
                    echo "<td>{$record['employeeID']}</td>";
                    $price = $record['price'];
                    $price = number_format($price,2);
                    echo "<td>\${$price}</td>";
                    echo "<td>{$record['dateSold']}</td>";
                    if($record['Finish'] == 0){
                        echo "<td>Processing</td>";
                    }
                    else{
                        echo "<td>Done</td>";
                    }
                    echo "<td>{$record['CustomerName']}</td>";
                    echo "<td>{$record['EmailAddress']}</td>";
                    echo "<td>";
                    $order = unserialize($record['salesPHPArray']);
                    foreach ($order as $keys => $values){
                        $key = explode("-", $keys);
                        // itemID
                        $itemID = $key[0];
                        // number
                        $number = $key[1];
                        // get topping rows
                        $toppings = array();
                        // deal with drinks
                        if(is_array($values)){
                            foreach ($values as $value){
                                // get topping
                                $query = "SELECT * FROM `Menu Items` WHERE itemID={$value}";
                                $topping_row = getOneRow($query);
                                // append array
                                array_push($toppings,$topping_row);
                            }
                        }
                        // get item
                        $query = "SELECT * FROM `Menu Items` WHERE itemID={$itemID}";
                        $menu_item_row = getOneRow($query);
                        // Product name
                        echo ("<p>");
                            echo ($menu_item_row['itemName'] . " #{$number}"."<br>");
                        //echo ("</p>");
                        foreach($toppings as $topping){
                            // Brief description
                            echo ("<small class='text-muted'>");
                                echo ($topping['itemName'] . "<br>");
                            echo ("</small>");
                        }
                        echo ("</p>");  
                    }
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            } 
            else {
                echo "No order record found";
            }
            ?>
            </div>
		<!-- Content End -->
		
		<hr class="featurette-divider">
        <!-- Footer Start --><?php require_once'footer.php'; ?><!-- Footer End -->
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>