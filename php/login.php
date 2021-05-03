<?php
session_start();
?>
<form method="post">
  <label for="yourname">Your name:</label>
  <input type="text" name="yourName" value="yourName"><br><br>
  <label for="user">User name:</label>
  <input type="text" name="user" value="user"><br><br>
  <label for="pass">Password:</label>
  <input type="text" name="pwd" value="pwd"><br><br>
 <input type="submit" name="submit" value="Login">
 <input type="submit" name="submit" value="Create User">
</form>

<?php
$submit = $_POST['submit']??'';
$username=$_POST['user']??'';
$password=$_POST['pwd']??'';
$_SESSION['yourName']??'';
$_SESSION['yourName'] = $_POST['yourName']??'';
$_SESSION['username']??'';
$_SESSION['username'] =$username;
$_SESSION['password']??'';
$_SESSION['password'] = $_POST['pwd']??'';;
if($submit=='Login')
{
  echo 'Logged in<br><br>';
  echo 'Welcome:'.$username;
  header("Location: site/keepsafe/logger.php");
}
if($submit=='Create User')
{

  header("Location: createuser.php");
}

echo $_SESSION['error']??'';

?>