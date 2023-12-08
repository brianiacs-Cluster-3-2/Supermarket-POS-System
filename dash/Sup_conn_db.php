<?php
include 'connection/Sup_Disp_Conn.php';

if(isset($_POST['create'])){
    $SupID = $_POST['SupID'];
    $SupName = $_POST['SupName'];
    $SupAddress = $_POST['SupAddress'];
    $SupBalanace = $_POST ['SupBalanace'];

    $sql = "INSERT INTO `supplier` (SupID,SupName,SupAddress,SupBalanace)
    VALUES ($SupID,'$SupName','$SupAddress',$SupBalanace)";
    $result = mysqli_query($conn,$sql);

    if(!$result){
        echo "Error";
    }else{
        header('Location:Sup_Display.php');
        exit();
    }   
}


?>
