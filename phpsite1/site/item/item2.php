<?php
session_start();
/*<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Kory Kleinert
CSC-155-201F_2021SP
-->*/
$_SESSION['section']='item';

$_SESSION['item2'] = $_SESSION['item2']??0;


function myAdd ($number1,$number2) {
    $_SESSION['item2'] = $number1+$number2;
    echo "you added".$number2." of Items"; 
}
function mySubtract ($number1,$number2) {
    $_SESSION['item2'] = $number1-$number2;
    echo "you deleted".$number2." of Items";
}
function myClear ($number1,$number2) {
    $_SESSION['item2'] = 0;
    echo "you deleted all of the Items";
}

?>



<html>
<head>



</head>
<body>
<?php include '../header.php';?>
<?php include 'checker.php';?>

This is Item 2
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Number of items: <input type="text" name="number"><br>
  <input type="submit" value='add' name='submit'>
  <input type="submit" value='subtract' name='submit'>
  <input type="submit" value='clear' name='submit'>
</form>
<?php
  $number2 = $_POST['number'] ?? 0;
  $number1 = $_SESSION['item2'] ?? 0;
  $submit = $_POST['submit'] ?? '';

  if ($submit == 'add'){
    myAdd ($number1,$number2);}
  if ($submit == 'subtract'){
    mySubtract ($number1,$number2);}
  if ($submit == 'clear'){
    myClear ($number1,$number2);}

?>

<?php include '../itemNumbers.php';?>
<?php include '../footer.php';?>
</body>

</html>