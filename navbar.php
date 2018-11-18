        <header>
            <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
                <a class="navbar-brand mb-0 h1" href="./index.php">
                    <img src="./images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="logo">
                    Ten Asian Food Hall
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./index.php#story">Ten Asian Story</a>
                                <a class="dropdown-item" href="./index.php#why">Why Ten Asian?</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./best-sellers.php">Best Sellers</a>
                                <a class="dropdown-item" href="./menu.php">Menu</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./product-drinks.php">Drinks</a>
                                <a class="dropdown-item" href="./product-food.php">Food</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./customer-order.php">Order Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./location.php">Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./feedback-form.php">Feedback</a>
                        </li>
                    </ul>
<?php 
        if (isset($_SESSION['customerEmail'])){

?> 
        <span class="navbar-text"><a class="btn btn-outline-primary d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="./log-out.php">Sign in</a></span>                 
<?php 
        } else {
?>           
        <span class="navbar-text"><a class="btn btn-outline-primary d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="./sign-in.php">Sign in</a></span>
        <span class="navbar-text"><a class="btn btn-outline-dark d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="./register.php">Register</a></span> 
    <?php
        }
?>           
                    

                    
                </div>
            </nav>
        </header>