<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
$usernameErr = $passwordErr=$rmbrErr="";
$username  =$password= $rmbrme="";

 

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["username"])) 
  {
    $usernameErr = "User Name is required"; }
   else if(!(str_word_count ($username)>=2))
  {
    $usernameErr = "must contain atleast two (2) characters";
  }

 

  else{}
  {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._' ]*$/",$username)) 
    {
      $usernameErr = " can contain alpha numeric characters, period, dash or underscore only";
    }

 

  }
  if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required"; }
   if(!(str_word_count ($password)>=8))
  {
    $passwordErr = "must not be less than eight (8) characters";
  }
  

    else{}
    {
    $password = test_input($_POST["password"]); 
  
  {
    $password = test_input($_POST["password"]);
    if (!preg_match("/^[a-zA-Z-'. ]@#$%*$/",$password)) 
    {
      $passwordErr = " must contain at least one of the special characters (@, #, $,%)";
    }
  }
  }
  
 
}

function test_input($array) 
{
  $array = trim($array);
  $array = stripslashes($array);
  $array = htmlspecialchars($array);
  return $array;
}
?>

<h2>Login Form</h2>
<p><span class="error">* Required Field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

 

  <fieldset>
 <legend>  Login:</legend> 
 
  User Name: <input type="text" name="username"> <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="text" name="password"> <span class="error">* <?php echo $passwordErr;?></span>


 <br><br><input type="checkbox" name="rmbrme" value="SSC">Remember me
 
  <span class="error"><?php echo $rmbrErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <button type="button" onclick="alert('Hello world!')">Forgot Password </button>
</form>


  </fieldset>
  <br><br>




</body>
</html>