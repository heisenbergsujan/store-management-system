<?php
  include("index.php");
  $id=$_GET["id"];
  include("DBConnection.php");
  $selectquery= "SELECT * FROM items WHERE id=$id";
  $selectresult = mysqli_query($connection,$selectquery);

  $dataitem = mysqli_fetch_array($selectresult,MYSQLI_ASSOC);

//   print_r($dataitem);
  ?>
<main class="main-container">
  <form action="updateitem.php" method="POST" class="insert__item--form">
      <h2 class="form--heading">Update Item details</h2>
       
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      
      <label for="itemName" class="label--name">Item Name:</label>
      <input type="text" name="itemName" value="<?php echo $dataitem["item_name"];?>" class="input--name"/>
      
    
    
      <label for="price" class="label--price">Price:</label>
      <input type="text" name="price" value="<?php echo $dataitem["rate"];?>" class="input--price"/>
      
 
    
      <label for="photo" class="label--photo">Photo:</label>
      <input type="file" name="photo" id="" class="input--photo"/>
      </div>
      
    
      <label for="remarks" class="label--remarks">Remarks:</label>
      <textarea name="remarks" id="" cols="30" rows="10"><?php echo $dataitem["remarks"]?></textarea>
      

      <div class="insert--form__buttons">
         <button type="submit" class="buttons submit--btn">Update item</button>
         <button type="button" class="buttons clear--btn">Clear</button>
         <button type="submit" class="buttons delete--btn">Delete</button>
      </div>
   
  </form>
</main>
</body>
</html>
