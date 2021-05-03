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
  header('location: item/item1.php');
}
if ($submit == 'item2')
{
  header('location: item/item2.php');
}
if ($submit == 'item3')
{
  header('location: item/item3.php');
}
if ($submit == 'item4')
{
  header('location: item/item4.php');
}
if ($submit == 'logout')
{
  header('location: logout.php');
}
?>

<?php
include 'keepsafe/footer.php';
?>