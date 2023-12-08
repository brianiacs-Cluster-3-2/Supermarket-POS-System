<?php
include "./Connection/Sup_Disp_Conn.php";


if (isset($_POST['createFromDisplay'])) {
    header('Location: Purchase_form.php');
}

// Fetch products based on the selected supplier ID
if (isset($_GET['supplier_id'])) {
    $supplierId = $_GET['supplier_id'];

    // Fetch products based on the selected supplier from the database
    $query = "SELECT * FROM `product` WHERE SupID = $supplierId";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $products = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $products[] = $row;
        }
        // Return products as JSON response
        header('Content-Type: application/json');
        echo json_encode($products);
        exit(); // Terminate script execution after sending JSON response
    } else {
        http_response_code(500); // Set proper HTTP error code
        echo json_encode(array('error' => 'Failed to fetch products'));
        exit(); // Terminate script execution after sending JSON response
    }
}

// Insert data into the database (POST request)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
    $SupID = $_POST['supidd'];
    $pro_name = $_POST['pro_name'];
    $pur_price = (float)$_POST['pur_price'];
    $quantity = (float)$_POST['quantity'];
    $unit = $_POST['unit'];
    $PerPack = $_POST['PerPack'];
    $ProID = $_POST['GetProID'];
    
    $itemTotal = $quantity * $pur_price;

    if(empty($SupID) || empty($ProID) || empty($pro_name) || empty($pur_price) || empty($quantity) || empty($unit) || empty($PerPack)) {
        header("Location: Purchase_form.php");
        exit();
    }

    // Prepare the SQL statement using a prepared statement
    $stmt = $conn->prepare("INSERT INTO `purchase` (SupID, ProName, PurPrice, Quantity, Unit, PerPack, ItemTotal, ProID) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters to the prepared statement
    $stmt->bind_param("isddssid", $SupID, $pro_name, $pur_price, $quantity, $unit, $PerPack, $itemTotal, $ProID);

    // Execute the prepared statement
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Redirect if the insertion was successful
        header("Location: Pur_Display.php?Done=Successfully Saved Data!");
        exit();
    } else {
        // Redirect if an error occurred during insertion
        header("Location: Purchase_form.php");
        exit();
    }

    // Close the prepared statement
    $stmt->close();
} else {
    header("Location: Purchase_form.php");
    exit();
}




?>
