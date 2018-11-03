﻿<!doctype html>
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
    <!-- Top NavBar Start--><?php require_once'navbar-top.php'; ?><!-- Top NavBar End -->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="./dashboard.php">
                                <span data-feather="home"></span>
                                Dashboard 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./current-orders.php">
                                <span data-feather="eye"></span>
                                Current Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./inventory.php">
                                <span data-feather="shopping-cart"></span>
                                Inventory 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./suppliers.php">
                                <span data-feather="truck"></span>
                                Suppliers <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./management-report.php">
                                <span data-feather="bar-chart-2"></span>
                                Management Report 
                            </a>
                        </li>
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current inventory reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last month sales report
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Suppliers</h1>
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
                <!-- Data will be pulled from dashboard -->
                <h2>Suppliers </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Supplier #</th>
                                <th>Supplier Name</th>
                                <th>Ingrdient Name</th>
                                <th>Amount</th>
                                <th>Cost</th>
                                <th>Deliver Date</th>
                                <th>Order</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>Bruce company</td>
                                <td>Bubbles</td>
                                <td>500 bags</td>
                                <td>300 $</td>
                                <td>2018.11.1</td>
                                <td><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><button class="btn btn-sm btn-primary" type="submit">Order</button></a></td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>Raymond Company</td>
                                <td>Milk</td>
                                <td>100 gallons</td>
                                <td>400 $</td>
                                <td>2018.11.15</td>
                                 <td><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><button class="btn btn-sm btn-primary" type="submit">Order</button></a></td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>Phoebe Company</td>
                                <td>Chicken wings</td>
                                <td>300 pairs</td>
                                <td>450 $</td>
                                <td>2018.11.5</td>
                                <td><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><button class="btn btn-sm btn-primary" type="submit">Order</button></a></td>
                                
                            </tr>  
                            <tr>
                                <td>1,004</td>
                                <td>James company</td>
                                <td>Beef</td>
                                <td>200 lb</td>
                                <td>300 $</td>
                                <td>2018.12.9</td>
                                 <td><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top"><button class="btn btn-sm btn-primary" type="submit">Order</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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