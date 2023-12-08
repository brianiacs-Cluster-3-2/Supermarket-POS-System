<?php
include 'Connection/Sup_Disp_Conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../images/logo.png" rel="shortcut icon">
    <title>Product Details</title>
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/BuisnessInfo.css">



    <link href="../images/lg.png" rel="shortcut icon">


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" integrity="sha384-7ynz3n3tAGNUYFZD3cWe5PDcE36xj85vyFkawcF6tIwxvIecqKvfwLiaFdizhPpN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./pro_view/search.js">

    <link rel="stylesheet" href="./pro_view/places.css">
    <link rel="stylesheet" href="./pro_view/search.css">


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

        .swal-button {
            padding: 7px 19px;
            border-radius: 2px;
            background-color: #f39c12;
            font-size: 12px;
            border: 0.5px #f39c12;
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
                    <h3 style="color:#f39c12"><img src="../images/lg.png" style="width:37px ; height:37px" alt="logo">
                        Didak' POS</h3>
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
                    <a href="../home.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
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
                            <a href="pro_list.php" class="dropdown-item">Products List</a>
                                <a href="pro_Display.php" class="dropdown-item">Products List Future</a>
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
                            <a href="../BeforeLogin/index.php" class="dropdown-item">Logout</a>
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
                <div class="row vh-auto bg-secondary  rounded align-items-center justify-content-center mx-0">
                    <!-- <div class="col-md-6 text-center"> -->

                    <h3 style="margin-top: 2.5%; margin-left: 1.3%;">Product List</h3>

                    <a href="Product_form.php"><button type="submit" id="intborder" name="create"
                            class="btn btn-primary"
                            style="margin-top: 3%; margin-left: 1.3%; width: 20%; background-color: #f39c12;"> CREATE
                            NEW PRODUCT</button></a>


                    <div class="col-12 ">
                        <div class="bg-secondary rounded h-auto p-auto" style="margin-bottom: 20px;">


                            <section class="gallery" id="gallery" style="margin-top:20px">



                                <div class="box-container">

                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img1.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">Samsung
                                            Galaxy M53</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.50999</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2021</span>
                                        <div class="box-content">
                                            <h3>Samsung M53</h3>
                                            <p>Samsung Galaxy S22 Ultra 5G ; Display, Type ; Size, 6.8 inches, 114.7 cm2
                                                (~90.2% screen-to-body ratio) ; Resolution, 1440 x 3088 pixels (~500 ppi
                                                density).</p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img2.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">IPhone
                                            14</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.400999</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2022</span>
                                        <div class="box-content">
                                            <h3>Milk</h3>
                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img3.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">IPhone
                                            X</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.90999</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2018</span>
                                        <div class="box-content">
                                            <h3>Chips</h3>
                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img4.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">Samsung
                                            Galaxy S22</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.150999</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2022</span>
                                        <div class="box-content">
                                            <h3>Bread</h3>
                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img5.webp" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">Samsung
                                            Galaxy S20</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.80999</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2019</span>
                                        <div class="box-content">
                                            <h3>Chocolate</h3>
                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>

                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img6.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">Sony
                                            Xperia 1 IV</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.50000</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2022</span>
                                        <div class="box-content">
                                            <h3>Chees</h3>
                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img7.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">Samsung
                                            Galaxy M53</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.50000</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2022</span>
                                        <div class="box-content">
                                            <h3>Oil</h3>
                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img8.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">Samsung
                                            Galaxy M53</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.50000</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2022</span>
                                        <div class="box-content">
                                            <h3>Coffee Powder</h3>
                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <img style="width:220px; height: 220px; margin-top: 10px;"
                                            src="../dash/pro_view/product image/img1.png" alt="Tuorism">
                                        <br>
                                        <span
                                            style="font-size: 25px; margin-top: 5px; font-weight: 600; color:	#7F8C8D">Samsung
                                            Galaxy M53</span>
                                        <br>
                                        <span
                                            style="font-size: 20px; margin-top: 5px; font-weight: 400;">Rs.50000</span>
                                        <br>
                                        <span style="font-size: 12px; margin-top: 8px; font-weight: 400;">2022</span>
                                        <div class="box-content">
                                            <h3>Eggs</h3>

                                            <p></p>
                                            <a href="#" class="btnN">Edit</a>
                                        </div>
                                    </div>





                                </div>
                            </section>



                        </div>


                    </div>
                    <!-- </div> -->
                </div>
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
                                Designed By <a href="https://htmlcodex.com" style="color:#f39c12">Brainiacs' Team</a>
                                <br>Distributed By: <a href="https://themewagon.com" target="_blank"
                                    style="color:#f39c12">OUSL</a>
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
</body>

</html>