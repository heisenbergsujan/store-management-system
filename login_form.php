<?php
$username="";
$password="";
if(isset($_COOKIE["username"],$_COOKIE["password"])){
   $username=$_COOKIE["username"];
   $password = $_COOKIE["password"];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Login</title>
  </head>
  <body>
    <div class="form-container">
    <form action="login.php" class="login-form" method="POST">
        <h2 class="wrap">Login Into Store Management System? </h2>
      <div class="login-form__username">
        <label>Username:</label>
        <input type="text" name="username" value="<?php echo $username?>"/>
      </div>
      <div class="login-form__password">
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $password?>"/>
      </div>
      
      <div class="remember--user">

        <input type="checkbox" name="remember--me">
        <label for="remember--me">Remember me?</label>
      </div>
      
      <div class="submit-form">
        <button class="login--btn">Login</button>
         
      </div>
    </div>
    </form>
    <!-- <script type="text/javascript">
    $(document).ready(function(){
        $(".login--btn").click(function(e){
            e.preventDefault();
            const data = $(".login-form").serializeArray();
            console.log(data);
            $.ajax({
                url:"login.php",
                method:"post",
                data:data,
                beforeSend:function(){
                    $(".form-container").empty();
                    $(".form-container").html('<div class="loader"></div>');
                },
                success:function(response){
                    $(".form-container").empty();
                    $(".form-container").html(response);
                },
                error:function(error){
                    alert(error);
                }
            })
        })
    })
</script> -->
  </body>
  </html>
