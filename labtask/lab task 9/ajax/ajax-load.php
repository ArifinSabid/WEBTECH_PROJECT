<!DOCTYPE html>
<html lang="en">
<head>

<style>
		table,td,tr,th{
			border:3px solid rosybrown;
			padding:25px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
    
</body>
</html>


<?php

$conn = mysqli_connect('localhost', 'root', '', 'product_db') or die("Connection Failed");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
    $output = '<table >
            <tr>
                <th>PRODUCTS</th>
                <th>Buying Price</th>
                <th>Selling Price</th>
            </tr>';

            while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["Name"]}</td>
                <td align='center'>{$row["Buying_Price"]}</td>
                <td align='center'>{$row["Selling_Price"]}</td>
                </tr>";
            }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}
?>
