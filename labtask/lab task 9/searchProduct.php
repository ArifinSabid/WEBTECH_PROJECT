
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "nav.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findProduct.php">
      <h1>SEARCH FOR Product</h1>
      <input type="text" name="p_name" />
      <input type="submit" name="findProduct" value="Search"/>
    </form>


 
  </body>
</html>