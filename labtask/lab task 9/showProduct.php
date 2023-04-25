<?php  
require_once 'controller/productInfo.php';

$Product = fetchProduct($_GET['id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title><style>
	table,td,th{
			border:3px solid purple;
			padding:5px;
			border-collapse: collapse;
		}</style>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>buying</th>
		<th>selling</th>
		<th>quantity</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $Product['ID'] ?>"><?php echo $Product['Name'] ?></a></td>
		<td><?php echo $Product['buying'] ?></td>
		<td><?php echo $Product['selling'] ?></td>
		<td><?php echo $Product['quantity'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $Product['image'] ?>" alt="<?php echo $Product['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>