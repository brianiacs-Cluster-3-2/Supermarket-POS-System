<?php
ob_start();
include("./Connection/Sup_Disp_Conn.php");


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    
    // start transaction
    mysqli_autocommit($conn, FALSE);
    
    // delete related records from product table
    $sql = "DELETE FROM `purchase` WHERE PurID = $id";
    $result = mysqli_query($conn, $sql);
    

    if ($result) {
        // commit transaction
        mysqli_commit($conn);
        
        header('location:Pur_Display.php');
        ob_end_flush();
    } else {
        // rollback transaction on error
        mysqli_rollback($conn);
        
        die(mysqli_error($conn));
    }
} else {
    header('location:Purchase_form.php');
    ob_end_flush();
}
