<?php
include 'keepsafe/checker.php';


include 'keepsafe/header.php';

echo 'Welcome to the Home Page';

?>
<form method='post'>

<br>To Explore each item<br>
<input type='submit' name='submit' value='item1'>
<input type='submit' name='submit' value='item2'>
<input type='submit' name='submit' value='item3'>
<input type='submit' name='submit' value='item4'>
<br>To Checkout<br>
<input type='submit' name='submit' value='Go To Cart'>
<br>To Logout <br>
<input type='submit' name='submit' value='logout'>

</form>
<?php
$submit=$_POST['submit']??'';
if ($submit == 'Go To Cart')
{
  header('Location: cart.php');
}
if ($submit == 'item1')
{
  echo 'item1';
}
if ($submit == 'item2')
{
  echo 'item2';
}
if ($submit == 'item3')
{
  echo 'item3';
}
if ($submit == 'item4')
{
  echo 'item4';
}
if ($submit == 'logout')
{
  header('location: logout.php');
}
?>

<?php
include 'keepsafe/footer.php';
?>