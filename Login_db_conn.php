<?php
session_start();
include "db_conn.php";
if(isset($_POST['username']) && isset($_POST['username']) && isset($_POST['role'])){
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $role = validate ($_POST['role']);
    $username = validate ($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username))
    {
        header("Location: login.php?error=Username is required!");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required!");
        exit();
    }else{

        //Hashing the password
        $password = md5($password);
        
        $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            
            if($row['password'] === $password && $row['role'] === $role){
                
                $_SESSION['name'] = $row['name'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];

                header('Location: home.php');

                exit();
            }else{
                header("Location: login.php?error=Incorect user role or password!");
                 exit();
            }
           

        }else{
            header("Location: login.php?error=Incorect username or password!");
             exit();
        }
    }

}else{
    header("Location: Login.php");
    exit();
}

?>