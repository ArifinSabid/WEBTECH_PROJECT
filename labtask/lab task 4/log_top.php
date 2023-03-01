



<?php session_start(); 
	if(!isset($_SESSION['user']) && !isset($_COOKIE['user'])){
		header('Location: login.php');
	}
	if(!isset($_SESSION['user'])){
		$_SESSION['user'] = json_decode(base64_decode($_COOKIE['user']), true);
	}

?>


<html>
<head>
	<title>Header</title>
</head>
<body>
	<fieldset>
		<div class="header">
			
				<div class="profile">Logged in as <u><?= $_SESSION['user']['name']?><span> |</span></u></div>
				<div class="logout">
					<form method="POST" action="logout.php">
							<button type="submit" name="logout_btn">Log out</button>
					</form>
				</div>
			</div>
		</div>
	</fieldset>
</body>
</html>