<?php
include 'keepsafe/checker.php';
include 'keepsafe/header.php';
?>
<br><br>
<?php
echo '<br>Item 4 Price:$5<br>';
$item4=$_SESSION['item4']??0;
$_SESSION['item4Price']??0.00;
?>
<img src="images/item4.jpg" alt="Item4" width="100" height="100">
<form method="post">
  <input type="submit" name="submit" value="Add One">
  <input type="submit" name="submit" value="Minus One">
  <input type="submit" name="submit" value="Clear Item 4">


  
  
</form>

<?php
$submit=$_POST['submit']??'';

if($submit == 'Add One')
{
  $item4=$item4 + 1;
}
if($submit == 'Minus One')
{
  $item4=$item4 - 1;
}
if($submit == 'Clear Item 4')
{
  $item4=0;
}
$_SESSION['item4']??'';
$_SESSION['item4']=$item4;
$item4=$_SESSION['item4'];
echo 'You Have: ';
echo $item4;
echo '<br>';
$_SESSION['item4Price']=$item4*5.00;
echo 'Your price for item4: $';
echo $_SESSION['item4Price'];
?>


<br><br>
<?php
include 'keepsafe/footer.php';
?>