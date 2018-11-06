<?php
include_once("dbhelper/dbhelper.php");

$salesID = $_POST['salesID'];
$overall = $_POST['overall'];
$speed = $_POST['speed'];
$accuracy = $_POST['accuracy'];
$service = $_POST['service'];
$comment = $_POST['comment'];

$query = "INSERT INTO Feedback (salesID,overall,speed,accuracy,service,comment) VALUES (" .$salesID ."," . $overall ."," . $speed . "," .$accuracy . "," . $service . "," . "'" . $comment ."');";
runQuery($query);
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
		<title>Ten Asian Food Hall</title>
	</head>
	<body>
		<!-- Navbar Start --><?php require_once'navbar.php'; ?><!-- Navbar End -->
		<!-- Main Content Start -->
		<main role="main">
		<!-- Carousel Start --><?php require_once'carousel.php'; ?><!-- Carousel End -->
		<div class='container'>
            <div class='text-center'>
              <img src="./images/eight-cups.jpg" width="400" height="350" class="rounded" alt="eight-cups">
            </div>
            <div class='row'>
                <p style="color:balck;font-size:300%;text-align:center;"> Thank you for giving us valuable feedback. We welcome your next visit!</p>
            </div>
        </div>
		</main>
        <!-- Footer Start --><?php require_once'footer.php'; ?><!-- Footer End -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>