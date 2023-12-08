
            <!-- Emplyee Start Gate  -->
            <div class="container-fluid position-relative d-flex p-0">
                <!-- Spinner Start -->
                <div id="spinner"
                    class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <!-- Spinner End -->



                <!-- Sidebar Start -->
                <div class="sidebar pe-4 pb-3">
                    <nav class="navbar bg-secondary navbar-dark">
                        <a href="blank.php  " class="navbar-brand mx-4 mb-3">
                            <img src="./images/logo.png" style="width:50px ; height:50px; padding-top:0px" alt="logo">
                        </a>
                        <div class="d-flex align-items-center ms-4 mb-4">
                            <div class="position-relative">
                                <img class="rounded-circle" src="./src/img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                                <div
                                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                                </div>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0">
                                    <?= $_SESSION['name'] ?>
                                </h6>
                                <span>
                                    <?= $_SESSION['role'] ?>
                                </span>
                            </div>
                        </div>
                        <div class="navbar-nav w-100">
                            <a href="home.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fa fa-shopping-cart me-2"></i>Sales</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="./src/Sales_form.php" class="dropdown-item">New Sales</a>
                                    <a href="./src/Sales_display.php" class="dropdown-item">Sales History</a>
                                </div>
                            </div>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fa fa-truck me-2"></i> Purchase</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="./src/Purchase_form.php" class="dropdown-item">New Purchase</a>
                                    <a href="./src/Pur_Display.php" class="dropdown-item">Purchase History</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fa fa-gift me-2"></i>Products</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="./src/Product_form.php" class="dropdown-item">Add New Products</a>
                                    <a href="./src/pro_list.php" class="dropdown-item">Products List</a>
                                    <a href="./src/pro_Display.php" class="dropdown-item">Products List Future</a>
                                    <a href="./src/Search_pro.php" class="dropdown-item">Search Products</a>
                                </div>
                            </div> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fa fa-users me-2"></i>Customers</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="./src/Customer_form.php" class="dropdown-item">Create New Customer</a>
                                    <a href="./src/Cus_Display.php" class="dropdown-item">Customer List</a>
                                </div>
                            </div>
                            <!-- <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fa fa-address-book me-2"></i>Supplier</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <a href="./src/Supplier.php" class="dropdown-item">Create Supplier</a>
                                    <a href="./src/Sup_Display.php" class="dropdown-item">Supplier List</a>
                                </div>
                            </div> -->

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                        class="fa fa-cogs me-2"></i>Setting</a>
                                <div class="dropdown-menu bg-transparent border-0">
                                    <!-- <a href="./src/BusinessInfo.php" class="dropdown-item">Business Info</a> -->
                                    <a href="logout.php" class="dropdown-item">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- Sidebar End -->


                <!-- Content Start -->
                <div class="content">
                    <!-- Navbar Start -->
                    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">

                        <a href="#" class="sidebar-toggler flex-shrink-0">
                            <i class="fa fa-bars" style="color:#f39c12"></i>
                        </a>

                        <div class="navbar-nav align-items-center ms-auto">
                            <div class="nav-item dropdown">
                            </div>
                            <div class="nav-item dropdown">

                                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                                    <hr class="dropdown-divider">

                                    <hr class="dropdown-divider">

                                    <hr class="dropdown-divider">

                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="akt">
                                    <img class="rounded-circle me-lg-2" src="./src/img/PP.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <span class="d-none d-lg-inline-flex">
                                        <?= $_SESSION['name'] ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                                    <a href="./src/m_profile.php" class="dropdown-item">My Profile</a>
                                    <a href="logout.php" class="dropdown-item">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar End -->


                    <?php
                    include('./db_conn.php');

                    $query = "SELECT COUNT(saleID) AS totalSales, SUM(itemTotal) AS itemTotal, SUM(BillPaid) AS TotalBillPaid
                     FROM sales"; // Add an alias for the count result
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result); // Fetch the row containing the count value
                        $totalSales = $row['totalSales']; // Assign the count value to $totalSales
                        $itemTotal = $row['itemTotal']; // Assign the count value to $totalSales
                        $TotalBillPaid = $row['TotalBillPaid']; // Assign the count value to $totalSales
                    } else {
                        // Handle query execution failure
                        $totalSales = 0; // Default value if query fails
                    }
                    ?>

                    <?php
                    include('./db_conn.php');

                    $query = "SELECT COUNT(CusID) AS totalCustomer
                     FROM customer"; // Add an alias for the count result
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result); // Fetch the row containing the count value
                        $totalCustomer = $row['totalCustomer']; // Assign the count value to $totalSales
                      
                    } else {
                        // Handle query execution failure
                        $totalCustomer = 0; // Default value if query fails
                    }
                    ?>

                    <?php
                    include('./db_conn.php');

                    $query = "SELECT COUNT(SupID) AS SupplierID
                     FROM supplier"; // Add an alias for the count result
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result); // Fetch the row containing the count value
                        $SupplierID = $row['SupplierID']; // Assign the count value to $totalSales
                      
                    } else {
                        // Handle query execution failure
                        $SupplierID = 0; // Default value if query fails
                    }
                    ?>

                    <?php
                    include('./db_conn.php');

                    $query = "SELECT COUNT(ProID) AS ProTotal, SUM(ProPurchasePrice) AS TotalProPurchasePrice
                     FROM product"; // Add an alias for the count result
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result); // Fetch the row containing the count value
                        $ProTotal = $row['ProTotal']; // Assign the count value to $totalSales
                        $TotalProPurchasePrice = $row['TotalProPurchasePrice'];
                      
                    } else {
                        // Handle query execution failure
                        $ProTotal = 0; // Default value if query fails
                    }
                    ?>

                    <?php
                    include('./db_conn.php');

                    $query = "SELECT COUNT(PurID) AS PurTotal, SUM(ItemTotal) AS ItemTotal
                     FROM purchase"; // Add an alias for the count result
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result); // Fetch the row containing the count value
                        $PurTotal = $row['PurTotal']; // Assign the count value to $totalSales
                        $ItemTotal = $row['ItemTotal'];
                      
                    } else {
                        // Handle query execution failure
                        $ProTotal = 0; // Default value if query fails
                    }
                    ?>

                    <!-- Blank Start -->
                    <div class="container-fluid pt-4 px-md-4">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                            <!-- PURCHASES -->
                            <div class="col">
                                <div
                                    class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center">
                                    <i class="fa fa-briefcase fa-3x mb-3"
                                        style=" color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6>PURCHASES</h6>
                                        <h3>
                                            $<?php echo $ItemTotal ?>
                                        </h3>
                                        <p><a href="./src/Purchase_form.php" class="p">New Purchase</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- SALES -->
                            <div class="col-sm-12 col-xl-3 h-auto">
                                <div
                                    class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center">
                                    <i class="fa fa-chart-line fa-3x mb-3"
                                        style=" color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6>SALES</h6>
                                        <h3>$<?php echo $itemTotal?></h3>
                                        <p><a href="./src/Sales_form.php" class="p">New Sales</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- PROFIT -->
                            <div class="col-sm-12 col-xl-3 h-auto">
                                <div
                                    class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center">
                                    <i class="fa fa-person-walking-luggage fa-3x mb-3"
                                        style=" color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6>PROFIT</h6>
                                        <h3>$<?php echo $itemTotal -  $TotalProPurchasePrice?></h3>
                                        <p><a href="#" class="p">New Sales</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- SALE ORDERS -->
                            <div class="col-sm-12 col-xl-3 h-auto">
                                <div
                                    class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center">
                                    <i class="fa fa-cart-arrow-down fa-3x mb-3"
                                        style=" color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6>SALE ORDERS</h6>
                                        <h3><?php echo $totalSales ?></h3>
                                        <p><a href="./src/Sales_form.php"class="p">New Sale</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-xl-3 h-auto">
                                <div
                                    class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center">
                                    <i class="fa fa-cart-plus fa-3x mb-3"
                                        style=" color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6 class="mb-2">PURCHASE ORDER</h6>
                                        <h3><?=$PurTotal?></h3>
                                        <p><a href="./src/Purchase_form.php" class="p">New Sale</a></p>

                                    </div>
                                </div>
                            </div>

                            <!-- PRODUCTS -->
                            <div class="col-sm-12 col-xl-3 h-auto">
                                <div
                                    class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center">
                                    <i class="fa-brands fa-shopify fa-3x mb-3"
                                        style=" color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6 class="mb-2">PRODUCTS</h6>
                                        <h3><?=$ProTotal?></h3>
                                        <p><a href="./src/Product_form.php" class="p">New Product</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- SUPPLIERS -->
                            <div class="col-sm-12 col-xl-3 h-auto">
                                <div
                                    class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center">

                                    <i class="fa fa-truck fa-3x mb-3"
                                        style=" color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6 class="mb-2">SUPPLIERS</h6>
                                        <h3><?php echo $SupplierID?></h3>
                                        <p><a  href="./src/Supplier.php" class="p">New Supplier</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- CUSTOMERS -->
                            <div class="col-sm-12 col-xl-3 h-auto">
                                <div class="bg-secondary rounded h-100 p-4 d-flex flex-column justify-content-between align-items-center"
                                    style="background-color: #f39c12;">
                                    <i class="fa fa-users fa-3x mb-3"
                                        style="color: #f39c12; padding: 10px; border-radius: 5px;"></i>
                                    <div class="text-center">
                                        <h6 class="mb-2">CUSTOMERS</h6>
                                        <h3><?php echo $totalCustomer?></h3>
                                        <p><a href="./src/Customer_form.php" class="p">New Customer</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Chart End -->
                    <!-- Blank End -->


                    <!-- Footer Start -->
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-secondary rounded-top p-4">
                            <div class="row">
                                <div class="col-12 col-sm-6 text-center text-sm-start">
                                    &copy; <a href="#" style="color:#f39c12">Brainiacs' POS System</a>, All Right Reserved.
                                </div>
                                <div class="col-12 col-sm-6 text-center text-sm-end">
                                    <!--/*** This template is free as long as you keep the footer author’s c#f39c12it link/attribution link/backlink. If you'd like to use the template without the footer author’s c#f39c12it link/attribution link/backlink, you can purchase the C#f39c12it Removal License from "https://htmlcodex.com/c#f39c12it-removal". Thank you for your support. ***/-->
                                    Designed By <a href="" style="color:#f39c12">Brainiacs' Team</a>
                                    <br>Distributed By: <a href="" target="_blank" style="color:#f39c12">OUSL</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Footer End -->
                    <!-- Content End -->


                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
                        style="background-color:#f39c12; border-color: #f39c12"><i class="bi bi-arrow-up"></i></a>
                </div>

                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
                <script src="chart.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/waypoints/waypoints.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>
                <script src="lib/tempusdominus/js/moment.min.js"></script>
                <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
                <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>



                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                <?php if (isset($_GET['success'])) {
                    ?>
                    <script>
                        swal({
                            title: "<?php echo $_GET['success'] ?>",
                            // text: "Done",
                            icon: "success",
                            button: "Done ",
                            iconColor: '#f39c12',
                            showCloseButton: true,
                        });


                    </script>
                    <?php
                }
                ?>



                <!-- Template Javascript -->
                <script src="./src/js/main.js"></script>

