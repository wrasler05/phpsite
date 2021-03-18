<?php 
$username = htmlspecialchars($_POST['username']); 
$password = htmlspecialchars($_POST['password']); 
 if ($username == "pie")
{
 header("Location:welcome.html");
} else { header("Location:notwelcome.html");}
?>
