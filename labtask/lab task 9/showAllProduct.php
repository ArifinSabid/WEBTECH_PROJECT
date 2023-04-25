<?php  
require_once 'controller/productInfo.php';

$Product = fetchAllProduct();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
		table,td,th{
			border:2px solid rosybrown;
			padding:5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>buying</th>
			<th>selling</th>
			<th>quantity</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($Product as $i => $Product): ?>
			<tr>
				<td><a href="showProduct.php?id=<?php echo $Product['ID'] ?>"><?php echo $Product['Name'] ?></a></td>
				<td><?php echo $Product['buying'] ?></td>
				<td><?php echo $Product['selling'] ?></td>
				<td><?php echo $Product['quantity'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $Product['image'] ?>" alt="<?php echo $Product['Name'] ?>"></td>
				<td><a href="editProduct.php?id=<?php echo $Product['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?id=<?php echo $Product['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>