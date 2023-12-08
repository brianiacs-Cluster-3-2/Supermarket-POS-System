<!-- Created design for purchase update view -->

<?php
include("./Connection/Sup_Disp_Conn.php");

$id = $_GET['updateid'];
$sql = "SELECT P.PurID, P.ProID, P.ProName, P.PurPrice, P.Quantity, P.Unit, P.PerPack, P.ItemTotal, P.SupID, S.SupName AS SupName
FROM `purchase` AS P 
INNER JOIN `supplier` AS S ON P.SupID = S.SupID 
WHERE PurID = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$PurID = $row['PurID'];
$ProID = $row['ProID'];
$ProName = $row['ProName'];
$PurPrice = $row['PurPrice'];
$Quantity = $row['Quantity'];
$Unit = $row['Unit'];
$PerPack = $row['PerPack'];
$ItemTotal = $row['ItemTotal'];
$SupID = $row['SupID'];
$SupName = $row['SupName'];

if (isset($_POST['create'])) {
    // Sanitize and validate input values
    $SupID = mysqli_real_escape_string($conn, $_POST['supidd']);
    $pro_name = mysqli_real_escape_string($conn, $_POST['pro_name']);
    $pur_price = (float)$_POST['pur_price'];
    $quantity = (float)$_POST['quantity'];
    $unit = mysqli_real_escape_string($conn, $_POST['unit']);
    $PerPack = (float)$_POST['PerPack'];
    $ProID = mysqli_real_escape_string($conn, $_POST['GetProID']);
    $ItemTotal = $pur_price * $quantity;
    $PurID = $row['PurID'];

    // Validation: Check if input values are valid before updating
    if (!empty($SupID) && !empty($pro_name) && $pur_price > 0 && $quantity > 0 && !empty($unit) && $PerPack > 0 && !empty($ProID)) {
        // Construct and execute the query
        $sql = "UPDATE `purchase` 
                SET SupID=$SupID, ProName='$pro_name', PurPrice=$pur_price, Quantity=$quantity,
                Unit='$unit', PerPack=$PerPack, ProID=$ProID, ItemTotal=$ItemTotal
                WHERE PurID=$PurID";

        if (mysqli_query($conn, $sql)) {
            header('Location: Pur_Display.php');
            exit();
        } else {
            header('Location: Pur_update.php?updateid=' . $PurID);
            exit();
        }
    } else {
        header('Location: Pur_update.php?updateid=' . $PurID);
        exit();
    }
}

// Close the database connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../images/logo.png" rel="shortcut icon">
    <title>Supplier Update</title>
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
    <link  rel="stylesheet" href="./css/style.css">
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
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Akthar Farvees</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="../home.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file me-2" aria-"true"></i>New Sales</a>                     -->
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
                            <a href="Sup_Display.php" class="dropdown-item">Products List</a>
                            <a href="Search_pro.php" class="dropdown-item">Search Products</a>
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
                            <img class="rounded-circle me-lg-2" src="img/PP.jpg" alt="" style="width: 40px; height: 40px;">
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

                    <h3>Purchase Update</h3>
<!-- 

                    <form method="post" action="" class="form mb-5">
                    </form> -->

                    <form action="" method="POST">
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
                                        <th scope="col">Purchase ID</th>
                                        <th hidden scope="col">Supplier Name</th>
                                        <th scope="col">Supplier ID</th>
                                        <th scope="col">Company Name</th>
                                        <th hidden scope="col">Supplier</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Purchase Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Unit</th>
                                        <th scope="col">Per Pack</th>
                                        <th scope="col">Item Total</th>

                                    </tr>
                                </thead>
                                <tbody>
                    <tr>

                    <td>
                    <div id="lab">
                                                <input  disabled type="text" class="form-control" name="PurID" value="<?php echo $PurID ?>"
                                                    style=" background-color: #2F2F2F;border-color:#f39c12 ">
                                            </div>
                    </td>
                                                    
                                     <div id="lab">
                                                <input hidden disabled type="text" class="form-control" name="" id="SupID" value="<?php echo $SupName ?>"
                                                    style=" background-color: #2F2F2F;border-color:#f39c12 ">
                                            </div>
                    

                    <td>
                    <div id="lab">

                            <select style="background-color: #0D0C11; color:white; border-color:#f39c12" name=""
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

                           
                        </div>
</td>
                   
                     
<td>
<div id="lab">
                            <input id="SupName" disabled type="text" class="form-control" name="PurName"
                                placeholder="Supplier Name" style=" background-color: #2F2F2F;border-color:#f39c12 ">
                        </div>
</td>
                       

                                    <!-- <tr> -->

                                        <!--  item start -->

                                        <input hidden type="text" class="form-control" id="supidd" name="supidd"
                                            placeholder="Supplier ID" style="border-color:#f39c12">

                                            <input hidden type="text" id="GetProID" name="GetProID" placeholder="Another Input Field">

                                        <!-- Hiddn item end -->

                                        <td>
                                            <select style="background-color: #0D0C11; color:white; border-color:#f39c12"
                                                id="pro_name" name="pro_name" class="form-control">
                                                <option selected value="" style="background-color: white; color:black"><?php echo $ProName?></option>
                                            </select>
                                        </td>


                                        <td><input type="number" id="pur_price-0" class="form-control" name="pur_price"value="<?php echo $PurPrice?>"
                                                style="border-color:#f39c12"></td>
                                        <td><input type="number" id="quantity-0" class="form-control" name="quantity"value="<?php echo $Quantity?>"
                                                style="border-color:#f39c12"></td>
                                        <td>
                                            <select class="form-control" name="unit"
                                                style="border-color:#f39c12; background-color:black">
                                                <option value="Pack">Pack</option>
                                                <option value="Piece">Piece</option>
                                                <option value="Weight">Weight</option>
                                            </select>
                                        </td>
                                        <td><input id="intborder" type="number" class="form-control"
                                                name="PerPack" value="<?php echo $PerPack?>" placeholder=""></td>
                                        <td><input type="number" id="total-0" class="form-control" name="ItemTotal"
                                                disabled 
                                                style="border-color:#f39c12; background-color: #2F2F2F;"></td>
                                     
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Save button for input feild -->
                        <button type="submit" id="intborder" name="create" class="btn btn-primary" style="margin-bottom:40px; background-color: #f39c12;">UPDATE</button>



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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


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



<script>
    // Get references to the input fields
const purPriceInput = document.getElementById('pur_price-0');
const quantityInput = document.getElementById('quantity-0');
const itemTotalInput = document.getElementById('total-0');

// Add event listeners to the input fields
purPriceInput.addEventListener('input', calculateTotal);
quantityInput.addEventListener('input', calculateTotal);
itemTotalInput.addEventListener('input', calculateTotal);

// Function to calculate total
function calculateTotal() {
    const purPrice = parseFloat(purPriceInput.value) || 0;
    const quantity = parseFloat(quantityInput.value) || 0;
    // const perPack = parseFloat(perPackInput.value) || 0;

    const total = purPrice * quantity; // Calculate the total based on the inputs
    itemTotalInput.value = total.toFixed(2); // Set the calculated total in the 'ItemTotal' field
}

</script>

</body>

</html>