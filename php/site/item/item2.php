<?php
include 'keepsafe/checker.php';
include 'keepsafe/header.php';
?>
<br><br>
<?php
echo '<br>Item 2 Price:$3<br>';
$item2=$_SESSION['item2']??0;
$_SESSION['item2Price']??0.00;
?>
<img src="images/item2.jpg" alt="Item2" width="100" height="100">
<form method="post">
  <input type="submit" name="submit" value="Add One">
  <input type="submit" name="submit" value="Minus One">
  <input type="submit" name="submit" value="Clear Item 2">


  
  
</form>

<?php
$submit=$_POST['submit']??'';

if($submit == 'Add One')
{
  $item2=$item2 + 1;
}
if($submit == 'Minus One')
{
  $item2=$item2 - 1;
}
if($submit == 'Clear Item 2')
{
  $item2=0;
}
$_SESSION['item2']??'';
$_SESSION['item2']=$item2;
$item2=$_SESSION['item2'];
echo 'You Have: ';
echo $item2;
echo '<br>';
$_SESSION['item2Price']??'';
$_SESSION['item2Price']=$item2*3.00;
echo 'Your price for item2: $';
echo $_SESSION['item2Price'];
?>


<br><br>
<?php
include 'keepsafe/footer.php';
?>