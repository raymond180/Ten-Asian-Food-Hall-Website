<?php
include_once("dbhelper/dbhelper.php");

$itemID = array();
$query = "SELECT * FROM `Menu Items`";
$rows = getRows($query);

//foreach($rows as $key=>$value){
//	if($key)
//}
//print_r($_GET)
$toppings = array();
foreach($rows as $row){
	if($row['type']=='topping'){
		array_push($toppings,$row);
	}
}
//print_r($topping);
//$query1 = "SELECT * from `Menu Items` where type = 'topping'";

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
			<?php 
				$total = 0;
				foreach ($_GET as $key => $value){
					if($value!=0){
						$query = "SELECT * FROM `Menu Items` WHERE itemID = '{$key}';";
						$item = getOneRow($query);
						echo "<h3>Customize your {$item['itemName']}</h3>";
						echo "<div class='row'>";
						for ($i=1;$i<=$value;$i++){
							echo "<div class='col-sm-12 col-md-4'>";
								echo "<div class='card' style='width: 20rem;'>";
									
									echo "<div class='card-body'>";
										echo "<h5 class='card-title'>{$item['itemName']} #{$i} </h5>";

										echo "<p class='card-text'></p>";
										
										
										if($item['type'] == 'food'){
												$size = array("Small","Medium","Large");
												for ($s=0; $s<=2; $s++){
													echo ("&nbsp<input type='radio' name='size'>".$size[$s]);	
												}
										}									
										else{
											
											foreach($toppings as $topping){
												echo "<input type = 'checkbox' name = {$topping['itemName']} value = {$topping['price']}> {$topping['itemName']}";
												echo "\${$topping['price']} <br />";
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
<!--
			?php 
				for($i=0;$i<=3;$i++){
					<input type = "radio" name ="size" value ="small">
					echo "<option label='{$i}' value = '{$i}'> {$i}</option>";
			?
			<input type = "radio" name ="size" value ="small">
-->
			<div class="col-md-12 pt-4 text-right">
                <button type="submit" value ="submit-order" class = "btn btn-primary"> submit order </button>
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