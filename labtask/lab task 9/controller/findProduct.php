<?php

require_once '../model/model.php';?>

<?php

if (isset($_POST['findProduct'])) {
	
		echo $_POST['p_name'];

    try {
    	
    	$allSearchedProduct = searchProduct($_POST['p_name']);
    	require_once '../showSearchedProduct.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
?>

<br>
<br>
<br>
<li><a href="../showAllProduct.php"> Show All Product</a></li>