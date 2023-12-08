<?php
session_start();
include("./Connection/Sup_Disp_Conn.php");


if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../images/logo.png" rel="shortcut icon">
    <title>Sales register</title>
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

<?php
        if ($_SESSION['username'] == "admin") {
            ?>

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
                    <img src="../images/logo.png"
                            style="width:50px ; height:50px; padding-top:0px" alt="logo">
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
                            <a href="../Login.php" class="dropdown-item">Log Out</a>
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
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['name']?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="../dash/m_profile.php" class="dropdown-item">My Profile</a>
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
                    <h3 class="mb-4">Sales Order</h3>

                    <form method="post" action="Sales_conn_db.php" >
                        <div class="row justify-content-center">

                        <?php 
                            include("./Connection/Sup_Disp_Conn.php");

                            // Assuming you have started the session elsewhere
                            if(isset($_SESSION['id'])) {
                                // Sanitize the session ID (for example, if it's supposed to be an integer)
                                $sessionId = intval($_SESSION['id']);

                                // Using prepared statement to prevent SQL injection
                                $stmt = $conn->prepare("SELECT name,id FROM users WHERE role = ?");
                                $stmt->bind_param("i", $sessionId);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                // Check if there are any rows returned
                                if ($result->num_rows > 0) {
                                    // Fetch the data
                                    $row = $result->fetch_assoc();
                                    $userName = $row['name'];
                                    $userID= $row['id'];
                                    
                                    // Display the user name
                                    // echo "<h1>Welcome, $userName!</h1>";
                                } else {
                                    echo "<h1>No user found!</h1>";
                                }

                                    $stmt->close();
                                } else {
                                    echo "<h1>Session ID not set!</h1>";
                                }
                            ?>

                        
                            <div class="col-md-5">
                                <div id="lab">
                                    <label for="username">I'm <?php echo $_SESSION['name']?></label>
                                    <input id="intborder" 
                                        type="text"
                                        disabled
                                        value="<?php echo $userID; ?>"
                                        class="form-control" 
                                        name="userID"
                                        style="background-color:#2F2F2F;"
                                        placeholder="Type Supplier Name">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div id="lab">
                                    <label for="Customer">Customer</label>
                                    <select id="customerSelect" class="form-control" style="background-color:#2F2F2F; border: 1px solid #f39c12;" name="CusID">
                                    <option value="Selct">Selct Customer</option>
                                        <?php 
                                            include("./Connection/Sup_Disp_Conn.php");

                                            $queryCutomerSelect = "SELECT * FROM customer";

                                            $resultCutomerSelect = mysqli_query($conn, $queryCutomerSelect);

                                            if ( $resultCutomerSelect -> num_rows > 0 ) {
                                                while ( $row = mysqli_fetch_assoc($resultCutomerSelect) ) {
                                                    ?>
                                                        <option value="<?php echo $row['CusID'] ?>"><?php echo $row['CusName'] ?></option>
                                                    <?php
                                                }
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                        
                        </div>

   




                        <div class="col-12">
                        <div class="bg-secondary rounded h-auto p-auto">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Sale Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Item Total</th>
                                    <!-- <th scope="col">Discount</th> -->
                                    <!-- <th scope="col">Bill Paid</th> -->
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td scope="col">
                                    <select id="productSelect" class="form-control" style="background-color:#2F2F2F; border: 1px solid #f39c12;"  name="ProID">
                                        <option value="Select">Select Product</option>
                                        <?php 
                                        include("./Connection/Sup_Disp_Conn.php");

                                        $queryProductSelect = "SELECT * FROM product";
                                        $resultProductSelect = mysqli_query($conn, $queryProductSelect);

                                        if ($resultProductSelect->num_rows > 0) {
                                            while ($row = mysqli_fetch_assoc($resultProductSelect)) {
                                        ?>
                                                <option value="<?php echo $row['ProID'] ?>"><?php echo $row['ProName'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    </td>                                   
                                  
                                    <td scope="col"><select  
                                    id="proPriceSelect" 
                                    class="form-control" 
                                    name="ProSalePrice" 
                                    style="background-color:#2F2F2F; border-color: #f39c12;" placeholder="Sale Price" >
                                    <option value="">
                                        Select Sale Price</option>
                                    </select></td>                                   
                                   
                                    <td scope="col"><input 
                                    type="number"
                                    name="quantity" 
                                    id="quantity" 
                                    class="form-control"
                                    placeholder="quantity" 
                                    style="border-color:#f39c12"></td>                                   
                                    
                                    <td scope="col"><select  
                                    id="unit" 
                                    class="form-control" 
                                    name="unit" 
                                    style="background-color:#2F2F2F; border: 1px solid #f39c12;" placeholder="unit" >
                                    <option value="select">
                                        Select Unit</option>
                                    <option value="Pack">
                                       Pack</option>
                                    <option value="Piece">
                                        Piece</option>
                                    <option value="Weight">
                                        Weight</option>
                                    </select></td>                                      

                                    <!-- <td scope="col"></td> -->
                                    <td scope="col"><input 
                                    type="number"
                                    name="itemTotal" 
                                    id="itemTotal" 
                                    class="form-control"
                                    placeholder="itemTotal" 
                                    style="border-color:#f39c12; background-color:#2F2F2F;"
                                    readonly></td> 
                                                                                                        
                                                                        
                                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- <center> -->
                    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <input 
                type="number"
                name="discount" 
                id="discount" 
                class="form-control mb-3"
                placeholder="Discount" 
                oninput="validateDiscount(this.value)"
                style="border-color:#f39c12"
            >

            <input 
                type="number"
                name="profit"
                placeholder="Profit"  
                class="form-control mb-3"
                style="border-color:#f39c12"
            >

            <input 
                type="number" 
                name="preBal" 
                placeholder="0.00" 
                class="form-control mb-3" 
                style="border-color:#f39c12; background-color:#2F2F2F;" 
                readonly
                step="0.01"
            >

            <input 
                type="number"
                name="balance" 
                placeholder="Balance" 
                class="form-control mb-3"
                style="border-color:#f39c12; background-color:#2F2F2F;"
            >

            <input 
                type="number"
                name="BillPaid" 
                id="BillPaid" 
                placeholder="Bill Paid" 
                oninput="validateInputs(this.value, 'BillPaid')"
                class="form-control mb-3"
                style="border-color:#f39c12"
            >
        </div>
    </div>
</div>

                <!-- </center> -->


                        <div
                            style="text-align:center; margin-top:30px ; background-color:#191C24; padding-top:0; margin-top:0; padding-bottom:25px">
                            <button type="submit" id="" name="create" class="btn btn-primary"
                                style="background-color: #f39c12;">CREATE</button>
                        </div>

                    </form>

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


    <?php if (isset($_GET['error'])) {
    ?>
    <script>
        swal({
            title: "<?php echo $_GET['error'] ?>",
            text: "You enterd value is incorrect!",
            icon: "error",
            button: "Ok!",

        });
    </script>
    <?php
    }
    ?>

<script>
    // Check if success message is present in session variable
    <?php if (isset($_SESSION['success_message'])) : ?>
        swal({
            title: "Success!",
            text: "<?php echo $_SESSION['success_message']; ?>",
            icon: "success",
            button: "Ok!",
        });

        // Clear the success message from session variable
        <?php unset($_SESSION['success_message']); ?>
    <?php endif; ?>
</script>



<script>
   

    function validateDiscount(value) {
        var orderAmoValue = parseFloat(document.getElementById("proPriceSelect").value);
        var discountInput = document.getElementById("discount");
        var discountValue = parseFloat(value);

        if (isNaN(orderAmoValue) || isNaN(discountValue)) {
            return; // Exit if values are not numbers
        }

        if (discountValue >= orderAmoValue) {
            discountInput.value = ''; // Reset discount input value
            alert("Discount should be less than Order Amount");
        }
    }
   
 
</script>






       <!-- Template Javascript -->
        <script src="js/main.js"></script>


        <script>
    $(document).ready(function() {
    var selectedCustomer = '';
    var selectedProduct = '';

    $('#customerSelect').change(function() {
        selectedCustomer = $(this).val();
        console.log(selectedCustomer);
        displaySelectedItems();
    });

    $('#productSelect').change(function() {
        selectedProduct = $(this).val();
        console.log(selectedProduct);
        displaySelectedItems();
    });

    function displaySelectedItems() {
        $('#selectedItems').empty();
        if (selectedCustomer !== '') {
            $('#selectedItems').append('<li>' + selectedCustomer + '</li>');
        }
        if (selectedProduct !== '') {
            $('#selectedItems').append('<li>' + selectedProduct + '</li>');
        }
    }
});


        </script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function () {
    $('#productSelect').on('change', function () {
        var proID = $(this).val();

        // AJAX call to fetch proPrice based on selected ProID
        $.ajax({
            url: 'get_pro_price.php', // Replace with the PHP file to handle this request
            type: 'POST',
            data: { ProID: proID },
            success: function (response) {
                // Clear existing options
                $('#proPriceSelect').empty();

                // Add received price as an option
                if (response !== "") {
                    $('#proPriceSelect').append($('<option>', {
                        value: response,
                        text: response // You can modify text here as needed
                    }));
                } else {
                    // Handle empty response or error
                    $('#proPriceSelect').append($('<option>', {
                        value: "",
                        text: "Price not available"
                    }));
                }
            },
            error: function () {
                console.log('Error occurred while fetching proPrice.');
                $('#proPriceSelect').empty().append($('<option>', {
                    value: "",
                    text: "Error fetching price"
                }));
            }
        });
    });
});

</script>


<script>
    $(document).ready(function () {
    $('#customerSelect').on('change', function () {
        var cusID = $(this).val();

        // AJAX call to fetch the previous balance based on selected Customer ID
        $.ajax({
            url: 'get_previous_balance.php', // Replace with the PHP file to handle this request
            type: 'POST',
            data: { CusID: cusID },
            success: function (response) {
                var preBalInput = $('input[name="preBal"]');
                preBalInput.val(response);

                // Check if the balance is negative and add text accordingly
                if (parseFloat(response) > 0) {
                    preBalInput.val(response); // Appends 'Payment: ' text to negative balance
                }
            },
            error: function () {
                console.log('Error occurred while fetching previous balance.');
            }
        });
    });
});

</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#proPriceSelect, #quantity').on('input', function() {
            var proSalePrice = parseFloat($('#proPriceSelect').val());
            var quantity = parseInt($('#quantity').val());

            if (!isNaN(proSalePrice) && !isNaN(quantity)) {
                var itemTotal = proSalePrice * quantity;
                $('#itemTotal').val(itemTotal.toFixed(2));
            } else {
                $('#itemTotal').val('');
            }
        });
    });
</script>









        <!-- Employee pannel -->
        <?php
        } else if ($_SESSION['role'] === 'Employee') {
            include('C:/xampp/htdocs/OUSL/Project/src/Employee/newSale.php');
        }
        ?>
        
</body>

</html>

<?php
} else {
    header("Location: ../Login.php");
    exit();
}
?>