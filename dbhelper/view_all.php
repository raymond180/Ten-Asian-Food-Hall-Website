<?php
	// Implements the helper functions
require_once('dbhelper.php');

	// Writing the query
$query = "SELECT * FROM Students;";

	// Getting all rows from the query
	// Note that I use "getRows" because this query will return multiple rows
$records = getRows($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Directory</title>
	<style>
		table {
			border-collapse: collapse;
		}
		table, tr, td, th {
			border: 1px solid black;
			padding: 5px;
		}
		td {
			vertical-align: center;
		}
	</style>
</head>
<body>
	<h2>Student Directory</h2>
	<table>
		<?php

		if ($records) {
			echo "<th>UID</th><th>Name</th><th>Year</th>";
		
			// Looping through all the rows of the database
			// At any point in time, $record represents one row of the entire database
			foreach ($records as $record) {
				echo "<tr>";
				// Accesses and prints the values inside the uid, name, and year columns, for every row in the database
				echo "<td>{$record['UID']}</td>";
				echo "<td>{$record['Name']}</td>";
				echo "<td>{$record['Year']}</td>";
				echo "</tr>";
			}
		} else {
			echo "<p>No students found in table.</p>";
		}
		?>
	</table>
</body>
</html>
