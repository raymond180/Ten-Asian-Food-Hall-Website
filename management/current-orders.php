<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles -->
    <link href="dashboard.css" rel="stylesheet">

    <title>Ten Asian Management</title>
</head>
<body>
    <!-- Top NavBar Start-->
	<?php require_once'navbar-top.php'; ?>
	<!-- Top NavBar End -->
    <div class="container-fluid">
        <div class="row">
            <!-- Side NavBar Start-->
			<?php $page="current-orders"; require_once'navbar-side.php'; ?>
			<!-- Side NavBar End -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">In-Store Orders</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>
                <!-- In-Store Card Start -->
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #01</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Bruce's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 10s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #02</h5>
                                <h6 class="card-subtitle mb-2 text-muted">James's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 30s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #03</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Raymond's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 70s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #04</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Abdul's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 120s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- In-Store Card End -->
                <!-- Online Orders Card Start -->
                <h2>Online Orders</h2>
                <hr class="featurette-divider">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #101</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Bruce's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 10s</p>
                                <p class="card-text">Target Wait time: 360s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #102</h5>
                                <h6 class="card-subtitle mb-2 text-muted">James's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 30s</p>
                                <p class="card-text">Target Wait time: 400s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #103</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Raymond's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 70s</p>
                                <p class="card-text">Target Wait time: 500s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Order #104</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Abdul's Order</h6>
                                <p class="card-text">Korean fried chicken x1</p>
                                <p class="card-text">Milk Tea (No Ice) x1</p>
                                <p class="card-text">Wow Milk (No Ice) x2</p>
                                <p class="card-text">Order Wait time: 120s</p>
                                <p class="card-text">Target Wait time: 600s</p>
                                <button type="button" class="btn btn-success">Finish</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Online Orders Card End -->
                
            </main>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
</body>
</html>