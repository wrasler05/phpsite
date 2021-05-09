<?php
#######creates user account
session_start();
$_SESSION['status']='false';
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
$user=$_SESSION['username'];
$password=crypt($_SESSION['password'],$_SESSION['password']);

echo '<br>:pass --- user:<br>';
echo $user;
$sql = "SELECT userId, username, password FROM users WHERE username like '".$user."' and password like '".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    $_SESSION['status']='false';
    $_SESSION['error']='Username Already Used ';
    header('Location:../../createuser.php');
  }
  }
  else {
  $sql ="INSERT INTO users(username, password) Values ('".$user."', '".$password."')";
  if ($conn->query($sql) === TRUE) {
  $_SESSION['status']='true';
  header('Location:../keepsafe/logger.php');
  } 
}
echo $sql; 
$conn->close();
?>