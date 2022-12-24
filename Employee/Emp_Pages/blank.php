<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Didak' POS System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
       
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
    border: 0.5px  #f39c12;
    border-color: #f39c12;  
    
    }

    .p{
        color: #AEAEAE;
        font-size: 10px; 
        text-align: right; 
        margin-top:-82.5px; 
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
                        <h3  style="color:#f39c12"><i class="fa fa-user-edit me-2" style="color:#f39c12"></i>Didak' POS</h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">Akthar Farvees</h6>
                            <span>Employee</span>
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
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-truck me-2"></i> Purchase</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="Purchase_form.php" class="dropdown-item">New Purchase</a>
                                <a href="Pur_Display.php" class="dropdown-item">Purchase History</a>
                            </div>
                        </div>           -->
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-gift me-2"></i>Products</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="Product_form.php" class="dropdown-item">Add New Products</a>
                                <a href="Sup_Display.php" class="dropdown-item">Products List</a>
                            </div>
                        </div>                     -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-users me-2"></i>Customers</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="Customer_form.php" class="dropdown-item">Create New Customer</a>
                                <a href="Cus_Display.php" class="dropdown-item">Customer List</a>
                            </div>
                        </div>
                        <!-- <div class="nav-item dropdown">
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
                        </div>                -->
                    </div>
                </nav>
            </div>


            <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0" >
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars" style="color:#f39c12"></i>
                    </a>
                    <!-- <form class="d-none d-md-flex ms-4">
                        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                    </form> -->
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
                                <span class="d-none d-lg-inline-flex" >Akthar Farvees</span>
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
                    <div class="row g-4">
                        <div class="col-sm-12 col-xl-3">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-2">PURCHASES</h6>
                                <i class="fa-solid fa-briefcase fa-3x" style="color:#353b48; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i> 
                                <h3 style="text-align: right; margin-top:-30px">$258</h3> 
                                <a href=""><p class="p" >New Purchase</p> </a>                                               
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-3">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-2">SALES</h6>
                                <i class="fa-solid fa-chart-line fa-3x" style="color:rgb(59, 91, 152);; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i>
                                <h3 style="text-align: right; margin-top:-30px">$2585</h3>
                                <a href=""><p class="p" >New Sales</p> </a>     
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-3">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-2">PROFIT</h6>
                                <i class="fa-solid fa-person-walking-luggage fa-3x" style="color:#6D214F; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i> 
                                <h3 style="text-align: right; margin-top:-30px">$558</h3>                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-3">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-2">SALE ORDERS</h6>
                                <i class="fa-solid fa-cart-arrow-down fa-3x" style="color:#c8d6e5; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i>
                                <h3 style="text-align: right; margin-top:-30px">48</h3>
                                <a href=""><p class="p">New Sale</p> </a>                            
                                                            
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-3">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-2">PURCHASE ORDER</h6>
                                <i class="fa-sharp fa-solid fa-cart-plus fa-3x" style="color:#eb2f06; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i> 
                                <h3 style="text-align: right; margin-top:-30px">78</h3>
                                                  
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-3">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-2">PRODUCTS</h6>
                                <i class="fa-brands fa-shopify fa-3x" style="color:#218c74; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i>
                                <h3 style="text-align: right; margin-top:-30px">800</h3>
                                <a href=""><p class="p" >New Product</p> </a>     
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-3">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-2">SUPPLIERS</h6>
                                <i class="fa fa-truck  fa-3x" style="color:#535c68; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i>  
                                <h3 style="text-align: right; margin-top:-30px">50</h3>
                                <a href=""><p class="p" >New Supplier</p> </a>                                               
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-3" >
                            <div class="bg-secondary rounded h-100 p-4" style="background-color:red">
                                <h6 class="mb-2">CUSTOMERS</h6>
                                <i class="fa-sharp fa-solid fa-users fa-3x" style="color:#30336b; background-color:#f39c12; border-radius: 0.2em; padding: 0.2em;"></i> 
                                <h3 style="text-align: right; margin-top:-30px">258</h3>
                                <a href=""><p class="p" >New Customer</p> </a>                    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Chart End -->
                <!-- Blank End -->


                <!-- Footer Start -->
                <div class="container-fluid pt-4 px-4" style="margin-top:190px;">
                    <div class="bg-secondary rounded-top p-4">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center text-sm-start">
                                &copy; <a href="#" style="color:#f39c12">Didak' POS System</a>, All Right Reserved. 
                            </div>
                            <div class="col-12 col-sm-6 text-center text-sm-end">
                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a href="" style="color:#f39c12">Didak' Team</a>
                                <br>Distributed By: <a href="" target="_blank" style="color:#f39c12">SLIATE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"  style="background-color:#f39c12; border-color: #f39c12"><i class="bi bi-arrow-up" ></i></a>
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