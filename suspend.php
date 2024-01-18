<?php
include "DBConnection.php";
$id=$_GET['id'];
$suspend_pending = "UPDATE  users SET status='Suspended' WHERE id=$id";
$result = mysqli_query($connection,$suspend_pending);
if($result){
    include "displayuser.php";
}
?>