<?php
//dbconnection
    $host = "localhost";
    $user = "root";
    $pass =  "";
    $db = "brainiacs pos";

    $conn =  mysqli_connect($host, $user,$pass, $db,3308);

    if (!$conn) {
       echo "Connectin fail";
    }

?>