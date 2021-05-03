<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
}
if($_SESSION['status']!='true')
{
 header('Location:../../login.php');
}
if($_SESSION['status']=='true')
{
 echo $_SESSION['yourName'];
}


?>