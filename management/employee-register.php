<?php
  // NOTE: YOU MAY LOGIN WITH username "user1" or "user2" and password "password"

  require_once('../dbhelper/dbhelper.php');

  session_start();
  if(!isset($_SESSION['isManager']) OR $_SESSION['isManager'] != '1'){
    header('Location: dashboard.php');
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
  <!-- The manager help the employee to regiester an account from here-->
  <body class="text-center">
        <form class="form-signin">
          <img class="img-fluid" src="./images/admin-login.jpg">
          <h1 class="h3 mb-3 font-weight-normal">Create account</h1>
          <label for="employeeName" class="sr-only">employee Name</label>
          <input type="text" id="employeeName" name = "employeeName" class="form-control" placeholder="EemployeeName" required autofocus>
          <label for="inputPassword" class="sr-only">is Manager</label>
          <input type="text" id="isManager" name = "isManager" class="form-control" placeholder="isManager" required>
          <label for="empolyeeLogin" class="sr-only">empolyeeLogin</label>
          <input type="text" id="empolyeeLogin"  name= "empolyeeLogin' class="form-control" placeholder="empolyeeLogin" required>

          <!-- First name --->
          <label for="inputPassword" class="sr-only">employee Passward</label>
          <input type="Passward" id="employeePassward" name= "employeePassward" class="form-control" placeholder="employeePassward" required>
          

          
            <!-- Register account ends here-->

          <!-- Remember me/ Turn to sign in page/ sign in button -->

          <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
          <p class="mt-5 mb-3 text-muted"> Ten Asian Food Hall</p>
          <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
        </form> 


        <?php 
    // Checks if the submit button has been pressed, note this is accessing the "name" attribute
    if (isset($_POST['submit'])) {
      
      // Retrieves the information entered in the form
      $employeeName = $_POST['employeeName'];
      $isManager = $_POST['isManager'];
      $empolyeeLogin = $_POST['empolyeeLogin'];
      $employeePassward = $_POST['employeePassward'];

      // Writes the SQL query
      $query = "INSERT INTO Employees (employeeName, isManager, empolyeeLogin, employeePassward) VALUES ('{$employeeName}','{$isManager}','{$empolyeeLogin}','{$employeePassward}');";
      
      // Uses the proper function from the helper codes to run the query
      runQuery($query);

      // Prints a sample message
      echo "<p>Successfully added record.</p>";
    }
  ?>
       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
