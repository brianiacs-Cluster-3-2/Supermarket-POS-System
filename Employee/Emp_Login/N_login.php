<?php
session_start();
include "db_conn.php";
if(isset($_POST['username']) && isset($_POST['username'])){
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $user = validate ($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($user))
    {
        header("Location: login.php?error=Username is required!");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required!");
        exit();
    }else{
        $sql = "SELECT * FROM emp_login WHERE user='$user' AND pass='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if($row['user'] === $user && $row['pass'] === $pass){
                $_SESSION['user'] = $row['user'];
                $_SESSION['pass'] = $row['pass'];
                $_SESSION['ID'] = $row['ID'];
                header("Location: ../blank.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect username or password!");
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