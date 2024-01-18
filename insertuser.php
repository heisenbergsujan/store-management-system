<?php
 include "DBConnection.php";
 $userName= $_POST['username'];
 $password = $_POST['password'];

 $hasedpassword = md5($password);
 
 $insertuserquery = "INSERT INTO users(username,password,status) VALUES('$userName','$hasedpassword', 'pending')";
 $result = mysqli_query($connection,$insertuserquery);
 if($result){
    echo "user inserted successfully";
 }
 
?>