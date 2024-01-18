<?php
include "DBConnection.php";
$id=$_POST["id"];
$item_name=$_POST['itemName'];
$price=$_POST['price'];
$image=$_POST['photo'];
$remarks=$_POST['remarks'];

$updatequery = "UPDATE items SET item_name='$item_name',rate='$price',photo='$image',remarks='$remarks' WHERE id = $id";

$updateresult = mysqli_query($connection,$updatequery);

if($updateresult) include("display-items.php");

?>