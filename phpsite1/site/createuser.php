<?php
session_start();
/*<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Kory Kleinert
CSC-155-201F_2021SP
-->*/

$storedUser = fopen("username.txt","r");
while(! feof($storedUser))
{
 $storedTwo = fgets($storedUser);
 $storedTwo_arr = explode (",",$storedTwo);
 if ($_SESSION["username"] == $storedTwo_arr[0])
 {
  $_SESSION['error'] = "Username Exists";
  $check=1;
 }
}
if (check==1)
{
header("Location:PHPsite1.php");
}
else
{
header("Location:create.php");
$add=$_SESSION['username'].','.$_SESSION['password'].',';
file_put_contents($storedUser, $add);
}
?>