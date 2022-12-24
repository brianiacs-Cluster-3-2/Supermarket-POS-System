<?php
session_start();

if(isset($_SESSION['ID']) && isset($_SESSION['user']))
{



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hello Akthar<?php $_SESSION['user']; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php

}else{
    header("Location: Login.php");
    exit();
}
?>