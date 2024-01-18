<?php
include 'index.php';
?>
<main class="main-container">
    <form action="" method="POST" class="signup__form">
        <h2>Signup Form</h2>
        <label for="username">Username:</label>
        <input type="text" name="username">

        <label for="password">Password:</label>
        <input type="password" name="password">

        <div>

            <button  class="buttons submit--btn">Submit</button>
            <button  class="buttons delete--btn">Clear</button>
        </div>
    </form>
</main>
<script type="text/javascript">
    $(document).ready(function(){
        $(".submit--btn").click(function(e){
            e.preventDefault();
            const data = $(".signup__form").serializeArray();
            console.log(data);
            $.ajax({
                url:"insertuser.php",
                method:"post",
                data:data,
                beforeSend:function(){
                    $(".main-container").empty();
                    $(".main-container").html('<div class="loader"></div>');
                },
                success:function(response){
                    $(".main-container").empty();
                    $(".main-container").html(response);
                },
                error:function(error){
                    alert(error);
                }
            })
        })
    })
</script>
</body>
</html>
