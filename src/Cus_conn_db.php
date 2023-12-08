<?php

include ("./Connection/Sup_Disp_Conn.php");

if (isset($_POST['createFromDisplay'])) {
    header('Location: Customer_form.php');
}



if (isset($_POST['create'])) {
    // $empID = $_POST['empID'];
    $CusName = $_POST['CusName'];
    $CusAddress = $_POST['CusAddress'];
    $CusBalanace = $_POST['CusBalanace'];
    $CusEmail = $_POST['CusEmail'];
    $CusMobile = $_POST['CusMobile'];


    // if (empty($empID)) {
    //     header("Location: Customer_form.php?error=Emplyee ID is required!");
    //     exit();}
    if(empty($CusName)) {
        header("Location: Customer_form.php?error=Customer Name is required!");
        exit();
    } else if (empty($CusAddress)) {
        header("Location: Customer_form.php?error=Customer Address is required!");
        exit();
    } else if (empty($CusBalanace)) {
        header("Location: Customer_form.php?error=Customer Balance is required!");
        exit();
    } else if (empty($CusEmail)) {
        header("Location: Customer_form.php?error=Customer Email is required!");
        exit();
    }else if (empty($CusMobile)) {
        header("Location: Customer_form.php?error=Customer Mobile is required!");
        exit();
    }  
    else {

        $sql = "INSERT INTO `customer` (CusName,CusAddress,CusBalanace,CusEmail,CusMobile)
    VALUES ('$CusName','$CusAddress',$CusBalanace,'$CusEmail','$CusMobile')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error";
        } else {
            header("Location: Cus_Display.php?success=A New Customer is Added Successfully!");
            exit();
        }
    }


}


?>
