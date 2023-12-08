<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../images/logo.png" rel="shortcut icon">
    <title> Purshase</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Auto Selection with ID -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <!-- Auto Selection with ID Ending -->

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

    <!-- JQuery Multiplication of Two Values -->
    <!-- <script src="dynamic_Input.js"></script> -->
    <script src="./js/TestDynamic.js"></script>
    <script src="../JQuery/jquery-3.6.3.min.js"></script>

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

    .btn_remove {
        color: #FF0000;
        border-color: #FF0000;
        background-color: #191C24;

    }

    .btn_remove:hover {
        color: white;
        background-color: #FF0000;
        border-color: #8B0000;
    }

    .Done {
        color: #096717;
        background: #bdf0c9;
        width: 20%;
        padding: 5px;
        border-radius: 5px;
        font-size: 15px;
        margin: 20;
        text-align: center;
    }

    .Error {
        color: #096717;
        background: red;
        width: 20%;
        padding: 5px;
        border-radius: 5px;
        font-size: 15px;
        margin: 20;
        text-align: center;
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
                    <img src="../images/logo.png" style="width:45px ; height:50px; padding-top:0px" alt="logo">
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
                            <!-- <a href="#" class="dropdown-item">Settings</a> -->
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

                    <h3><b>Purchase</b> Order</h3>


                    <form method="post" action="" class="form">

                        <div id="lab">
                            <label for="SupID">Supplier ID</label>

                            <select style="background-color: #0D0C11; color:white; border-color:#f39c12" name="SupID"
                                id="SupID" class="form-control" onchange="GetDetail(this.value)">
                                <option value="" style="background-color: white; color:black">Select Supplier ID
                                </option>
                                <?php
                                session_start();
                                include("./Connection/Sup_Disp_Conn.php");

                                $query = "SELECT * FROM `supplier`";
                                $result = mysqli_query($conn, $query);

                                if ($result->num_rows > 0) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        $_SESSION['retrievedValue'] = $row['SupID'];
                                        ?>
                                        <option style="background-color: white; color:black"
                                            value="<?php echo $row['SupID']; ?>">
                                            <?php echo $row['SupID'] . " | " . $row['SupName']; ?>
                                        </option>



                                        <?php


                                    }

                                }
                                ?>
                            </select>

                            <span style="font-size: 10px;"><a href="Supplier.php">or Add new Supplier</a></span>
                        </div>

                        <div id="lab">
                            <label for="SupName">Company Name</label>
                            <input id="SupName" disabled type="text" class="form-control" name="SupName"
                                placeholder="Supplier Name" style=" background-color: #2F2F2F;border-color:#f39c12 ">
                        </div>


                    </form>



                    <!-- <div class="container-fluid pt-4 px-4">
                        <div
                            class="row vh-auto bg-secondary pb-4 rounded px-3 pt-4 d-flex align-items-center justify-content-center mx-0"> -->


                    <form action="Purchase.php" method="POST">
                        <?php

                        include "./Connection/Pro_Disp_Conn.php";

                        if (isset($_GET['Done'])) {
                            ?>
                            <p class="Done" style="margin-left:20px;">
                                <?php echo $_GET['Done']; ?>
                            </p>
                            <?php
                        }
                        ?>

                        <div class="table-responsive">
                            <table class="table" id="table_field">
                                <thead>
                                    <tr>
                                        <th hidden scope="col">Supplier</th>
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

                                        <!-- Hiddent item start -->

                                        <input hidden type="text" class="form-control" id="supidd" name="supidd"
                                            placeholder="Supplier ID" style="border-color:#f39c12">

                                            <input hidden type="text" id="GetProID" name="GetProID" placeholder="Another Input Field">

                                        <!-- Hiddn item end -->

                                        <td>
                                            <select style="background-color: #0D0C11; color:white; border-color:#f39c12"
                                                id="pro_name" name="pro_name" class="form-control">
                                                <option selected value="Select Product" style="background-color: white; color:black">Select Product</option>
                                            </select>
                                        </td>

                                        <td><input type="number" id="pur_price-0" class="form-control" name="pur_price"
                                                style="border-color:#f39c12"></td>
                                        <td><input type="number" id="quantity-0" class="form-control" name="quantity"
                                                style="border-color:#f39c12"></td>
                                        <td>
                                            <select class="form-control" name="unit"
                                                style="border-color:#f39c12; background-color:black">
                                                <option value="Pack">Pack</option>
                                                <option value="Piece">Piece</option>
                                                <option value="Weight">Weight</option>
                                            </select>
                                        </td>
                                        <td><input id="intborder" value="" type="number" class="form-control"
                                                name="PerPack" placeholder=""></td>
                                        <td><input type="number" id="total-0" class="form-control" name="ItemTotal"
                                                disabled value=""
                                                style="border-color:#f39c12; background-color: #2F2F2F;"></td>
                                        <td><button type="button" id="add" class="btn btn-outline-success"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Save button for input feild -->
                        <input type="submit" class="btn btn-outline-info" name="save" value="Save"
                            style="margin-bottom: 20px; margin-left: 10px;">



                    </form>


                    <div class="col-12">
                        <div class="bg-secondary rounded h-auto p-auto">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="row">Order Total(0 pack, 0 piece)</th>
                                            <td><input disabled type="number" class="form-control"
                                                    style="border-color:#f39c12; background-color: #2F2F2F;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Order Discount</th>
                                            <td><input type="number" class="form-control" style="border-color:#f39c12;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sub Total</th>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Prev. Balance</th>
                                            <td><input type="number" class="form-control" style="border-color:#f39c12;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><b>Total</b></th>
                                            <td>0.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Paid</th>
                                            <td><input type="number" class="form-control" style="border-color:#f39c12;">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Balance</th>
                                            <td>0.00</td>
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="text-center mt-4">
                                    <select class="form-control mb-2"
                                        style="color:aliceblue; border-color:#f39c12; background-color:black; border-radius:5px">
                                        <option value="">Cash</option>
                                        <option value="">Online</option>
                                        <option value="">Cheque</option>
                                        <option value="">Other</option>
                                    </select>
                                    <input type="text" class="form-control mb-2"
                                        placeholder="Cheque no / Online payment no"
                                        style="color:aliceblue; border-color:#f39c12; background-color:black; border-radius:5px">
                                    <textarea class="form-control mb-2"
                                        placeholder="These remarks will print on the bill" rows="1"
                                        style="color:aliceblue; border-color:#f39c12; background-color:black; border-radius:5px"></textarea>
                                    <textarea class="form-control mb-2"
                                        placeholder="These remarks will not print on the bill" rows="1"
                                        style="color:aliceblue; border-color:#f39c12; background-color:black; border-radius:5px"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Save and Print button section -->
                    <div class="vh-auto"
                        style="text-align:center; margin-top:30px ; background-color:#191C24; padding-top:0; margin-top:0; padding-bottom:25px">
                        <button type="submit" id="" name="save & print" class="btn btn-primary"
                            style="background-color: #f39c12; margin-top: 20px;">SAVE</button>
                    </div>
                </div>
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
                            Designed By <a href="" style="color:#f39c12">Brainiacs' Team</a>
                            <br>Distributed By: <a href="" target="_blank" style="color:#f39c12">OUSL</a>
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

    <script src="dynamic_Input.js"></script>





    <!-- Auto Adding Vale -->
    <script>

        function GetDetail(str) {

            var selectedSupID = str;
            console.log("Selected Supplier ID: " + selectedSupID);

            fetchProducts(selectedSupID);

            if (str.length == 0 || isNaN(str)) {
                document.getElementById("SupName").value = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var myObj = JSON.parse(this.responseText);
                        document.getElementById("SupName").value = myObj[0];
                        document.getElementById("supidd").value = myObj[1];
                        // document.getElementById("pro_name").value = myObj[1];
                    }
                };

                xmlhttp.open("GET", "gfg.php?SupID=" + str, true);
                xmlhttp.send();
            }



        }


// Function to fetch products
function fetchProducts(supplierID) {
    fetch(`Purchase.php?supplier_id=${supplierID}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            let productSelect = document.getElementById('pro_name');
            productSelect.innerHTML = ''; // Clear previous options
            
            if (data.length > 0) {
                data.forEach(product => {
                    let option = document.createElement('option');
                    option.value = product.ProName; // Set ProName as the option value
                    option.textContent = product.ProID + " | " + product.ProName;
                    productSelect.appendChild(option);
                });
            }
        })
        .catch(error => console.error('Error:', error));
}

// Add change event listener to pro_name select element
document.getElementById('pro_name').addEventListener('change', function() {
    let selectedOption = this.options[this.selectedIndex]; // Get the selected option
    let selectedProID = selectedOption.textContent.split(' | ')[0]; // Extract ProID from selected option text

    // Set the value of GetProID field to the selected ProID
    document.getElementById('GetProID').value = selectedProID.trim();
});

// Example usage: Fetch products for a given supplier ID
fetchProducts(supplierID); // Replace supplierID with your actual supplier ID

    </script>



</body>

</html>