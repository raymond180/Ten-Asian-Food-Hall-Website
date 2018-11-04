<?php
include_once("dbhelper/dbhelper.php");

$itemID = array();
$query = "SELECT * FROM `Menu Items`";

$rows = getRows($query);
//print_r($_GET)
//foreach($rows as $item){
//	print_r("$_GET['itemID-'.$item['itemID']]");
//}
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
		<h3 class="text-center">Customize your order!</h3>
			<?php 
				foreach ($_GET as $key => $value){
					if($value!=0){
						$query = "SELECT * FROM `Menu Items` WHERE itemID = '{$key}';";
						$item = getOneRow($query);
						echo "<h3>Customize your {$item['itemName']}</h3>";
						echo "<div class='row'>";
						for ($i=1;$i<=$value;$i++){
							echo "<div class='col-sm-12 col-md-4'>";
								echo "<div class='card' style='width: 18rem;'>";
									echo "<div class='card-body'>";
										echo "<h5 class='card-title'>{$item['itemName']} #{$i} </h5>";
										//echo "<h6 class='card-subtitle mb-2 text-muted'>$item['itemName'] #{i}</h6>";
										echo "<p class='card-text'></p>";
									echo "</div>";
								echo "</div>";
							echo "</div>";
						}
						echo "</div>";
					}
				}
			?>			
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