<?php 
include_once("dbhelper/dbhelper.php");

if(isset($_SESSION['customerEmail'])){
header('Location: customer-order.php');
}

if (isset($_POST['submit'])) {
      
      // Retrieves the information entered in the form
      $customerName = $_POST['customerName'];
      $customerTelephone = $_POST['customerTelephone'];
      $customerEmail = $_POST['customerEmail'];
      $customerPassword = $_POST['customerPassword'];

      // Writes the SQL query
      $query = "INSERT INTO Customers (customerName, customerTelephone, customerEmail, customerPassword) VALUES ('{$customerName}','{$customerTelephone}','{$customerEmail}','{$customerPassword}');";
      
      // Uses the proper function from the helper codes to run the query
      runQuery($query);

      header('Location: customer-order.php');
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

  <body class="text-center">
        <form action="register.php" method="POST" class="form-signin">
          <a class="navbar-brand mb-0 h1" href="./index.php">
                    <img src="./images/logo.jpg" width="30" height="30" class="d-inline-block align-bottom" alt="logo">
                    Ten Asian Food Hall
          </a>
          <img class="img-fluid" src="./images/five-cups.jpg">
          <h1 class="h3 mb-3 font-weight-normal">Create account</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" name="customerEmail" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPhoneNumber" class="sr-only">Phone Number</label>
          <input type="phoneNumber" name="customerTelephone" id="inputPhoneNumber" class="form-control" placeholder="Phone Number" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="customerPassword" id="inputPassword" class="form-control" placeholder="Create Password" required>
          <label for="inputPassword2" class="sr-only">Confirm Password</label>
          <input type="password" id="inputPassword2" class="form-control" placeholder="Confirm Password" required>
          
          <!-- First name --->
          <label for="customerName" class="sr-only">Customer Name</label>
          <input type="text" name="customerName" id="inputFirstName" class="form-control" placeholder="Name" required>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <br>
            <a href="./sign-in.php">Already registered?</a>
            <br>
          </div>

          <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="add Record">Register</button>
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
