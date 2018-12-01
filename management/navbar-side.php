			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php global $page; if ($page=="dashboard"){echo("active");} ?>" href="./dashboard.php">
                                <span data-feather="home"></span>
                                Dashboard  <?php global $page; if ($page=="dashboard"){echo("<span class='sr-only'>(current)</span>");} ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php global $page; if ($page=="current-orders"){echo("active");} ?>" href="./current-orders.php">
                                <span data-feather="eye"></span>
                                Current Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php global $page; if ($page=="inventory"){echo("active");} ?>" href="./inventory.php">
                                <span data-feather="shopping-cart"></span>
                                Inventory
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php global $page; if ($page=="suppliers"){echo("active");} ?>" href="./suppliers.php">
                                <span data-feather="truck"></span>
                                Suppliers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php global $page; if ($page=="management-report"){echo("active");} ?>" href="./management-report.php">
                                <span data-feather="bar-chart-2"></span>
                                Management Report
                            </a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link <?php global $page; if ($page=="feedback-responce"){echo("active");} ?>" href="./feedback-responce.php">
                                <span data-feather="bar-chart-2"></span>
                                Feedback Responce
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php global $page; if ($page=="customer_order_tracking"){echo("active");} ?>" href="./customer_order_tracking.php">
                                <span data-feather="file-text"></span>
                                Customer Order Tracking
                            </a>
                        </li>
                        <?php
						if(!isset($_SESSION)) { 
							session_start();
						}
						if($_SESSION['isManager'] != '1'){
						}
						else{
						?>
						<li class="nav-item">
                            <a class="nav-link" href="./employee-register.php">
                                <span data-feather="file-text"></span>
                                Add a new employee account
                            </a>
                        </li>
						<?php
						}
						?>
                    </ul>
                </div>
            </nav>
