<?php
$id=$_GET['id'];

include "DBConnection.php";

$deletequery = "DELETE FROM items WHERE id=$id";
$result = mysqli_query($connection,$deletequery);
if($result) include "display-items.php";
  ?>