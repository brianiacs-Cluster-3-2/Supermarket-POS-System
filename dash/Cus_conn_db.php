<?php

$host = "localhost";
$user = "root";
$pass =  "";
$db = "example";

$conn =  mysqli_connect($host, $user, $pass, $db, 3308);

if (!$conn) {
    echo "Connectin fail";
}



if(isset($_POST['create'])){
    // $CusID = $_POST['CusID'];
    $CusName = $_POST['CusName'];
    $CusAddress = $_POST['CusAddress'];
    $CusBalanace = $_POST ['CusBalanace'];
    $CusEmail = $_POST ['CusEmail'];
    $CusMobile = $_POST ['CusMobile'];

    $sql = "INSERT INTO `customer` (CusName,CusAddress,CusBalanace,CusEmail,CusMobile)
    VALUES ('$CusName','$CusAddress',$CusBalanace,'$CusEmail','$CusMobile')";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        echo "Error";
    }else{
        header('Location:Cus_Display.php');
        exit();
    }   
}


?>
