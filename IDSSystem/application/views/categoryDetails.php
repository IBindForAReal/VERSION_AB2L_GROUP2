<!--
Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="name" name="categoryName" placeholder='<?php echo $details[0]['category_name']; ?>'><br />
-->
Category: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="name" name="categoryName" value='<?php echo $details[0]['category_name']; ?>' disabled="disabled"><br />
Description: &nbsp;<input type="name" name="categoryDesc" placeholder='<?php echo $details[0]['category_description']; ?>'>
<input type="submit" name="editCategory" value="SAVE CHANGES">