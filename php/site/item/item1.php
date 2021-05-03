<?php
include 'keepsafe/checker.php';
include 'keepsafe/header.php';
?>
<br><br>
<?php
echo '<br>Item 1 Price:$2<br>';
$item1=$_SESSION['item1']??0;
$_SESSION['item1Price']??0.00;
?>
<img src="images/item1.jpg" alt="Item1" width="100" height="100">
<form method="post">
  <input type="submit" name="submit1" value="Add One">
  <input type="submit" name="submit1" value="Minus One">
  <input type="submit" name="submit1" value="Clear Item 1">


  
  
</form>

<?php
$submit=$_POST['submit1']??'';

if($submit == 'Add One')
{
  $item1=$item1 + 1;
}
if($submit == 'Minus One')
{
  $item1=$item1 - 1;
}
if($submit == 'Clear Item 1')
{
  $item1=0;
}
$_SESSION['item1']=$item1;
$item1=$_SESSION['item1'];
echo 'You Have: ';
echo $item1;
echo '<br>';
$_SESSION['item1Price']=$item1*2.00;
echo 'Your price for item1: $';
echo $_SESSION['item1Price'];
?>


<br><br>
<?php
include 'keepsafe/footer.php';
?>