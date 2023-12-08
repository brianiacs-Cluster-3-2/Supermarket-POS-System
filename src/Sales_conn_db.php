<?php
session_start();
include 'connection/Sup_Disp_Conn.php';

if (isset($_POST['createFromDisplay'])) {
    header('Location: Sales_form.php');
    exit();
}

if (isset($_POST['create']) && isset($_SESSION['id'])) {
    $userID = intval($_SESSION['id']);
    $CusID = $_POST['CusID'];
    $ProID = $_POST['ProID'];
    $balance = (float)$_POST['balance'];
    $ProSalePrice = (float)$_POST['ProSalePrice']; // Ensure this corresponds to the actual field name
    $BillPaid = (float)$_POST['BillPaid'];
    $profit = $_POST['profit'];
    $unit = $_POST['unit'];
    $preBal = (float)$_POST['preBal'];
    $discount = (float)$_POST['discount'];
    $date = date('Y-m-d');

    $quantity = $_POST['quantity'];
    $itemTotal = $quantity * $ProSalePrice;
    
    if ($preBal > 0) {
        if ($discount > 0) {
            $calDisc = $itemTotal - $discount;
            $tot = $BillPaid + $preBal;
            $balance = $tot - $calDisc;
        } else {
            $tot = $BillPaid + $preBal;
            $balance = $tot - $itemTotal;
        }

    }else{
        if ($discount > 0) {
            $calDisc = $itemTotal - $discount;
            $balance = $preBal - $calDisc ;
            // $balance = $tot - $calDisc;
        } else {
            $balance = $BillPaid - $itemTotal;
        }
    }

    



    
    
    if ($ProID == "Selct" || $CusID == "Selct" || empty($userID || $unit == "select")) {
        header("Location: Sales_form.php");
        exit();
    } else {
        $sql = "INSERT INTO sales (UserID, CusID, ProID, balance, ProSalePrice, BillPaid, profit, date, preBal, discount, quantity, itemTotal, unit) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("iiiddiisiiids", $userID, $CusID, $ProID, $balance, $ProSalePrice, $BillPaid, $profit, $date, $preBal, $discount, $quantity, $itemTotal, $unit);
            
            if ($stmt->execute()) {
                $_SESSION['success_message'] = "Record inserted successfully!";
                header("Location: Sales_Display.php");
                exit();
            } else {
                header("Location: Sales_form.php?error=Error executing the query!");
                exit();
            }
            $stmt->close();
        } else {
            header("Location: Sales_form.php?error=Error in prepared statement!");
            exit();
        }
    }
} else {
    header("Location: Sales_form.php");
    exit();
}
?>
