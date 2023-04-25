
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid rosybrown;
			padding:25px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

<br>
<br>
<br>
<table>

		<tr>
			<th>User_id</th>
			<th>p_name</th>
			<th>Action</th>
		</tr>
	
	<tbody>
		<?php foreach ($allSearchedProduct as $i => $user): ?>
			<tr>
			<b><td><a href="../showProduct.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
				<td><?php echo $user['Name'] ?></td></b>
				<td><a href="../editProduct.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp &nbsp<a href="deleteProduct.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>