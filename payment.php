<?php

include_once("dbhelper/dbhelper.php");

$query = "SELECT * FROM `Menu Items`";
$menu_item_rows = getRows($query);

// Pass $get to orders and handle submit
$orders = $_GET;
if(array_key_exists('submit',$orders)){
	unset($orders['submit']);
	session_start();
	$_SESSION["cart"] = $orders;
}
else{
	if (array_key_exists('cart', $_SESSION)){
		$orders = $_SESSION["cart"];
	}
	else{
		header('Location: customer-order.php');
	}
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
		<title> Payment </title>
	</head>
	<body>
	<!-- Navbar Start --><?php require_once ('navbar.php'); ?><!-- Navbar End -->
            
        <!-- Main Content Start -->
        <main role="main">
        <!-- Carousel Start --><?php require_once('carousel.php'); ?><!-- Carousel End -->
		
		<!-- Content Start -->
            <div class="container">
                <h2>Customer Payment </h2>
								
				<!-- Form Start -->
				<!-- check how many product we have brought and connect with salse table -->
		        <div class="row">
		        <div class="col-md-4 order-md-2 mb-4">
		          <h4 class="d-flex justify-content-between align-items-center mb-3">
		            <span class="text-muted">Your cart</span>
		            <span class="badge badge-secondary badge-pill"><?php echo (count($orders)); ?></span>
		          </h4>
		          <ul class="list-group mb-3">
										<?php
											$total_price = 0;
											foreach ($orders as $keys => $values){
												$sub_total_price = 0;
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

												
												// deal with food
												//else{
												//	$size = array("Small","Medium","Large");
												//}

												// putting item and customized stuff together
												
												echo ("<li class='list-group-item d-flex justify-content-between lh-condensed'>");
												echo ("<div>");
												// Product name
												echo ("<h6 class='my-0'>");
													echo ($menu_item_row['itemName'] . " #{$number} \$" . $menu_item_row['price'] . "<br>");
													$sub_total_price += $menu_item_row['price'];
												echo ("</h6>");
												foreach($toppings as $topping){
													// Brief description
													echo ("<small class='text-muted'>");
														echo ($topping['itemName'] . " \$" . $topping['price'] . "<br>");
														$sub_total_price += $topping['price'];
														//echo ("<div class='float-right'>");
														//echo ("</div>");
													echo ("</small>");
												}
												echo ("</div>");
												echo ("<span class='text-muted'></span>");
												echo ("</li>");
												$total_price += $sub_total_price;
												$_SESSION["price"] = $total_price;
											}
										?>

		            <li class="list-group-item d-flex justify-content-between">
		              <span>Total (USD)</span>
		              <strong> <div class='float-right'> <?php echo("\$" . number_format($total_price,2));?> </div> </strong>
		            </li>
		          </ul>

		        </div>
		        <div class="col-md-8 order-md-1">
		          <h4 class="mb-3">Customer Information</h4>
		          <form class="needs-validation"  action="./paymentProcess.php" method="POST">
		            <div class="row">
		              <div class="col-md-6 mb-3">
		                <label for="CustomerName">Customer Name</label>
										<?php 
										// if log-in make their name default
										if(isset($_SESSION['customerEmail'])){
											$query = "SELECT * FROM `Customers` WHERE customerEmail = '{$_SESSION['customerEmail']}' ;";
											$customer_row = getOneRow($query);
											echo ("<input type='text' class='form-control' id='CustomerName' name='CustomerName' value='{$customer_row['customerName']}' disabled>");
										}
										else{
											echo ("<input type='text' class='form-control' id='CustomerName' name='CustomerName' required>");
										}
										?>
		                <div class="invalid-feedback">
		                  Valid first name is required.
		                </div>
		              </div>
		            <div class="col-md-6 mb-3">
		              <label for="EmailAddress">Email Address <span class="text-muted"></span></label>
									<?php 
									if(isset($_SESSION['customerEmail'])){
										echo ("<input type='EmailAddress' class='form-control' id='EmailAddress' name='EmailAddress' value='{$customer_row['customerEmail']}' disabled>");
									}
									else{
										echo ("<input type='EmailAddress' class='form-control' id='EmailAddress' name='EmailAddress' placeholder='you@example.com' required>");
									}
									?>
		              
		              <div class="invalid-feedback">
		                Please enter a valid email address for your receipt.
		              </div>
		            </div>
							</div>
		 			
		 			<!-- connect with sales table  -->
		            <hr class="mb-4">
								<h4 class="mb-3">Payment</h4>
		            <button class="btn btn-primary btn-lg btn-block" type="submit" name="checkout"> Checkout </button>
		          </form>
				  <!-- Form End -->
		        </div>
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