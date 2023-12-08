<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "brainiacs pos";

$conn = mysqli_connect($host, $user, $pass, $db, 3308);

if (!$conn) {
    echo "Connectin fail";
}

$id = $_GET['updateid'];
$sql = "SELECT * FROM `product` WHERE ProID =$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$ProID = $row['ProID'];
$SupID = $row['SupID'];
$ProName = $row['ProName'];
$ProPurchasePrice = $row['ProPurchasePrice'];
$ProSalePrice = $row['ProSalePrice'];
$ProStock = $row['ProStock'];
$ProPerPack = $row['ProPerPack'];

if (isset($_POST['create'])) {
    // $ProID = $_POST['ProID'];
    // $SupID = $_POST['SupID'];
    $ProName = $_POST['ProName'];
    $ProPurchasePrice = $_POST['ProPurchasePrice'];
    $ProSalePrice = $_POST['ProSalePrice'];
    // $ProStock = $_POST['ProStock'];
    $ProPerPack = $_POST['ProPerPack'];

    // SupID=$SupID,
    $sql = "UPDATE `product` SET  ProName='$ProName',  ProPurchasePrice=$ProPurchasePrice , ProSalePrice=$ProSalePrice , ProPerPack = $ProPerPack
    WHERE ProID=$id";
    // $result = ;

    if (mysqli_query($conn, $sql)) {
        header('Location:pro_list.php');
        exit();
    } else {
        die("Error");

    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../images/logo.png" rel="shortcut icon">
    <title>Product Update</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/stylesBuss.css">

</head>

<style>
    #akt:hover {
        color: #f39c12;
    }

    .sidebar .navbar .navbar-nav .nav-link:hover,
    .sidebar .navbar .navbar-nav .nav-link.active {
        color: #f39c12;
        /* background: var(--dark); */
        border-color: #f39c12;
    }
</style>

<body>
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
                    <img src="../images/logo.png" style="width:50px ; height:50px; padding-top:0px" alt="logo">
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Akthar Farvees</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../home.php" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file me-2" aria-hidden="true"></i>New Sales</a>                     -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-shopping-cart me-2"></i>Sales</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Sales_form.php" class="dropdown-item">New Sales</a>
                            <a href="Sales_display.php" class="dropdown-item">Sales History</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
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
                            <a href="Sup_Display.php" class="dropdown-item">Products List</a>
                            <a href="Search_pro.php" class="dropdown-item">Search Products</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-users me-2"></i>Customers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Customer_form.php" class="dropdown-item">Create New Customer</a>
                            <a href="Cus_Display.php" class="dropdown-item">Customer List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="Supplier.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-address-book me-2"></i>Supplier</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Supplier.php" class="dropdown-item">Create Supplier</a>
                            <a href="Sup_Display.php" class="dropdown-item">Supplier List</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-cogs me-2"></i>Setting</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="BusinessInfo.php" class="dropdown-item">Business Info</a>
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
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars" style="color:#f39c12"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
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
                            <span class="d-none d-lg-inline-flex">Akthar Farvees</span>
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
            <div class="container-fluid pt-4 px-4">
                <div
                    class="row vh-auto bg-secondary pb-4 rounded px-3 pt-4 d-flex align-items-center justify-content-center mx-0">

                    <h3>Update Product</h3>
                    <form method="post" class="form">
                            <div id="lab">
                                <label for="">Product ID</label>
                                <input id="intborder" disabled style="background-color: #2F2F2F;"
                                    value="<?php echo $ProID ?>" type="text" class="form-control" name="ProID"
                                    placeholder="ID" style=" ">
                            </div>
                            <div id="lab">
                                <label for="">Supplier ID</label>
                                <input id="intborder" disabled value="<?php echo $SupID ?>" type="text"
                                    class="form-control" name="SupID" placeholder=""
                                    style=" background-color: #2F2F2F;">
                            </div>
                            <div id="lab">
                                <label for="ProName">Product Name</label>
                                <input id="intborder" value="<?php echo $ProName ?>" type="text" class="form-control"
                                    name="ProName" placeholder="" style="">
                            </div>
                        <div id="lab">
                            <label for="">Purchase Price</label>
                            <input id="intborder" value="<?php echo $ProPurchasePrice ?>" type="tel"
                                class="form-control" name="ProPurchasePrice" placeholder="" style="">
                        </div>
                        <div id="lab">
                            <label for="">Sale Price</label>
                            <input id="intborder" value="<?php echo $ProSalePrice ?>" type="tel" class="form-control"
                                name="ProSalePrice" placeholder="" style="">
                        </div>
                        <div id="lab">
                            <label for="">Per Pack</label>
                            <input id="intborder" value="<?php echo $ProPerPack ?>" type="tel" class="form-control"
                                name="ProPerPack" placeholder="" style="">
                        </div>
                
                        <button type="submit" id="intborder" name="create" class="btn btn-primary"
                            style="background-color: #f39c12;">UPDATE</button>
                    </form>
              
        </div>
    </div>
    <!-- Blank End -->


    <!-- Footer Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded-top p-4">
            <div class="row">
                <div class="col-12 col-sm-6 text-center text-sm-start">
                    &copy; <a href="#" style="color:#f39c12">Akthars' POS System</a>, All Right Reserved.
                </div>
                <div class="col-12 col-sm-6 text-center text-sm-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://htmlcodex.com" style="color:#f39c12">Akthars' Team</a>
                    <br>Distributed By: <a href="https://themewagon.com" target="_blank" style="color:#f39c12">OUSL</a>
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
</body>

</html>