<?php
include "DBConnection.php";
$id=$_GET['id'];
$activate_pending = "UPDATE  users SET status='Activated' WHERE id=$id";
$result = mysqli_query($connection,$activate_pending);
if($result){
    include "displayuser.php";
}
?>