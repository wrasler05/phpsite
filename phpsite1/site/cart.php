<?php
session_start();
/*<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Kory Kleinert
CSC-155-201F_2021SP
-->*/
$_SESSION['section']='site';
$_SESSION['item1'] = $_SESSION['item1']??0;


function myAdd ($number1,$number2,$type) {
    $_SESSION[$type] = $number1+$number2;
    echo "you added ".$number2." of Items"; 
}
function mySubtract ($number1,$number2,$type) {
    $_SESSION[$type] = $number1-$number2;
    echo "you deleted ".$number2." of Items";
}
function myClear ($number1,$number2,$type) {
    $_SESSION[$type] = 0;
    echo "you deleted all of the Items";
}

?>
<html>
<head>
Welcome Person
</head>

<body>

<?php include 'header.php';?>
<?php include 'checker.php';?>

This is the Shopping cart
<br><br><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  
  Number of items: <input type="text" name="number" placeholder=0><br>
  Item to Change: <select name="itemType"><br>
  <option value="item1">item1</option>
  <option value="item2">item2</option>
  <option value="item3">item3</option>
  <option value="item4">item4</option>
  </select> 
  <input type="submit" value='add' name='submit'>
  <input type="submit" value='subtract' name='submit'>
  <input type="submit" value='clear' name='submit'>
</form>

<?php
  $number2 = $_POST['number'] ?? 0;
 
  $submit = $_POST['submit'] ?? '';
  $type = $_POST['itemType']??'';
  echo $type;
  if ($type == 'item1' )
  {
  $number1 = $_SESSION['item1'] ?? 0;
  }
  if ($type == 'item2' )
  {
  $number1 = $_SESSION['item2'] ?? 0;
  }
  if ($type == 'item3' )
  {
  $number1 = $_SESSION['item3'] ?? 0;
  }
  if ($type == 'item4' )
  {
  $number1 = $_SESSION['item4'] ?? 0;
  }

  if ($submit == 'add'){
    myAdd ($number1,$number2,$type);}
  if ($submit == 'subtract'){
    mySubtract ($number1,$number2,$type);}
  if ($submit == 'clear'){
    myClear ($number1,$number2,$type);}

?>



<?php include 'itemNumbers.php';?>
<?php
$price1 =  $_SESSION['item1']*5;
$price2 = $_SESSION['item2']*10;
$price3 = $_SESSION['item3']*15;
$price4 = $_SESSION['item4']*500;
$totalPrice = $price1+$price2+$price3+$price4;

echo '<br>';
echo 'price for item1 is $'.$price1;
echo '<br>';
echo 'price for item2 is $'.$price2;
echo '<br>';
echo 'price for item3 is $'.$price3;
echo '<br>';
echo 'price for item4 is $'.$price4;
echo '<br>';
echo 'Your total price is $'.$totalPrice;
echo '<br><br><br><br>';
?>
<?php include 'footer.php';?>
</body>

</html>