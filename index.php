<?php
session_start();
if(!isset($_SESSION['username'])){
  header('Location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Store Management System</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>
    
      <div class="logo">
        <h2><a href="index.php" class="heading">Store Management System</a></h2>
        <div>
          <span>Welcome: <?php echo $_SESSION['username'] ?></span>
          <span><a href="logout.php" class="heading">Logout</a></span>
        </div>
      </div>
      <nav class="nav--bar">
        <ul class="features">
          <li class="nav__item">
            <a href="insert-form.php" class="nav__link">Insert Items</a>
          </li>
          <li class="nav__item">
            <a href="display-items.php" class="nav__link">Display Items</a>
          </li>
          <li class="nav__item">
            <a href="signupform.php" class="nav__link">SignUp User</a>
          </li>
          <li class="nav__item">
            <a href="displayuser.php" class="nav__link">Display User</a>
          </li>
          <li class="nav__item"><a href="#" class="nav__link">Purhcase</a></li>
          <li class="nav__item"><a href="#" class="nav__link">Sale</a></li>
          <li class="nav__item">
            <a href="#" class="nav__link">Display Purchase Data</a>
          </li>
          <li class="nav__item"><a href="#" class="nav__link">Stock</a></li>
        </ul>
      </nav>
   
  
