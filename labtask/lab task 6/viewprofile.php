<?php 
	session_start();
	if(isset($_SESSION['status'])){


?>

<html>
<head>

	<title>View Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table border="1" width="100%">
		<tr height="80px">
			
		<td>X Company</b>
		<table align="Right">
			<tr><td>Logged in as</td>
			<td><a href="bob.php">Bob</a>|</td>
			<td><a href="logout.php">Logout</a>|</td>
			
			</tr></table>
		</td>
	</tr>
	
	<tr height="200px">

			<td>
				<table border="" width="100%">
					<tr>
						<td>	<b>Account</b><hr><p><ul><li><a href="">Dashboard</a></li>
				<li><a href="">View Profile</a></li>
				<li><a href="">Edit Profile</a></li>
				<li><a href="">Change Profilr</a></li>
				<li><a href="">Change Password</a></li>
				<li><a href="">Logout</a></li></ul></p></td>


     <td>
     	<fieldset>
     		<legend><b>PROFILE</b></legend>
     		<table>
     			<img src="images/pic.PNG" align="Right" width="150px" height="150px">

        			<tr>
     				<td>Name</td>
     				<td>:Bob</td>
     			</tr>
     		</table>
     		<hr>
     		<table>
        			<tr>
     				<td>Email</td>
     				<td>:bob@aiub.edu</td>
     			</tr>
     		</table>
     		<hr>
     		<table>
        			<tr>
     				<td>Gender</td>
     				<td>:Male</td>
     			</tr>
     		</table>
     		<hr>
     			<table>
        			<tr>
     				<td>Date of Birth</td>
     				<td>:19/09/1998</td>
     			</tr>
     		</table>
     		<p align="Right"><a href="">Change</a></p>
     		<hr>

     		<a href="">Edit Profile</a>
     		
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