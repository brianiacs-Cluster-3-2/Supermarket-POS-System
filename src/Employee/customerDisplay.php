
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
            <a href="../home.php" class="navbar-brand mx-4 mb-3">
                <img src="../images/logo.png" style="width:50px ; height:45px; padding-top:0px" alt="logo">
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                    <div
                        class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                    </div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"><?php echo $_SESSION['name']?></h6>
                    <span><?php echo $_SESSION['role']?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="../home.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-shopping-cart me-2"></i>Sales</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="Sales_form.php" class="dropdown-item">New Sales</a>
                        <a href="Sales_display.php" class="dropdown-item">Sales History</a>
                    </div>
                </div>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-truck me-2"></i> Purchase</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="Purchase_form.php" class="dropdown-item">New Purchase</a>
                        <a href="Pur_Display.php" class="dropdown-item">Purchase History</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-gift me-2"></i>Products</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="Product_form.php" class="dropdown-item">Add New Products</a>
                        <a href="pro_list.php" class="dropdown-item">Products List</a>
                        <a href="pro_Display.php" class="dropdown-item">Products List Future</a>
                        <a href="Search_pro.php" class="dropdown-item">Search Products</a>
                    </div>
                </div> -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-users me-2"></i>Customers</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="Customer_form.php" class="dropdown-item">Create New Customer</a>
                        <a href="Cus_Display.php" class="dropdown-item">Customer List</a>
                    </div>
                </div>
                <!-- <div class="nav-item dropdown">
                    <a href="Supplier.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-address-book me-2"></i>Supplier</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="Supplier.php" class="dropdown-item">Create Supplier</a>
                        <a href="Sup_Display.php" class="dropdown-item">Supplier List</a>
                    </div>
                </div> -->

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                            class="fa fa-cogs me-2"></i>Setting</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <!-- <a href="BusinessInfo.php" class="dropdown-item">Business Info</a> -->
                        <a href="../logout.php" class="dropdown-item">Log Out</a>
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

                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/PP.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                //empty
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/PP.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                //empty
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/PP.jpg" alt=""
                                    style="width: 40px; height: 40px;">
                                //empty
                            </div>
                    </div>
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
                        <img class="rounded-circle me-lg-2" src="img/PP.jpg" alt=""
                            style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['name']?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="../dash/m_profile.php" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="../logout.php" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Blank Start -->
        <div class="container-fluid pt-4 px-4 mb-2 pb-3">
            <div class="row vh-auto bg-secondary rounded align-items-center justify-content-center mx-0">
                <div class="col-md-11 text-center">
                    <h3 style="margin-top: 4%;">Customer List</h3>
                    <div style="display:flex; justify-content: flex-end; margin-top: 15px; margin-bottom: 20px;  ">
                        <form action="Cus_conn_db.php" method="post">
                            <button type="submit" id="intborder" name="createFromDisplay" class="btn btn-primary"
                                style="background-color: #f39c12;">
                                CREATE
                            </button>
                        </form>
                    </div>

                </div>
                <div class="col-12">
                    <div class="bg-secondary rounded h-auto p-auto">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Supplier Name</th>
                                        <th scope="col">Supplier Address</th>
                                        <th scope="col">Balance</th>
                                        <th scope="col">Customer Email</th>
                                        <th scope="col">Customer Mobile</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    $sql = "SELECT * FROM `customer`";
                                    $result = mysqli_query($conn, $sql);

                                    if ($result) {

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $CusID = $row['CusID'];
                                            $CusName = $row['CusName'];
                                            $CusAddress = $row['CusAddress'];
                                            $CusBalanace = $row['CusBalanace'];
                                            $CusEmail = $row['CusEmail'];
                                            $CusMobile = $row['CusMobile'];

                                            echo '<tr>
                                            <th scope="row">' . $CusID . '</th>
                                            <td>' . $CusName . '</td>
                                            <td>' . $CusAddress . '</td>
                                            <td>' . $CusBalanace . '</td>
                                            <td>' . $CusEmail . '</td>
                                            <td>' . $CusMobile . '</td>
                                            <td>
                                            <button type="button" class="btn btn-success m-2"><a href="Cus_update.php?updateid=' . $CusID . '" class="text-white">Update</a></button>
                                            <a href="Cus_delete.php?deleteid=' . $CusID . '"><button type="button" class="btn btn-outline-danger m-2"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                           
                                        </td>
                                        </tr>';
                                        }
                                    }

                                    ?>


                                <tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- </div>
            </div>
        </div> -->
        <!-- Blank End -->


        <!-- Footer Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary rounded-top p-4">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-start">
                        &copy; <a href="#" style="color:#f39c12">Brainiacs' POS System</a>, All Right Reserved.
                    </div>
                    <div class="col-12 col-sm-6 text-center text-sm-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="#" style="color:#f39c12">Brainiacs' Team</a>
                        <br>Distributed By: <a href="#" target="_blank" style="color:#f39c12">OUSl</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        style="background-color:#f39c12; border-color: #f39c12"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if (isset($_GET['success'])) {
    ?>
    <script>
        swal({
            title: "<?php echo $_GET['success'] ?>",
            // text: "Done",
            icon: "success",
            button: "Done ",
            iconColor: 'red',
            showCloseButton: true,
        });


    </script>
    <?php
}
?>
    
