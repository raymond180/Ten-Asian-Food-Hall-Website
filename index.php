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

        <!-- Container Start -->
            <div class="container about">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="./images/logo3.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Ahi On Fire</h2>
                        <p>Come and try out our tasty "smoking fire" fish. You won't regret it.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="./images/logo3.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Ruby Milk Tea</h2>
                        <p> Our Ruby Milk Tea is rich in flavor and made to perfection.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="rounded-circle" src="./images/logo3.jpg" alt="Generic placeholder image" width="140" height="140">
                        <h2>Dancing Eel</h2>
                        <p> That's right. It is as tasty as it sounds. Don't forget to grab a bite.</p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->

                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette" id="story">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">The Ten Asian Story. <span class="text-muted"> Here to Satisfy.</span></h2>
                        <p class="lead"> Recognizing the high demand for international cuisines, Ten Asian Food Hall seeks to satisfy customers by offering a wide range of Chinese, Hawaiian, and Korean dishes and beverages.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" src="./images/sugar-buble.jpg" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette" id="why">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Why Ten Asian? <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">At Ten Asian Food Hall, you will experience something new. We welcome you to try out our new bubble tea specialties with topping and flavors like never before. </p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto" src="./images/eight-cups.jpg" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Order Now. <span class="text-muted">It's Easy</span></h2>
                        <p class="lead">Don't miss out on any of our tantalizing offerings. You can place your order online and pick it up at the store. It's Fast, Easy and Convenient. </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" src="./images/salad.jpg" alt="Generic placeholder image">
                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->
            </div> <!-- /. container -->
        </main>
        <!-- Main Content End -->
        
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