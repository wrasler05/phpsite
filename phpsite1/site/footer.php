<?php

if($_SESSION['section']=='item') 
{
 $links = array("../welcome.php","item1.php","item2.php","item3.php","item4.php","../cart.php","../../PHPsite1.php","../end.php");
 $decription = array('Welcome Page','Item1','Item2','Item3','Item4','Cart','Login Page','Logout');
 $counted = count($links);
 echo '<br>';
 for ($i = 0; $i < $counted; $i++)
 {
        echo "<a href='".$links[$i]."'>".$decription[$i]."</a>";
        echo '<br>';
 }
 
}
/*site files*/
else if($_SESSION['section']=='site') 
{
 $links = array("welcome.php","item/item1.php","item/item2.php","item/item3.php","item/item4.php","cart.php","../PHPsite1.php","end.php");
 $decription = array('Welcome Page','Item1','Item2','Item3','Item4','Cart','Login Page','Logout');
 $counted = count($links);
 echo '<br>';
 for ($i = 0; $i < $counted; $i++)
 {
        echo "<a href='".$links[$i]."'>".$decription[$i]."</a>";
        echo '<br>';
 }
 
}
?>