<?php
session_start();

if(isset($_REQUEST['submit']))
{
	$username=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	if($username !=null && $password!=null)
	{
		if($username==$password)
		{
			$status="true";
			$_SESSION['status']='status';
			header('Location:loggedindas.php');
			

		}
		else{
			echo"invalid usere";
		}

	}
	else{
		echo "null submittion....";
	}
}
