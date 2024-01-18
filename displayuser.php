<?php
include "index.php";


if($_SESSION['username']!='admin'){
    die("<div class='main-container'>Only admin has access to this page</div>");
}

?>
<main class="main-container">
    <div>
        <h1>User Details</h1>
        <table border="1" border-collapse="collapse">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php include "DBConnection.php";
            $selectuserquery = "SELECT id,username,status FROM users";
            $result = mysqli_query($connection,$selectuserquery);
            while($userrow = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $id=$userrow['id'];
                echo "<tr>";
                foreach($userrow as $userkey => $uservalue){
                    echo "<td>$uservalue</td>";
                }
                echo "<td><a href='activate.php?id=$id' class='btn submit--btn'>Activate</a>&nbsp;<a href='suspend.php?id=$id' class='btn delete--btn'>Suspend</a><td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</main>