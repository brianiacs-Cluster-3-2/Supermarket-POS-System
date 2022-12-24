<?php
include 'connection/Pro_Disp_conn.php';


    if(isset($_POST['create'])){
        $SupName = $_POST['SupName'];
        $SupID = $_POST['SupID'];
        $ProName = $_POST['ProName'];
        $ProPurchasePrice = $_POST['ProPurchasePrice'];
        $ProSalePrice = $_POST ['ProSalePrice'];
        // $ProStock = $_POST ['ProStock'];
        $ProPerPack = $_POST ['ProPerPack'];
                    
        
       if(empty($ProName)){
        header("Location: Product_form.php?error=Product Name is required!");
        exit();}
    else if(empty($ProPurchasePrice)){
        header("Location: Product_form.php?error=Product Purchase Price is required!");
        exit();}
    else if(empty($ProSalePrice)){
        header("Location: Product_form.php?error=Product Sale   Price is required!");
        exit();}
    else if(empty($ProPerPack)){
        header("Location: Product_form.php?error=Product Per Pack is required!");
        exit();
    }else{
        
        $sql = "INSERT INTO `product` (SupID ,ProName,ProPurchasePrice,ProSalePrice,ProPerPack)
        VALUES ($SupID ,'$ProName',$ProPurchasePrice,$ProSalePrice,$ProPerPack)";
        $result = mysqli_query($conn,$sql);
                
        if(!$result){
         echo "Error";
        }else{
          // header('Location:Sup_Display.php');
          
          header("Location: Pro_Display.php?success=A New Product is Added Successfully!");
          exit();
        
        }   
                
        }


        


    }

?>