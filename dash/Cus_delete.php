<?php
ob_start();
include 'Cus_Display.php';

$host = "localhost";
$user = "root";
$pass =  "";
$db = "example";

$conn =  mysqli_connect($host, $user, $pass, $db, 3308);

if (!$conn) {
    echo "Connectin fail";
} else {
    echo "pass";
}

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
