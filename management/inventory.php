<?php
//connect to the dbhelper and get the info from the menu item table 
include_once("../dbhelper/dbhelper.php");

$query = "SELECT * FROM `Ingredients`";
$rows = getRows($query);
?>
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
			<?php $page="inventory"; require_once'navbar-side.php'; ?>
			<!-- Side NavBar End -->
            
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
						<?php
							foreach($rows as $row){
								echo "<tr>";
								foreach($row as $key=>$value){
									echo "<td>{$value}</td>";
								}
								echo "</tr>";
							}
						?>
						<!--
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
						-->
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