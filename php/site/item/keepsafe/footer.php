<br><br>
<?php

echo 'Found a mouse by your foot.';

?>
<br><br>
<img src="keepsafe/images/mouse.jpg" alt="owls" width="50" height="50"><br>

<form method='post'>
<input type='submit' name='submit' value='Go Home'>
<input type='submit' name='submit' value='Go To Item1'>
<input type='submit' name='submit' value='Go To Item2'>
<input type='submit' name='submit' value='Go To Item3'>
<input type='submit' name='submit' value='Go To Item4'>
<input type='submit' name='submit' value='Go To Cart'>
<input type='submit' name='submit' value='logout'>
</form>
<?php
$submit = $_POST['submit']??'';
if ($submit == 'Go Home')
{
 header('Location:../home.php');
}
if ($submit == 'Go To Item1')
{
 header('Location:item1.php');
}
if ($submit == 'Go To Item2')
{
 header('Location:item2.php');
}
if ($submit == 'Go To Item3')
{
 header('Location:item3.php');
}
if ($submit == 'Go To Item4')
{
 header('Location:item4.php');
}
if ($submit == 'Go To Cart')
{
 header('Location:../cart.php');
}
if ($submit == 'logout')
{
 header('Location:../logout.php');
}

?>



