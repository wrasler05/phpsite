<?php
session_start();
/*<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Kory Kleinert
CSC-155-201F_2021SP
-->*/

session_destroy();
header("Location:../PHPsite1.php");
?>