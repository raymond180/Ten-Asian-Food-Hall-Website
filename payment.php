<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="./styles/styles.css">
		<title> Payment </title>
	</head>
	<body>
	<!-- Navbar Start --><?php require_once'navbar.php'; ?><!-- Navbar End -->
            
        <!-- Main Content Start -->
        <main role="main">
        <!-- Carousel Start -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="text-center">
                            <img class="img-fluid" src="./images/five-cups.jpg" alt="Drinks">
                        </div>
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <p><a class="btn btn-md btn-dark" href="./customer-order.html" role="button">Order online</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="img-fluid" src="./images/fried-chicken-and-buble.jpg" alt="Food">
                        </div>
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <p><a class="btn btn-md btn-dark " href="./menu.html" role="button">Browse menu</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="img-fluid" src="./images/six-cups.jpg" alt="Store">
                        </div>
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <p><a class="btn btn-md btn-dark" href="./index.html#story" role="button">About us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <!-- Carousel End -->
		
		<!-- Content Start -->
            <div class="container">
                <h2>Customer Payment </h2>
				<!-- Form Start -->
				<<!-- check how many product we have brought and connect with salse table -->
		        <div class="row">
		        <div class="col-md-4 order-md-2 mb-4">
		          <h4 class="d-flex justify-content-between align-items-center mb-3">
		            <span class="text-muted">Your cart</span>
		            <span class="badge badge-secondary badge-pill">3</span>
		          </h4>
		          <ul class="list-group mb-3">
		            <li class="list-group-item d-flex justify-content-between lh-condensed">
		              <div>
		                <h6 class="my-0">Product name</h6>
		                <small class="text-muted">Brief description</small>
		              </div>
		              <span class="text-muted"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between lh-condensed">
		              <div>
		                <h6 class="my-0">Second product</h6>
		                <small class="text-muted">Brief description</small>
		              </div>
		              <span class="text-muted"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between lh-condensed">
		              <div>
		                <h6 class="my-0">Third item</h6>
		                <small class="text-muted">Brief description</small>
		              </div>
		              <span class="text-muted"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between bg-light">
		              <div class="text-success">
		                <h6 class="my-0">Promo code</h6>
		                
		              </div>
		              <span class="text-success"></span>
		            </li>
		            <li class="list-group-item d-flex justify-content-between">
		              <span>Total (USD)</span>
		              <strong></strong>
		            </li>
		          </ul>

		          <form class="card p-2">
		          	<!-- ask customer basic information and connect with customer, sales table -->
		            <div class="input-group">
		              <input type="text" class="form-control" placeholder="Promo code">
		              <div class="input-group-append">
		                <button type="submit" class="btn btn-secondary">Redeem</button>
		              </div>
		            </div>
		          </form>
		        </div>
		        <div class="col-md-8 order-md-1">
		          <h4 class="mb-3">Billing address</h4>
		          <form class="needs-validation" novalidate>
		            <div class="row">
		              <div class="col-md-6 mb-3">
		                <label for="firstName">First name</label>
		                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
		                <div class="invalid-feedback">
		                  Valid first name is required.
		                </div>
		              </div>
		              <div class="col-md-6 mb-3">
		                <label for="lastName">Last name</label>
		                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
		                <div class="invalid-feedback">
		                  Valid last name is required.
		                </div>
		              </div>
		            </div>
		            <div class="mb-3">
		              <label for="email">Email <span class="text-muted"></span></label>
		              <input type="email" class="form-control" id="email" placeholder="you@example.com">
		              <div class="invalid-feedback">
		                Please enter a valid email address for your receipt.
		              </div>
		            </div>

		            <div class="mb-3">
		              <label for="address">Address</label>
		              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
		              <div class="invalid-feedback">
		                Please enter your shipping address.
		              </div>
		            </div>

		            <div class="mb-3">
		              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
		              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
		            </div>

		            <div class="row">
		              <div class="col-md-5 mb-3">
		                <label for="country">Country</label>
		                <select class="custom-select d-block w-100" id="country" required>
		                  <option value="">United States</option>
		                  <option>China</option>
		                  <option>South Korean</option>
		                </select>
		                <div class="invalid-feedback">
		                  Please select a valid country.
		                </div>
		              </div>
		              <div class="col-md-4 mb-3">
		                <label for="state">State</label>
		                <select class="custom-select d-block w-100" id="state" required>
		                  <option value="">Choose...</option>
		                  <option>California</option>
		                </select>
		                <div class="invalid-feedback">
		                  Please provide a valid state.
		                </div>
		              </div>
		              <div class="col-md-3 mb-3">
		                <label for="zip">Zip</label>
		                <input type="text" class="form-control" id="zip" placeholder="" required>
		                <div class="invalid-feedback">
		                  Zip code required.
		                </div>
		              </div>
		            </div>
		 			
		 			<!-- connect with sales table  -->
		            <h4 class="mb-3">Payment</h4>

		            
		            <hr class="mb-4">
		            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
		          </form>
				  <!-- Form End -->
		        </div>
		      </div>
            </div>
		<!-- Content End -->
		
		<hr class="featurette-divider">
        <!-- Footer Start -->
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <small class="d-block mb-3 text-muted">Ten Asian Food Hall</small>
                    <small class="d-block mb-3 text-muted">&copy; 2018-2019</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Menu</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="./best-sellers.html">Best sellers</a></li>
                        <li><a class="text-muted" href="./menu.html">Menu</a></li>
                        <li><a class="text-muted" href="./product-drinks.html">Drinks</a></li>
                        <li><a class="text-muted" href="./product-food.html">Food</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Orders</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="./customer-order.html">Order online</a></li>
                        <li><a class="text-muted" href="./sign-in.html">Customer sign in</a></li>
                        <li><a class="text-muted" href="./register.html">Register</a></li>
                        <li><a class="text-muted" href="./edit-account.html">Edit account</a></li>
                        <li><a class="text-muted" href="./feedback-form.html">Give us feedback</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="./index.html#story">Our story</a></li>
                        <li><a class="text-muted" href="./index.html#why">Why Ten Asain</a></li>
                        <li><a class="text-muted" href="./location.html">Location</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Management</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="./management/admin-login.html">Management portal</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>