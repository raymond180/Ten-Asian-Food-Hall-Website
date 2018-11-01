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
        <form class="form-signin">
          <a class="navbar-brand mb-0 h1" href="./index.php">
                    <img src="./images/logo.jpg" width="30" height="30" class="d-inline-block align-bottom" alt="logo">
                    Ten Asian Food Hall
          </a>
          <img class="img-fluid" src="./images/five-cups.jpg">
          <h1 class="h3 mb-3 font-weight-normal">Create account</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPhoneNumber" class="sr-only">Phone Number</label>
          <input type="phoneNumber" id="inputPhoneNumber" class="form-control" placeholder="Phone Number" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Create Password" required>
          <label for="inputPassword2" class="sr-only">Confirm Password</label>
          <input type="password" id="inputPassword2" class="form-control" placeholder="Confirm Password" required>
          
          <!-- First name --->
          <input type="FirstName" id="inputFirstName" class="form-control" placeholder="First Name" required>

          <!---Last name -->
          <input type="LastName" id="inputLastName" class="form-control" placeholder="Last Name" required>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <br>
            <a href="./sign-in.php">Already registered?</a>
            <br>
          </div>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
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
