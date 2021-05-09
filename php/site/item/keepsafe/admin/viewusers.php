<?php
#######logs into user account
if(session_status() == PHP_SESSION_NONE){
    //session has not started
    session_start();
}

if ($_SESSION['group'] == 1)
{

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
$sql = "SELECT userid, username, groupid FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo 'Order Id: '.$row['username'].' | ';
    echo 'User Id: '.$row['userid'].' | ';
    echo 'Group Id Number: '.$row['groupid'].' <br> ';

  }
} else {
  $_SESSION['error']='No Users to Display ';
  
}
$conn->close();
}
?>
 <form method='post'>
 <input type='submit' name='admin' value='To Admin Orders Page'>
 <input type='submit' name='admin' value='To Admin Users Page'>
 <input type='submit' name='admin' value='To Home'>

 </form>
<?php
$submit = $_POST['admin']??'';

if ($submit == 'To Admin Orders Page' )
{
 header('Location: vieworders.php');
}
if ($submit == 'To Admin Users Page' )
{
 header('Location: viewusers.php');
}
if ($submit == 'To Home' )
{
 header('Location: ../../../home.php');
}

?>