<?php
session_start();
$_SESSION['error'] = $_SESSION['error'] ?? '';
$_SESSION['username'] = $_SESSION['username'] ?? '';
$_SESSION['password'] = $_SESSION['password'] ?? '';

?>

<html><head></head>
<body>
<form action="site/phpaction.php" method="post">
 <p>UserName: <input type="text" name="username" /></p>
 <p>Password: <input type="text" name="password" /></p>
 <p><input type="submit" value='Login' /></p>
</form>
<br>
<form action="readme.txt" method="post">
 <p><input type="submit" value='Click for readme'/></p>
</form>

<?php
if ($_SESSION['error'] != '')
{
  echo $_SESSION['error'];
}
else
{
  echo  "";
}
 
?>
</body>
</html>
