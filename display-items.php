<?php include "index.php"; ?>
<main class="main-container">
  <div class="table-content">
  <h1>Items Details</h1>
  <table border="1" border-collapse="collapse">
    <tr>
        <th>ID</th>
        <th>Item-name</th>
        <th>Price</th>
        <th>Photo</th>
        <th>Stock</th>
        <th>Remarks</th>
        <th colspan="2">Action</th>
    </tr>
    <?php 
    include "DBConnection.php";
    $selectquery="SELECT * FROM items";
    $selectresult=mysqli_query($connection,$selectquery);
   while($itemrow=mysqli_fetch_array($selectresult,MYSQLI_ASSOC)){
    $id=$itemrow['id'];
       echo "<tr>";
       foreach($itemrow as $itemkey=>$itemvalue){
            echo "<td>$itemvalue</td>   ";
            
       }
       echo "<td>
             <a href='delete.php?id=$id' class='btn delete--btn' onclick='return confirm(\"Are you sure you want to delete?\")'>Delete</a>
       </td>";
       echo "<td>
       <a href='updateitemform.php?id=$id' class='btn clear--btn'>Edit</a>
       </td>";
       echo "</tr>";  
   }
    ?>
  </table>
  </div>

  </main>
  </body>
  </html>

