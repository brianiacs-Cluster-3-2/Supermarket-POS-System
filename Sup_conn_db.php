<?php
include 'connection/Sup_Disp_Conn.php';

if(isset($_POST['createFromDisplay'])) {
    header('Location: supplier.php');
}


if(isset($_POST['create'])) {
    // $SupID = $_POST['SupID'];
    $SupName = $_POST['SupName'];
    $CompName = $_POST['CompName'];
    $SupAddress = $_POST['SupAddress'];
    $SupBalanace = $_POST['SupBalanace'];
    $SupEmail = $_POST['SupEmail'];
    $SupWebsite = $_POST['SupWebsite'];
    $SupMobile = $_POST['SupMobile'];




    if(empty($SupName)) {
        header("Location: Supplier.php?error=Supplier Name is required!");
        exit();
    } else if(empty($CompName)) {
        header("Location: Supplier.php?error=Company  Name is required!");
        exit();
    } else if(empty($SupAddress)) {
        header("Location: Supplier.php?error=Supplier Address is required!");
        exit();
    } else if(empty($SupEmail)) {
        header("Location: Supplier.php?error=Supplier Email is required!");
        exit();
    } else if(empty($SupMobile)) {
        header("Location: Supplier.php?error=Supplier Mobile is required!");
        exit();
    } else {
        $sql = "INSERT INTO `supplier` (SupName,CompName,SupAddress,SupBalanace, SupEmail,SupWebsite,SupMobile)
            VALUES ('$SupName','$CompName','$SupAddress',$SupBalanace, '$SupEmail', '$SupWebsite','$SupMobile')";

        $result = mysqli_query($conn, $sql);


        if(!$result) {
            echo "Error";
        } else {
            // header('Location:Sup_Display.php');

            header("Location: Sup_Display.php?success=A New Supplier is Added Successfully!");
            exit();

        }

    }



}


?>