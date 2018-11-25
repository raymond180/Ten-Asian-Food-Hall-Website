<?php
include_once("dbhelper/dbhelper.php");
//try to ge the variables 
/*updates orders table*/
$itemID = array();
$query = "SELECT * FROM `Menu Items`";
$rows = getRows($query);

//creat a 2D array for topping
$toppings = array();
foreach($rows as $row){
	if($row['type']=='topping'){
		array_push($toppings,$row);
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
		<title>Customer Order Sbumit</title>
        
	</head>
	<body>
	<!-- Navbar Start --><?php require_once'navbar.php'; ?><!-- Navbar End -->
		
		<!-- Main Content Start -->
        <main role="main">

        <form action="./payment.php" method="get" class="form-group">
        <!-- Carousel Start --><?php require_once'carousel.php'; ?><!-- Carousel End -->
		<h3 class='text-center'>Customize your order!</h3>

		<!-- inputs info to database -->
			<?php 
				// set the initial price is $0
				$total = 0;
				//use a foreach loop to find out the price for each item
				foreach ($_GET as $key => $value){
					if($value!=0){
						$query = "SELECT * FROM `Menu Items` WHERE itemID = '{$key}';";
						$item = getOneRow($query);
						echo "<h3>Customize your {$item['itemName']}</h3>";
						echo "<div class='row'>";
						//use a for loop to find out what the item should be
						for ($i=1;$i<=$value;$i++){
							echo "<div class='col-sm-12 col-md-4'>";
								echo "<div class='card' style='width: 20rem;'>";
									//transfor the item name and number from the last page
									echo "<div class='card-body'>";
										echo "<h5 class='card-title'>{$item['itemName']} #{$i} </h5>";

										echo "<p class='card-text'></p>";
										
										// use a loop to let the customer to choose their size
										// set name as "id-number" format
										if($item['type'] == 'food'){
												$size = array("Small","Medium","Large");
												for ($s=0; $s<=2; $s++){
													// set middle size as default
													if($s == 1){
														echo ("&nbsp<input type='radio' value='$s' name='" .$item['itemID'].'-'.$i. "' checked>".$size[$s]);	
													}
													// otherwise, no checked
													else{
														echo ("&nbsp<input type='radio' value='$s' name='" .$item['itemID'].'-'.$i. "'>".$size[$s]);
													}
												}
										}									
										elseif ($item['type'] == 'drink'){
											//use a foreach loop to let the 2D array to show up
											foreach($toppings as $topping){
												echo ("<input type ='checkbox' name='" .$item['itemID'].'-'.$i. '[]' . "' value='{$topping['itemID']}'> {$topping['itemName']}");
												echo (" \${$topping['price']} <br />");
											}
										}		
									echo "</div>";
								echo "</div>";
							echo "</div>";
						}
						echo "</div>";
					}
					$total += $value;
				}
				if ($total == 0){
					echo "<h3 class='text-center'>Please select a item to order!</h3>";
				}
			?>	

			<div class="col-md-12 pt-4 text-right">
                <button type="submit" value ="submit-order" class = "btn btn-primary" name="submit"> submit order </button>
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