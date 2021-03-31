<?php

?>
<?php
 
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
        $_SESSION['error'] = "er1";
	break;
 	}
 } 
 else 
 { 
 $_SESSION['error'] = 'you are not logged in';
 header("Location:../PHPsite1.php");
 }
}
if ($check == 1)
{
 echo "Welcome: ", $_SESSION['username'];
}
else
{
 echo "er";
}
?>