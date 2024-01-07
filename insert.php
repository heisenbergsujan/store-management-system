<?php
 if(!isset($_POST["itemName"],$_POST["price"])) return;

 $itemname=htmlspecialchars($_POST["itemName"]);
 $price=htmlspecialchars($_POST["price"]);
 $image = htmlspecialchars($_POST["photo"]);
 $remarks = htmlspecialchars($_POST["remarks"]);

 include "DBConnection.php";
 if(!$connection && !$dbname) return;

 $query = "INSERT INTO items (item_name,rate,photo,remarks)
          VALUES('$itemname','$price','$image','$remarks')";

  $result = mysqli_query($connection,$query);
 
include "insert-form.php";
  
  mysqli_close($connection);
?>