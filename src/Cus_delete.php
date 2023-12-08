<?php
ob_start();
include 'Cus_Display.php';
include ('./Connection/Sup_Disp_Conn.php');


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `customer` WHERE CusID = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "deteleted Pass";
        header('location:Cus_Display.php');
        ob_end_flush();
    } else {
        die(mysqli_error($conn));
    }
}
