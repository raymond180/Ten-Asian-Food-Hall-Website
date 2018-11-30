<?php
//connect to the dbhelper and get the info from the menu item table 
include_once("../dbhelper/dbhelper.php");

$query = "SELECT * FROM `Ingredients`";
$rows = getRows($query);

if(isset($_POST['order'])){
	$ingredientID_recommendedQuantity = $_POST['order'];
	$ingredientID_recommendedQuantity = explode("-",$ingredientID_recommendedQuantity);
	$ingredientID = $ingredientID_recommendedQuantity[0];
	$recommendedQuantity = $ingredientID_recommendedQuantity[1];
	
	$ingredient_query = "SELECT * FROM `Ingredients` WHERE IngredientID={$ingredientID}";
	$ingredient_row = getOneRow($ingredient_query);
	
	$supllier_query = "SELECT * FROM `Suppliers` WHERE supplierID={$ingredient_row['SupplierID']}";
	$supllier_row = getOneRow($supllier_query);
	
	
	// the message
	$message = "Dear {$supllier_row['supplierName']}, \r\nwe want to order {$ingredient_row['IngredientName']} for {$recommendedQuantity} {$ingredient_row['Unit']}. \r\nThank you,\r\nTen Asian Food Hall";
	// use wordwrap() if lines are longer than 70 characters
	$message = wordwrap($message, 70, "\r\n");
	// send email
	mail("{$supllier_row['supplierEmail']}","Ten Asian Food Hall: order{$ingredient_row['IngredientName']}",$message);
	
	$ingredient_update_query = "UPDATE `Ingredients` SET inTransit='1' , lastShipmentDate=now() , lastShipmentQuantity={$recommendedQuantity} WHERE `Ingredients`.`IngredientID` = {$ingredientID};";
	runQuery($ingredient_update_query);
	
	header("Location: ./inventory.php");
}
if(isset($_POST['arrive'])){
	$ingredientID = $_POST['arrive'];
	$ingredient_query = "SELECT * FROM `Ingredients` WHERE IngredientID={$ingredientID}";
	$ingredient_row = getOneRow($ingredient_query);
	
	$new_quantity = (int)$ingredient_row['IngredientQuantity'] + (int)$ingredient_row['lastShipmentQuantity'];
	$arrive_update = "UPDATE `Ingredients` SET IngredientQuantity = {$new_quantity} , inTransit='0' WHERE `Ingredients`.`IngredientID` = {$ingredientID};";
	runQuery($arrive_update);
	
	header("Location: ./inventory.php");
}
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
								<th>Safety quantity</th>
								<th>Recommended quantity</th>
								<th>Order</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
							foreach($rows as $row){
								echo "<tr>";
								echo "<td>{$row['IngredientID']}</td>";
								echo "<td>{$row['IngredientName']}</td>";
								echo "<td>{$row['IngredientQuantity']}</td>";
								echo "<td>{$row['Unit']}</td>";
								$lastShipmentDate = substr($row['lastShipmentDate'],0,10);
								echo "<td>{$lastShipmentDate}</td>";
								echo "<td>{$row['SafetyQuantity']}</td>";
								// caculate recommendedQuantity
								if($row['inTransit'] == 1){
									$recommendedQuantity = "In Transit";
								}
								elseif($row['IngredientQuantity'] >= $row['SafetyQuantity']){
									$recommendedQuantity = "Enough";
								}
								else{
									$recommendedQuantity = $row['SafetyQuantity'] - $row['IngredientQuantity'];
								}
								echo "<td>{$recommendedQuantity}</td>";
								// order button
								if($recommendedQuantity != "Enough" && $recommendedQuantity != "In Transit"){
									echo "<td>";
										echo "<form method='POST'>";
											$supplier_query = "SELECT * FROM `Suppliers` WHERE supplierID={$row['SupplierID']}";
											$supplier_row = getOneRow($supplier_query);
											$supplier_email = $supplier_row['supplierEmail'];
											//$html_Mailto_button = "<a href='mailto:" . $supplier_email . "'?Subject='Ten Asian Food Hall' target='_top'><button class='btn btn-sm btn-primary' type='submit'>Order</button></a>";
											$ingredientID_recommendedQuantity = (string)$row['IngredientID'] . "-" . (string)$recommendedQuantity;
											$html_form_button = "<button class='btn btn-sm btn-primary' type='submit' name='order' value='{$ingredientID_recommendedQuantity}'>Order</button>";
											echo ($html_form_button);
										echo "</form>";
									echo "</td>";
								}
								else{
									echo "<td></td>";
								}
								echo "</tr>";
							}
						?>
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
                                <th>Arrive?</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
							$inTransit_query = "SELECT * FROM `Ingredients` WHERE inTransit=1 ;";
							$inTransit_rows = getRows($inTransit_query);
							foreach($inTransit_rows as $row){
								echo "<tr>";
								echo "<td>{$row['IngredientID']}</td>";
								echo "<td>{$row['IngredientName']}</td>";
								echo "<td>{$row['lastShipmentQuantity']}</td>";
								echo "<td>{$row['Unit']}</td>";
								echo "<form method='POST'>";
									$arrive_button = "<td><button class='btn btn-sm btn-success' type='submit' name='arrive' value='{$row['IngredientID']}'>Arrive</button></td>";
									echo ($arrive_button);
								echo "</form>";
								echo "</tr>";
							}
						?>
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