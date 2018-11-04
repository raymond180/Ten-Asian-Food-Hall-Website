<?php
include_once("dbhelper/dbhelper.php");

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
		<title>Customer Order</title>
        
	</head>
	<body>
	<!-- Navbar Start --><?php require_once'navbar.php'; ?><!-- Navbar End -->
		
		<!-- Main Content Start -->
        <main role="main">
        <!-- Carousel Start --><?php require_once'carousel.php'; ?><!-- Carousel End -->
		
		<!-- Content Start -->
		<section>
            <div class="container">
                <div class="col-md-12 pt-4 text-center">
                    <h2>Ten Asian Food Hall is for you</h2>
                </div>
                	<form action="./customer-order-submit.php" method="get" class="form-group">
						<fieldset class= "form-group">
						<!-- customer order drink form connect with sales, ingredients, and menu items table -->
								<div class = "row"> 
									<div class = "col-4">
										Drink/Food
									</div>
									<div class = "col-4">
										Price
									</div>
									<div class = "col-4">
										Quanlity
									</div>
								</div>
								<?php 
									foreach($rows as $item){
										//echo(print_r($item));
										echo	"<div class = 'row'>";
										echo		"<div class = 'col-sm-4 col-md-4'>";
										echo			"{$item['itemName']}";
										echo		"</div>";
										echo		"<div class = 'col-sm-4 col-md-4'>";
										echo			"\${$item['price']}";
										echo		"</div>";
										echo		"<div class ='col-sm-4 col-md-4'>";
										echo		"<select name ='{$item['itemID']}' class ='form-control'>";
													for($i=0;$i<=10;$i++){
														echo "<option label='{$i}' value = '{$i}'> {$i}</option>";
													}
										echo		"</select>";
										echo		"</div>";
										echo 	"</div>";
									}
								?>
						</fieldset> <br /> 
                <div class="col-md-12 pt-4 text-right">
                <button type="submit" value ="submit-order" class = "btn btn-primary"> submit order </button>
                </div>
            </div>
		</section>
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