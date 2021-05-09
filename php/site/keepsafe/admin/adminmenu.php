<?php 
if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
}

if ($_SESSION['group'] == 1)
{
?>
 <form method='post'>
 <input type='submit' name='admin' value='To Admin Orders Page'>
 <input type='submit' name='admin' value='To Admin Users Page'>
 </form>

<?php
$admin=$_POST['admin']??'';
if ($admin == 'To Admin Orders Page')
  {
    header('Location: keepsafe/admin/vieworders.php');
  }
  

if ($admin == 'To Admin Users Page')
  {
    header('Location: keepsafe/admin/viewusers.php');
  }
}


?>