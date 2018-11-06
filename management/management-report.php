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
			<?php $page="management-report"; require_once'navbar-side.php'; ?>
			<!-- Side NavBar End -->

            <!-- Main Content Start -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Management Report</h1>
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
                <!-- Data will be pulled from database -->
                <h2>Sales</h2>
                <hr class="featurette-divider">
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                
                <!-- Data will be pulled from database -->
                <h2>Feedback (out of 5) </h2>
                </div>
				<?php
					require_once('../dbhelper/dbhelper.php');
					// Writing the query
					$query = "SELECT * FROM Feedback;";
					// Getting all rows from the query
					// Note that I use "getRows" because this query will return multiple rows
					$records = getRows($query);
					if ($records) {
							// Looping through all the rows of the database
							// At any point in time, $record represents one row of the entire database
							$counter = 0;
							$overall = 0;
							$speed = 0;
							$accuracy = 0;
							$service = 0;
							foreach ($records as $record) {
								echo "<tr>";
								// Accesses and prints the values inside the uid, name, and year columns, for every row in the database
								$overall  += intval($record['overall']);
								$speed    += intval($record['speed']);
								$accuracy += intval($record['accuracy']);
								$service  += intval($record['service']);								
								$counter++;
							}
					echo "<div class='table-responsive'>";
						echo "<table class='table table-striped table-sm'>";
							echo "<thead>";
								echo "<tr>";
									echo "<th></th>";
									echo "<th>Overall</th>";
									echo "<th>Speed</th>";
									echo "<th>Accuracy</th>";
									echo "<th>Service</th>";
									echo "<th></th>";
								echo "</tr>";
							echo "</thead>";
							echo "<tbody>";
								echo "<tr>";
									// Accesses and prints the values inside the uid, name, and year columns, for every row in the database
									echo "<td>Average</td>";
									$overall_average = number_format($overall/$counter,2);
									$speed_average = number_format($speed/$counter,2);
									$accuracy_average = number_format($accuracy/$counter,2);
									$service_average = number_format($service/$counter,2);
									echo "<td>{$overall_average}</td>";
									echo "<td>{$speed_average}</td>";
									echo "<td>{$accuracy_average}</td>";
									echo "<td>{$service_average}</td>";
									echo "<td></td>";
								echo "</tr>";
							echo "</tbody>";
						echo "</table>";
					echo "</div>";
					} 
					else {
						echo "<p>No feedback found in table.</p>";
					}
				?>   
                <!-- Data will be pulled from database -->
                <h2>Loyal Customer</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>average order per week</th>
                                <th>Feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>James</td>
                                <td>202xxxxxxx</td>
                                <td>2</td>
                                <td>Good service, Clean</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Bruce</td>
                                <td>202xxxxxxx</td>
                                <td>3</td>
                                <td>Nice chicken</td>
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