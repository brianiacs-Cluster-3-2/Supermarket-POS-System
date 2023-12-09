<?php

    $host = "localhost";
    $user = "root";
    $pass =  "";
    $database = "brainiacs pos";
    $port = 3308

    $conn =  mysqli_connect($host, $user,$pass, $database,$port);

    if (!$conn) {
       echo "Connection fail";
    }

?>
