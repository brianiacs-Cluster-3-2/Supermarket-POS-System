<?php
ob_start();
include 'Sup_Display.php';

$host = "localhost";
$user = "root";
$pass =  "";
$db = "brainiacs pos";

$conn =  mysqli_connect($host, $user, $pass, $db, 3308);

if (!$conn) {
    echo "Connectin fail";
} else {
    echo "pass";
}

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `product` WHERE ProID = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "deteleted Pass";
        header('location:pro_list.php');
        ob_end_flush();
    } else {
        die(mysqli_error($conn));
    }
}
