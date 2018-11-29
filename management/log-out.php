<?php 
	session_start();
	session_destroy();
//if the employee log out, rediect to the page admin-login 
	header('Location: admin-login.php');
?>