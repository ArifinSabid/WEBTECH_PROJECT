<?php 
	session_start();
	if(isset($_SESSION['status'])){


?>
<html>
<head>

	<title>EDIT PROFILE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table border="1" width="100%">
		<tr height="80px">
			
		<td>X Company</b>
		<table align="Right">
			<tr><td>Logged in as</td>
			<td><a href="bob.php">Bob</a>|</td>
			<td><a href="Logout.php">Logout</a>|</td>
			
			</tr></table>
		</td>
	</tr>
	
	<tr height="200px">

			<td>
				<table border="" width="100%">
					<tr>
						<td>	<b>Account</b><hr><p><ul><li><a href="">Dashboard</a></li>
				<li><a href="viewprofile.php">View Profile</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="profilepicture.php">Change Profile</a></li>
				<li><a href="changepassword.php">Change Password</a></li>
				<li><a href="Logout.php">Logout</a></li></ul></p></td>


     <td>
     	<fieldset>
     		<legend><b>EDIT PROFILE</b></legend>
     		<table>

        			<tr>
     				<td>Name:</td>
     				<td><input type="name" name="name"value=""></td>
     			</tr>
     		</table>
     		<hr>
     		<table>
        			<tr>
     				<td>Email:</td>
     				<td><input type="email" name="email"value=""></td>
     			</tr>
     		</table>
     		<hr>
     		<table>
        			<tr>
     				<td>Gender:</td>
     				<td><input type="radio" name="gender"value="">Male<input type="radio" name="gender"value="">Femal<input type="radio" name="gender"value="">Other</td>
     			</tr>
     		</table>
     		<hr>
     			<table>
        			<tr>
     				<td>Date of Birth:</td>
     				<td><input type="text" name="dateogbirth"value="">(dd/mm/yyy)</td></tr>
     		</table><hr>
     		<table><tr><td><input type="submit" name="submit"value="Submit"></td></tr></table>
     	
     	</fieldset>

			       </td>
		</tr>
</table>

</td>
	</tr>

<tr height="50">

			<td align="center">copyright@2017</td>
	</tr>


	</table>

</body>
</html>
<?php 
	}else{
		header('location:login.php');
	}
?>