<?php
#######logs into user account
session_start();
$servername = "onyx2.parkland.edu";
$username = "kkleinert2";
$password = "kkleinert2#3";
$dbname = "kkleinert2";
$_SESSION['status']??'';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$_SESSION['item1']??0;
$item1 = $_SESSION['item1'];
$_SESSION['item2']??0;
$item2 = $_SESSION['item2'];
$_SESSION['item3']??0;
$item3 = $_SESSION['item3'];
$_SESSION['item4']??0;
$item4 = $_SESSION['item4'];
$_SESSION['itemPrice']??0;
$price = $_SESSION['itemPrice'];
$_SESSION['userid']??'';
$userid = $_SESSION['userid'];
#################################################check for more than 0
if ($item1 <= 0)
  {
    $item1 = 0;
  }
if ($item2 <= 0)
  {
    $item2 = 0;
  }
if ($item3 <= 0)
  {
    $item3 = 0;
  }
if ($item4 <= 0)
  {
    $item4 = 0;
  }


#############################create SQL
$sql = "insert into storeorders ( userid, item1, item2, item3, item4, price)";
$sql .= " values ( ".$userid.", ".$item1.", ".$item2.", ".$item3.", ".$item4.", ".$price." )";
$result = $conn->query($sql);

if ($result) {
    $_SESSION['error'] = 'Your purchase has been completed';
    $_SESSION['item1']=0; 
    $_SESSION['item2']=0; 
    $_SESSION['item3']=0; 
    $_SESSION['item4']=0; 
    $_SESSION['itemPrice']=0;
    header('Location:../cart.php');
  
} else {
  $_SESSION['error']='Cart did not register 2';
  
  header('Location: ../cart.php');
}

$conn->close();
$_SESSION['sql']= $sql;
?>