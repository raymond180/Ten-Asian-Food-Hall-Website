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
			<?php $page="customer_order_tracking"; require_once'navbar-side.php'; ?>
			<!-- Side NavBar End -->

            <!-- Main Content Start -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Customer Tracking</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                          <form action="customer_order_tracking.php" method="GET">
                            <input type="text" id=" emailAddress " name="emailAddress" class="form-control" placeholder="Please Enter Email Address" required> <br />
                            <input type="submit" name="submit" class = "btn btn-primary" value="Get Info"> <br />
                          </form>
						              </div>
                      </div>
                  </div>

	<?php
	// Checks if submit button has been pressed
	if (isset($_GET['submit'])) {
	
	
		// Retrieves the emailAddress from the form
		$emailAddress = $_GET['emailAddress'];

		// Writing the SQL Query
		$query = "SELECT * FROM Sales WHERE emailAddress = '{$emailAddress}' ORDER BY dateSold; ";

		// Retrieving the row from the database, note the function "getOneRow"
		// We use this function since we know that 'saleID' is a primary key, there can only be one row in the database with 
		// this student's information
		$records = getRows($query);
    
		// Checks whether or not the record is empty (i.e. there are no order records)
      if ($records) {
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-sm'>";
        echo "<tr><th>saleID</th><th>employeeID</th><th>price</th><th>dateSold</th><th>Finish?</th><th>CustomerName</th><th>EmailAddress</th><th>Order</th></tr>";
        foreach ($records as $record) {
            echo "<tr>";
            echo "<td>{$record['saleID']}</td>";
            echo "<td>{$record['employeeID']}</td>";
            $price = $record['price'];
            $price = number_format($price,2);
            echo "<td>\${$price}</td>";
            echo "<td>{$record['dateSold']}</td>";
            if($record['Finish'] == 0){
                echo "<td>Processing</td>";
            }
            else{
                echo "<td>Done</td>";
            }
            echo "<td>{$record['CustomerName']}</td>";
            echo "<td>{$record['EmailAddress']}</td>";
            echo "<td>";
            $order = unserialize($record['salesPHPArray']);
            foreach ($order as $keys => $values){
                $key = explode("-", $keys);
                // itemID
                $itemID = $key[0];
                // number
                $number = $key[1];
                // get topping rows
                $toppings = array();
                // deal with drinks
                if(is_array($values)){
                    foreach ($values as $value){
                        // get topping
                        $query = "SELECT * FROM `Menu Items` WHERE itemID={$value}";
                        $topping_row = getOneRow($query);
                        // append array
                        array_push($toppings,$topping_row);
                    }
                }
                // get item
                $query = "SELECT * FROM `Menu Items` WHERE itemID={$itemID}";
                $menu_item_row = getOneRow($query);
                // Product name
                echo ("<p>");
                    echo ($menu_item_row['itemName'] . " #{$number}"."<br>");
                //echo ("</p>");
                foreach($toppings as $topping){
                    // Brief description
                    echo ("<small class='text-muted'>");
                        echo ($topping['itemName'] . "<br>");
                    echo ("</small>");
                }
                echo ("</p>");  
            }
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    } 
    else {
        echo "No order record found";
    }
	}
	?>
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