<?php
session_start();
?>
<?php
$_SESSION["username"] = htmlspecialchars($_POST['username']);
$_SESSION["password"] = htmlspecialchars($_POST['password']); 
/*<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Kory Kleinert
CSC-155-201F_2021SP
-->*/


$storedUser = fopen("username.txt","r");
$check=0;

while(! feof($storedUser))
{
 $storedTwo = fgets($storedUser);
 $storedTwo_arr = explode (",",$storedTwo);
 
 if ($_SESSION["username"] == $storedTwo_arr[0])
 {
    
    if($_SESSION["password"] == $storedTwo_arr[1])
 	{
	$check=1;
	
	break;
	}
    else
        {
        $_SESSION['error'] = "Wrong Password";
	break;
 	}
 } 
 else 
 { 
 $_SESSION['error'] = "Wrong Username";
 header("Location:../PHPsite1.php");
 }
}
if ($check == 1)
{
header("Location:welcome.php");
}
else
{

 header("Location:../PHPsite1.php");
}
?>