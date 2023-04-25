<!DOCTYPE html>
<html lang="en">
<head>
<style>
		table,tr,th{
			border:1px solid rosybrown;
			padding:25px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

<?php

$search_value = $_POST["search"];

$conn = mysqli_connect('localhost', 'root', '', 'product_db') or die("Connection Failed");

$sql = "SELECT * FROM products WHERE Name LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table 			border:"1px solid rosybrown";
  padding:"10px";
  border-collapse: "collapse">
              <tr>
              <th>Name</th>
              <th>Buying Price</th>
              <th>Selling Price</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["Name"]}</td><td align='center'>{$row["Buying_Price"]}</td><td align='center'>{$row["Selling_Price"]}</td>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
  
</body>
</html>


