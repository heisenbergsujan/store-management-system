<?php

session_start();
include 'DBConnection.php';
if(isset($_POST['username'],$_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $unencrypted_password = $password;
    $remember_user = $_POST['remember--me'];
    $password = md5($password);
    
    $selectuser = "SELECT * FROM users WHERE username='$username' AND password='$password' AND status='Activated'";
    $result = mysqli_query($connection,$selectuser);
    if($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        if(isset($remember_user)){

            setcookie("username",$username,time()+60);
            setcookie("password",$unencrypted_password,time()+60);
        }

        $_SESSION['username']=$username;
        header("Location:index.php");
    }else{
        echo "wrong user";
    }
    
}
?>