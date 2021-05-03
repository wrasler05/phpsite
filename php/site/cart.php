<?php
######################### Include checker/header
include 'keepsafe/checker.php';
include 'keepsafe/header.php';
######################## Save items this File
$item1=$_SESSION['item1']??0;
$item1Price=$_SESSION['item1Price']??0.00;

$item2=$_SESSION['item2']??0;
$item2Price=$_SESSION['item2Price']??0.00;

$item3=$_SESSION['item3']??0;
$item3Price=$_SESSION['item3Price']??0.00;

$item4=$_SESSION['item4']??0;
$item4Price=$_SESSION['item4Price']??0.00;


##############################echo items
echo 'For Item1 you have: ';
echo $item1;
echo '|  For a Price of: $';
echo $item1Price;
echo '<br>';

echo 'For Item2 you have: ';
echo $item2;
echo '|  For a Price of: $';
echo $item2Price;
echo '<br>';

echo 'For Item3 you have: ';
echo $item3;
echo '|  For a Price of: $';
echo $item3Price;
echo '<br>';

echo 'For Item4 you have: ';
echo $item4;
echo '|  For a Price of: $';
echo $item4Price;
echo '<br>';
?>

<form method='post'>
<input type='submit' name='submit' value='Clear Cart'>
<input type='submit' name='submit' value='Purchase'>
<form>
<?php
$submit=$_POST['submit']??'';
if  ($submit == 'Purchase')
{
  echo 'Congratulations You Purchased Stuff';
}
if  ($submit == 'Clear Cart')
{
  echo 'Congratulations You Cleared your Cart';
  $_SESSION['item1']=0;
  $_SESSION['item1Price']=0;
  $_SESSION['item2']=0;
  $_SESSION['item2Price']=0;
  $_SESSION['item3']=0;
  $_SESSION['item3Price']=0;
  $_SESSION['item4']=0;
  $_SESSION['item4Price']=0;
}

?>


<?php
###############################footer
include 'keepsafe/footer.php';
?>