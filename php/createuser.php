<?php
session_start();
echo 'Create User Here';
$_SESSION['error']??'';
?>

<form method="post">
  <label for="yourname">Your name:</label><br>
  <input type="text" name="yourName" value="yourName"><br><br>
  <label for="user">User name:</label><br>
  <input type="text" name="user" value="user"><br><br>
  <label for="pass">Password:</label><br>
  <input type="text" name="password" value="password" ><br><br>
  <label for="pass">Confirm Password:</label><br>
  <input type="text" name="passwordCon" value="passwordCon" ><br><br>
 <input type="submit" name="submit" value="Create User">
 <input type="submit" name="submit" value="Return To Landing">
</form>


<?php
echo 'User Name and Password must be over 8 characters long<br><br>';
echo '<br><br>';
echo $_SESSION['error']??'';

$submit=$_POST['submit']??'';
$user=$_POST['user']??'';
$yourName=$_POST['yourName']??'';
$password=$_POST['password']??'';
$passwordCon=$_POST['passwordCon']??'';
$_SESSION['username']??'';
$_SESSION['password']??'';
$_SESSION['yourName']??'';
$_SESSION['username'] = $user;
$_SESSION['yourName'] = $yourName;
$_SESSION['password'] = $password;
if ($submit == 'Create User')
{
 if (strlen($password) >= 8 and strlen($user) >= 6)
 {
  if ($password == $passwordCon)
    {
     header('Location:site/keepsafe/checkuser.php');
    }
    else 
    {
     echo 'Password Did not match';
    }
 } else 
 {
   echo'Password or User Name is too short';
 }
}
if ($submit == 'Return To Landing')
{
 header('Location:landing.php');
}
?>