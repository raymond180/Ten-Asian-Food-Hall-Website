﻿<?php 

require_once('dbhelper/dbhelper.php');
session_start();

if(isset($_SESSION['customerEmail'])){
  header('Location: customer-order.php');
}
if (isset($_POST['submit'])){
  $usernameFromForm = $_POST['customerEmail'];
  $passwordFromForm = $_POST['customerPassword'];

  $query = "SELECT customerEmail , customerPassword FROM Customers WHERE customerEmail = '{$usernameFromForm}'";
  $record = getOneRow ($query);

  if($record['customerEmail'] == $usernameFromForm AND $record['customerPassword']  == $passwordFromForm){
    $_SESSION['customerEmail'] = $usernameFromForm;

    header('Location: customer-order.php ');
  }
  else {
    $errorMessage = "Invalid Email or Password";
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
        <link rel="stylesheet" href="./styles/sign-in.css">
		<title>Ten Asian Food Hall</title>
	</head>

<!-- Body starts -->
	<body class="text-center">
      <form action="sign-in.php" method = "POST" class="form-signin">
          <a class="navbar-brand mb-0 h1" href="./index.php">
                    <img src="./images/logo.jpg" width="30" height="30" class="d-inline-block align-bottom" alt="logo">
                    Ten Asian Food Hall
          </a>
          <img class="img-fluid"src="./images/five-cups.jpg">
          <h1 class="h3 mb-3 font-weight-normal">Customer Sign in</h1>
          <?php 
             if(isset($errorMessage))
              echo "<p>" .$errorMessage. "</p>";
          ?>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" name="customerEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="customerPassword" id="inputPassword" class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <br>
            <a href="./register.php"> Don't have an account? </a>
            <br>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
           
          <p class="mt-5 mb-3 text-muted"> Ten Asian Food Hall</p>
          <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
        </form>
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
