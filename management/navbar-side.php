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
                    </ul>
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="d-flex align-items-center text-muted" href="#">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current inventory reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last month sales report
                            </a>
                        </li>
                        <li class="nav-item">

                             <a href="./employee-register.php"> Add a new Count </a>
         
                        </li>
                    </ul>
                </div>
            </nav>
