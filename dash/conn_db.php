<?php
include 'BusinessInfo.php';
    $host = "localhost";
    $user = "root";
    $pass =  "";
    $db = "example";

    $conn =  mysqli_connect($host, $user,$pass, $db,3308);

    if (!$conn) {
       echo "Connectin fail";
    }
   
    if(isset($_POST['submit'])){

        $BusinessName = $_POST['BusinessName'];
        $TagLine = $_POST['TagLine'];
        $BusinessAddress = $_POST ['BusinessAddress'];
        $Mobile = $_POST['Mobile'];
        $Email = $_POST['Email'];
        $website = $_POST['website'];

        $sql = "INSERT INTO `business_info` (BusinessName,TagLine,BusinessAddress,Mobile,Email,Website) 
        VALUES('$BusinessName','$TagLine','$BusinessAddress','$Mobile','$Email','$website')"; 

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "Data inserted successfully";
        }else{
            die( "Connectin fail");
        }


    }


?>


