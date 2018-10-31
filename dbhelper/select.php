<!DOCTYPE html>
<html>
<head>
	<title>Select Example</title>
</head>
<body>
	<form action="select.php" method="GET">
		<input type="text" name="uid" placeholder="Enter your UID">
		<input type="submit" name="submit" value="Get Info">
	</form>

	<?php
	// Checks if submit button has been pressed
	if (isset($_GET['submit'])) {
		// Requires the helper codes
		require_once('dbhelper.php');

		// Retrieves the UID from the form
		$uid = $_GET['uid'];

		// Writing the SQL Query
		$query = "SELECT * FROM Students WHERE UID = '{$uid}';";

		// Retrieving the row from the database, note the function "getOneRow"
		// We use this function since we know that 'uid' is a primary key, there can only be one row in the database with 
		// this student's information
		$record = getOneRow($query);

		// Checks whether or not the record is empty (i.e. there are no students with the uid entered)
		if ($record) {
			echo "UID: ".$record['UID']."<br>";
			echo "Name: ".$record['Name']."<br>";
			echo "Year: ".$record['Year']."<br>";
			echo "<br>";
		} else {
			echo "No record exists for the uid {$uid}";
		}
	}
	?>

</body>
</html>