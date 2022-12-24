<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Brainiacs' POS System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

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


    <link rel="stylesheet" href="../../AutoComplete Check/script.js">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


   


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

    .swal-button {
        padding: 7px 19px;
        border-radius: 2px;
        background-color: #f39c12;
        font-size: 12px;
        border: 0.5px #f39c12;
        border-color: #f39c12;

    }

    .table_center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="blank.php  " class="navbar-brand mx-4 mb-3">
                    <h3 style="color:#f39c12; margin-left:-10px"><img src="./img/logo.png" style="width:40px ; height:40px" alt="logo"> Brainiacs' POS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Akthar Farvees</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="blank.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-shopping-cart me-2"></i>Sales</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Sales_form.php" class="dropdown-item">New Sales</a>
                            <a href="Sales_display.php" class="dropdown-item">Sales History</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-truck me-2"></i> Purchase</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Purchase_form.php" class="dropdown-item">New Purchase</a>
                            <a href="Pur_Display.php" class="dropdown-item">Purchase History</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-gift me-2"></i>Products</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Product_form.php" class="dropdown-item">Add New Products</a>
                            <a href="Pro_Display.php" class="dropdown-item">Products List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Customers</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Customer_form.php" class="dropdown-item">Create New Customer</a>
                            <a href="Cus_Display.php" class="dropdown-item">Customer List</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="Supplier.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-address-book me-2"></i>Supplier</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="Supplier.php" class="dropdown-item">Create Supplier</a>
                            <a href="Sup_Display.php" class="dropdown-item">Supplier List</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cogs me-2"></i>Setting</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="BusinessInfo.php" class="dropdown-item">Business Info</a>
                            <a href="../N_login.php" class="dropdown-item">Logout</a>
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
                                    <img class="rounded-circle" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                                    //empty
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                                    //empty
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
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
                            <img class="rounded-circle me-lg-2" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Akthar Farvees</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="../Login.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row v bg-secondary pt-4  justify-content-center mx-0 " style="padding-bottom: 25px; ">
                    <div>
                        <h3><b>Purchase</b> Order</h3>

                        <div class="Buisness_info">
                            
                                <form method="post" action="Purchase_conn_db.php">
                                <div class="form-row">
                                    <div class="lab">
                                        <label for="SupName">Supplier Name</label>
                                        <input id="intborder" type="text" class="form-control" name="SupName" placeholder="Type Supplier Name" style="width: 50%;">
                                        <span style="font-size: 10px;"><a href="Supplier.php">or Add new Supplier</a></span>
                                        <label for="">Capital: <span id="address"></span></label>
        
                                    </div>
                                    <div class="lab">
                                        <label for="SupAddress">Address</label>
                                        <input id="intborder" disabled  style="background-color:#2F2F2F;width: 50%;" type="text" class="form-control" name="SupAddress" placeholder="Supplier Address">
                                    </div>
                                </div>

                                <input type="submit" name="clcik" value="Click"></button>
                                </form>
                        </div>
                    </div>
                </div>


                <form method="post" action="Purchase_conn_db.php">

                <div class="col-12">
                    <div class="bg-secondary rounded h-auto p-auto">

                        <div class="w-100 vh-100">
                            <!--//class="table table-responsive -->
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Purchase Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Per Pack</th>
                                        <th scope="col">Item Total</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">1</th>
                                        <th scope="col"><input type="text" class="form-control" placeholder="Type Product Name" style="border-color:#f39c12"></th>
                                        <th scope="col"><input type="text" class="form-control" style="border-color:#f39c12"></th>
                                        <th scope="col"><input type="text" class="form-control" style="border-color:#f39c12"></th>
                                        <th scope="col"><select class="form-control" style="border-color:#f39c12; background-color:black">
                                                <option value="">Pack</option>
                                                <option value="">Piece</option>
                                                <option value="">Weight</option>
                                            </select></th>
                                        <th scope="col"><input id="intborder"  value="0" type="number" class="form-control" name="ProStock" placeholder=""></th>
                                        <th scope="col"><input type="text" class="form-control" style="border-color:#f39c12"></th>
                                        <th><button type="button" id="add" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a></th>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="col-sm-12 col-xl-7 ">
                                <div class="bg-secondary rounded h-100  p-4">
                                    <!-- <h6 class="mb-4">Table Without Border</h6> -->
                                    <table class="table table-borderless">

                                        <tbody>
                                            <tr>
                                                <th scope="row">Order Total(0 pack, 0 piece)</th>
                                                <td>0.00</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Order Discount</th>
                                                <td><input type="number" class="form-control" style="border-color:#f39c12; width: 60%"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Sub Total</th>
                                                <td>0.00</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Prev. Balance</th>
                                                <td><input type="number" class="form-control" style="border-color:#f39c12; width: 60%"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><b>Total</b></th>
                                                <td>0.00</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Paid</th>
                                                <td><input type="number" class="form-control" style="border-color:#f39c12; width: 60%"></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Balance</th>
                                                <td>0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div style="text-align:center; margin-top:30px ;">
                                <select name="" id="" style="color:aliceblue; border-color:#f39c12; width: 50%; background-color:black; border-radius:5px">
                                    <option value="  ">Cash</option>
                                    <option value="  ">Online</option>
                                    <option value="  ">Cheque</option>
                                    <option value="  ">Other</option>
                                </select>
                                <br>
                                <input type="text" placeholder="checque no/ Online payment no" style="margin-top:6px; color:aliceblue; border-color:#f39c12; width: 50%; background-color:black; border-radius:5px">
                                <br>
                                <textarea name="" id="" placeholder="These reamark will print on bill" rows="1" style="margin-top:6px; color:aliceblue; border-color:#f39c12; width: 50%; background-color:black; border-radius:5px"></textarea>
                                <br>
                                <textarea name="" id="" placeholder="These reamark will not print on bill" rows="1" style="margin-top:6px; color:aliceblue; border-color:#f39c12; width: 50%; background-color:black; border-radius:5px"></textarea>

                                <br>


                            </div>



                        </div>
                    </div>

                    <div style="text-align:center; margin-top:30px ; background-color:#191C24; padding-top:0; margin-top:0; padding-bottom:25px">
                        <button type="submit" id="" name="print" class="btn btn-primary" style="width: 20%; background-color: #f39c12;">Save & Print</button>
                    </div>
                    </form>
                    
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
                                    <br>Distributed By: <a href="https://themewagon.com" target="_blank" style="color:#f39c12">OUSL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer End -->
                </div>
                <!-- Content End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color:#f39c12; border-color: #f39c12"><i class="bi bi-arrow-up"></i></a>
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







            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>