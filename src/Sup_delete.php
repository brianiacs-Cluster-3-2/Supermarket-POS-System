<?php
ob_start();
include("./Connection/Sup_Disp_Conn.php");

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    
    // start transaction
    mysqli_autocommit($conn, FALSE);
    
    // delete related records from product table
    $sql_product = "DELETE FROM `product` WHERE SupID = $id";
    $result_product = mysqli_query($conn, $sql_product);
    
    // delete record from supplier table
    $sql_supplier = "DELETE FROM `supplier` WHERE SupID = $id";
    $result_supplier = mysqli_query($conn, $sql_supplier);

    if ($result_product && $result_supplier) {
        // commit transaction
        mysqli_commit($conn);
        
        header('location:Sup_Display.php');
        ob_end_flush();
    } else {
        // rollback transaction on error
        mysqli_rollback($conn);
        
        die(mysqli_error($conn));
    }
} else {
    header('location:supplier.php');
    ob_end_flush();
}
