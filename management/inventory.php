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

    <!-- NavBar Start -->
    <title>Ten Asian Management</title>
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Ten Asian Management</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
            </li>
        </ul>
    </nav>
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
                            <a class="nav-link active" href="./inventory.php">
                                <span data-feather="shopping-cart"></span>
                                Inventory <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./suppliers.php">
                                <span data-feather="truck"></span>
                                Suppliers
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
            
            <!-- Main Content Start -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h1 class="h2">Inventory</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button class="btn btn-sm btn-outline-primary">Edit</button>
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar"></span>
                            This week
                        </button>
                    </div>
                </div>

                <!-- Inventory table data pulled from ingredients table-->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity left</th>
                                <th>Unit</th>
                                <th>Last shipment</th>
                                <th>Recommended quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Milk</td>
                                <td>10</td>
                                <td>Gallon</td>
                                <td>Oct. 1 2018</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Green Tea</td>
                                <td>5</td>
                                <td>Box</td>
                                <td>Oct. 10 2018</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Chicken</td>
                                <td>20</td>
                                <td>Pounds</td>
                                <td>Oct. 5 2018</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tapioca</td>
                                <td>30</td>
                                <td>Pounds</td>
                                <td>Sep. 10 2018</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Inventory in Transit table data pulled from supplier table-->
                <h1 class="h2">Inventory in Transit</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity in Transit</th>
                                <th>Unit</th>
                                <th>Estimated arrival</th>
                                <th>Arrive?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Green Tea</td>
                                <td>5</td>
                                <td>Box</td>
                                <td>Oct. 20 2018</td>
                                <td><input class="btn btn-success btn-sm" type="submit" value="Submit"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Chicken</td>
                                <td>30</td>
                                <td>Pounds</td>
                                <td>Oct. 20 2018</td>
                                <td><input class="btn btn-success btn-sm" type="submit" value="Submit"></td>
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
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
</body>
</html>