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
$user=$_SESSION['username'];
$password=crypt($_SESSION['password'],$_SESSION['password']);
#echo $password;
#echo '<br>:pass --- user:<br>';
#echo $username;
$sql = "SELECT userId, username, password FROM users WHERE username like '".$user."' and password like '".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['status']='true';
    header('Location:../home.php');
  }
} else {
  $_SESSION['status']='false';
  $_SESSION['error']='Username or Password did not match ';
  header('Location: ../../login.php');
}
$conn->close();
?>