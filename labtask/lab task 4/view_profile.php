<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php include 'log_top.php';?>
    <?php include 'top.php';?>
	<fieldset>
		<table >
			<tr>
				<td width="25%"><b>
				Account<hr><br>
				<li><a href="dashboard.php">Dashboard</a></li>	
                <li><a href="view_profile.php">View Profile</a></li>
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="change_pic.php">Change Profile Picture</a></li>
				<li><a href="change_pass.php">Change Password</a></li>


				<form method="POST" action="logout.php">
				<li><button type="submit" name="logout_btn">Log out</button></li>
				</form>
						
				</ul>
				</td>
				<td ></fieldset>

				<fieldset><b>
				<lable>PROFILE</lable>
				<table ><hr>
				<tr>
				<td width="45%">Name</td>
				<td><span>:</span><?= $_SESSION['user']['name']?><hr></td>
				<td rowspan="5" width="45%" align="center"><img src="<?= $_SESSION['user']['profilePicPath'] ?>" height="150" width="200"><hr></td>
				</tr>

				<tr>
				<td width="45%">Email</td>
				<td><span>:</span><?= $_SESSION['user']['email']?></td>
				</tr>

				<tr>
				<td width="45%">Gender</td>
				<td><span>:</span><?= $_SESSION['user']['gender']?><hr></td>
				</tr>

				<tr>
				<td width="45%">Date of Birth</td>
				<td><span>:</span><?= $_SESSION['user']['dob']?><hr></td>
								
				<td width="45%"><a href="change_pic.php"><br>Change<hr></a></td>
							
				</tr>
							
				</table>
				<center><a href="edit_profile.php">Edit Profile</a>
				</center></td>
			</tr>
		</table>
	</fieldset>

	<?php include 'footer.php';?>
</body>
</html>