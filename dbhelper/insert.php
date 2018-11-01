<?php require_once('dbhelper.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Testing Database Connectivity</title>
</head>
<body>
	<p>Insert Records into Database</p>
	<form action="insert.php" method="POST">
		<p><input type="number" name="uid" placeholder="Enter your UID" required></p>
		<p><input type="text" name="name" placeholder="Enter your name" required></p>
		<input type="password" name="password" placeholder="Enter your password" required>
		<label>Year</label>
		<select name="year" required>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
		</select>
		<input type="submit" name="submit" value="Add Record">
	</form>
	<?php 
		// Checks if the submit button has been pressed, note this is accessing the "name" attribute
		if (isset($_POST['submit'])) {
			
			// Retrieves the information entered in the form
			$uid = $_POST['uid'];
			$name = $_POST['name'];
			$password = $_POST['password'];
			$year = $_POST['year'];

			// Writes the SQL query
			$query = "INSERT INTO Students (UID, Name, Password, Year) VALUES ('{$uid}','{$name}','{$password}','{$year}');";
			
			// Uses the proper function from the helper codes to run the query
			runQuery($query);

			// Prints a sample message
			echo "<p>Successfully added record.</p>";
		}
	?>

</body>
</html>