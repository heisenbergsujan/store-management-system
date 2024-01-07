<?php

$servername="localhost";
$username="root";
$password="";
$dbname ="inventory";
    $connection= mysqli_connect($servername,$username,$password);
    
    $dbname=mysqli_select_db($connection,$dbname);
    

  ?>