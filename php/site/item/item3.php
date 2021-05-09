<?php
include 'keepsafe/checker.php';
include 'keepsafe/header.php';
?>
<br><br>
<?php
echo '<br>Item 3 Price:$4<br>';
$item3=$_SESSION['item3']??0;
$_SESSION['item3Price'] = 4.00;
?>
<img src="images/item3.jpg" alt="Item3" width="100" height="100">
<form method="post">
  <input type="submit" name="submit" value="Add One">
  <input type="submit" name="submit" value="Minus One">
  <input type="submit" name="submit" value="Clear Item 3">


  
  
</form>

<?php
$submit=$_POST['submit']??'';

if($submit == 'Add One')
{
  $item3=$item3 + 1;
}
if($submit == 'Minus One')
{
  $item3=$item3 - 1;
}
if($submit == 'Clear Item 3')
{
  $item3=0;
}
$_SESSION['item3']=$item3;
$item3=$_SESSION['item3'];
echo 'You Have: ';
echo $item3;
echo '<br>';
echo 'Your price for item3: $';
echo $_SESSION['item3Price'] * $item3;
?>


<br><br>
<?php
include 'keepsafe/footer.php';
?>