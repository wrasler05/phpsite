<?php
session_start();
$_SESSION['error'] = $_SESSION['error'] ?? '';
$_SESSION['username'] = $_SESSION['username'] ?? '';
$_SESSION['password'] = $_SESSION['password'] ?? '';
/*<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Kory Kleinert
CSC-155-201F_2021SP
-->*/
?>

<html><head></head>
<body>
<form action="createuser.php" method="post">
 <p>User Name: <input type="text" name="username" /></p>
 <p>Pass word: <input type="text" name="password" /></p>
 <p><input type="submit" /></p>
</form>
<?php
if ($_SESSION['error'] != '')
{
  echo $_SESSION['error'];
}
else
{
  echo  "no error";
}
 
?>
</body>
</html>