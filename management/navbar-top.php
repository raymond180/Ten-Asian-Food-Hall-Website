<?php
  // NOTE: YOU MAY LOGIN WITH username "user1" or "user2" and password "password"

  require_once('../dbhelper/dbhelper.php');

    if(!isset($_SESSION)) { 
        session_start(); 
    }
	if(!isset($_SESSION['employeeLogin'])){
        header('Location:admin-login.php');
    }
?>    




    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Ten Asian Management</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="log-out.php">Sign out</a>
            </li>
        </ul>
    </nav>