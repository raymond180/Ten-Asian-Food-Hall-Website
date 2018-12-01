<?php
  // NOTE: YOU MAY LOGIN WITH username "user1" or "user2" and password "password"

  require_once('../dbhelper/dbhelper.php');
  session_start();

  //if already logged in, redirect to dashboardpage
  if(isset($_SESSION['employeeLogin'])) {
    header('Location: dashboard.php');
  }

   // check if the form was submitted by checking to see if PHP automatically set the $_POST variable
   // if the form was submitted, we want to run the code to verify their login.
   // if not, none of the code inside this block runs --> we skip it and don't do anything
  if (isset($_POST['submit'])) {

    $employeeLoginFromForm = $_POST['employeeLogin'];
    $employeePasswordFromForm = $_POST['employeePassword'];

    // construct your query--> note that this does not actually do anything! We need to run the query below.
    $query = "SELECT employeeLogin , employeePassword , employeeID FROM `Employees` WHERE `employeeLogin` = '{$employeeLoginFromForm}'";

    // runs the query and returns the one record. We know there should only be one person with a given username
    $record = getOneRow($query);

    // Checks if the username & password from the form matches what is in the DB
    if ($record['employeeLogin'] == $employeeLoginFromForm AND $record['employeePassword'] == $employeePasswordFromForm) {
      // they are authenticated --> store the session variable to log them in
      $_SESSION['employeeLogin'] = $employeeLoginFromForm;
      // get employee for some function
	  $_SESSION['employeeID'] = $record['employeeID'];
	  //need another session variable--stores the employee is manager
      $_SESSION['isManager'] = '1' ;

      // redirect them to the homepage
      header('Location: dashboard.php');
    } else {
      // display invalid error message
      $errorMessage = "Invalid username or password.";
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

        <!-- Body starts here -->
    <body class="text-center">
        <form action="admin-login.php" method="POST"  class="form-signin" >
          <img class="img-fluid" src="./images/admin-login.jpg">
          <h1 class="h3 mb-3 font-weight-normal">Employee Sign in</h1>
           <!-- Put into the account/Employee Number here -->
          <label for="inputEmployeeNumber" class="sr-only">Employee Number</label>
          <input type="text" name="employeeLogin" id="inputEmployeeNumber" class="form-control" placeholder="Employee Number required" required autofocus>
             <!-- Put into the Password here -->
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="employeePassword" id="inputPassword"  class="form-control" placeholder="Password" required>
          <div class="checkbox mb-3">
            <label>
          

               <!-- Make the website remember the account and password -->
              <input type="checkbox" value="remember-me" > Remember me
            </label>
          </div>
         
          <button class="btn btn-lg btn-dark btn-block" type="submit" name="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
        
        </form> 

       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
