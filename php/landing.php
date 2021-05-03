<?php

echo 'Hello and Welcome to the new PHP site';

?>
<form method='post'>
<input type='submit' name='submit' value='Login'>
<input type='submit' name='submit' value='Create New User'>
</form>

<?php
$submit = $_POST['submit']??'';

if ($submit == 'Login')
{
  header('Location:login.php');
}
if ($submit == 'Create New User')
{
  header('Location:createuser.php');
}

?>