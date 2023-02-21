<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<?php
// define variables and set to empty values
$currentpasswordErr = $newpasswordErr=$retypepasswordErr="";
$currentpassword  =$newpassword= $retypepassword="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["Cuurent password"])) 
  {
    $currentpasswordErr = "Current password is required"; }
   else if(!(str_word_count ($username)>=2))
  {
    $currentpasswordErr = "contains atleast 2 words";
  }

  }
  if (empty($_POST[" New password"])) 
  {
    $newpasswordErr = "New Password is required"; }
   else if(!(str_word_count ($password)>=8))
  {
    $newpasswordErr = "must not be less than eight 8 characters";
  }
    
    if (empty($_POST[" Retype password"])) 
  {
    $retypepasswordErr = "Retype Password is required"; }
   else if(!(str_len ($retypepassword)>=8))
  {
    $retypepasswordErr = "must not be less than eight 8 characters";
  }
    

function test_input($array) 
{
  $array = trim($array);
  $array = stripslashes($array);
  $array = htmlspecialchars($array);
  return $array;
}
?>

<h2>Change password Form</h2>
<p><span class="error">* Required Field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

 
  <fieldset>
 <legend>  CHANGE PASSWORD:</legend> 
 
  Current Password: <input type="text" name="username"> <span class="error">* <?php echo $currentpasswordErr;?></span>
  <br><br>
 New Password: <input type="text" name="password"> <span class="error">* <?php echo $newpasswordErr;?></span><br>


 <br>Retype Password:<input type="text" name="password"> <span class="error">* <?php echo $retypepasswordErr;?></span><br>


  
  
 
  <br><br><BR>
  <input type="submit" name="submit" value="Submit">
  
</form>


  </fieldset>
  <br><br>

 

</body>
</html>