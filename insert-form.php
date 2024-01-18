<?php
  include("index.php");
  
  ?>
<main class="main-container">
  <form action="insert.php" method="POST" class="insert__item--form">
      <h2 class="form--heading">Insert Item details</h2>

      
      <label for="itemName" class="label--name">Item Name:</label>
      <input type="text" name="itemName" id="" class="input--name"/>
      
    
    
      <label for="price" class="label--price">Price:</label>
      <input type="text" name="price" id="" class="input--price"/>
      
 
    
      <label for="photo" class="label--photo">Photo:</label>
      <input type="file" name="photo" id="" class="input--photo"/>
     
      
    
      <label for="remarks" class="label--remarks">Remarks:</label>
      <textarea name="remarks" id="" cols="30" rows="10"></textarea>
      

      <div class="insert--form__buttons">
         <button type="submit" class="buttons submit--btn">Add item</button>
         <button type="button" class="buttons clear--btn">Clear</button>
         <button type="submit" class="buttons delete--btn">Delete</button>
      </div>
   
  </form>
</main>
</body>
</html>
