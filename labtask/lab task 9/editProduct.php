<?php 

require_once 'controller/productInfo.php';
$Product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $Product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="buying">Buying price:</label><br>
  <input value="<?php echo $Product['buying'] ?>" type="text" id="buying" name="buying"><br>
  <label for="selling">Selling price:</label><br>
  <input value="<?php echo $Product['selling'] ?>" type="text" id="selling" name="selling"><br>
  <label for="quantity">Quantity:</label><br>
  <input value="<?php echo $Product['quantity'] ?>" type="text" id="quantity" name="quantity"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

