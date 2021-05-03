<?php

echo 'Create User Here';
?>

<form method="post">
  <label for="yourname">Your name:</label>
  <input type="text" name="yourName" value="yourName"><br><br>
  <label for="user">User name:</label>
  <input type="text" name="user" value="user"><br><br>
  <label for="pass">Password:</label>
  <input type="text" name="pwd" value="pwd" minlength="8" required><br><br>
 <input type="submit" name="submit" value="Create User">
 <input type="submit" name="submit" value="Return To Landing">
</form>


<?php
$submit=$_POST['submit']??'';

if ($submit == 'Create User')
{
 header('Location:site/keepsafe/checkuser.php');
}
if ($submit == 'Return To Landing')
{
 header('Location:landing.php');
}
?>