<?php

include_once("dbhelper/dbhelper.php");

$itemID = array();
$query = "SELECT * FROM `Menu Items`";
$rows = getRows($query);

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
				<<!-- check how many product we have brought and connect with salse table -->
		        <div class="row">
		        <div class="col-md-4 order-md-2 mb-4">
		          <h4 class="d-flex justify-content-between align-items-center mb-3">
		            <span class="text-muted">Your cart</span>
		            <span class="badge badge-secondary badge-pill">3</span>
		          </h4>
		          <ul class="list-group mb-3">
		            <li class="list-group-item d-flex justify-content-between lh-condensed">
		              <div>

		              	<?php 
		              		foreach ($_GET as $key => $value){
								if($value!=0){
									$query = "SELECT itemName FROM `Menu Items` WHERE itemID = '{$key}';";
									$item = getOneRow($query);
									echo "<h3>product name {$item['itemName']}</h3>";
									echo "<h3>product price {$price['price']}</h3>";
									echo "<h3>product type {$type['type']}</h3>";
								}

		              	?>
		                <h6 class="my-0">Product name</h6>
		                <small class="text-muted">Brief description</small>
		              </div>
		              <span class="text-muted"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between lh-condensed">
		              <div>
		                <h6 class="my-0">Second product</h6>
		                <small class="text-muted">Brief description</small>
		              </div>
		              <span class="text-muted"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between lh-condensed">
		              <div>
		                <h6 class="my-0">Third item</h6>
		                <small class="text-muted">Brief description</small>
		              </div>
		              <span class="text-muted"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between bg-light">
		              <div class="text-success">
		                <h6 class="my-0">Promo code</h6>
		                
		              </div>
		              <span class="text-success"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between">
		              <span>Total (USD)</span>
		              <strong></strong>
		            </li>
		          </ul>

		          <form class="card p-2">
		          	<!-- ask customer basic information and connect with customer, sales table -->
		            <div class="input-group">
		              <input type="text" class="form-control" placeholder="Promo code">
		              <div class="input-group-append">
		                <button type="submit" class="btn btn-secondary">Redeem</button>
		              </div>
		            </div>
		          </form>
		        </div>
		        <div class="col-md-8 order-md-1">
		          <h4 class="mb-3">Billing address</h4>
		          <form class="needs-validation" novalidate>
		            <div class="row">
		              <div class="col-md-6 mb-3">
		                <label for="firstName">First name</label>
		                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
		                <div class="invalid-feedback">
		                  Valid first name is required.
		                </div>
		              </div>
		              <div class="col-md-6 mb-3">
		                <label for="lastName">Last name</label>
		                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
		                <div class="invalid-feedback">
		                  Valid last name is required.
		                </div>
		              </div>
		            </div>
		            <div class="mb-3">
		              <label for="email">Email <span class="text-muted"></span></label>
		              <input type="email" class="form-control" id="email" placeholder="you@example.com">
		              <div class="invalid-feedback">
		                Please enter a valid email address for your receipt.
		              </div>
		            </div>

		            <div class="mb-3">
		              <label for="address">Address</label>
		              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
		              <div class="invalid-feedback">
		                Please enter your shipping address.
		              </div>
		            </div>

		            <div class="mb-3">
		              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
		              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
		            </div>

		            <div class="row">
		              <div class="col-md-5 mb-3">
		                <label for="country">Country</label>
		                <select class="custom-select d-block w-100" id="country" required>
		                  <option value="">United States</option>
		                  <option>China</option>
		                  <option>South Korean</option>
		                </select>
		                <div class="invalid-feedback">
		                  Please select a valid country.
		                </div>
		              </div>
		              <div class="col-md-4 mb-3">
		                <label for="state">State</label>
		                <select class="custom-select d-block w-100" id="state" required>
		                  <option value="">Choose...</option>
		                  <option>California</option>
		                </select>
		                <div class="invalid-feedback">
		                  Please provide a valid state.
		                </div>
		              </div>
		              <div class="col-md-3 mb-3">
		                <label for="zip">Zip</label>
		                <input type="text" class="form-control" id="zip" placeholder="" required>
		                <div class="invalid-feedback">
		                  Zip code required.
		                </div>
		              </div>
		            </div>
		 			
		 			<!-- connect with sales table  -->
		            <h4 class="mb-3">Payment</h4>

		            
		            <hr class="mb-4">
		            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
		          </form>
				  <!-- Form End -->
		        </div>
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