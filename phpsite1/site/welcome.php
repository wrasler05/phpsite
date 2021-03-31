<?php
session_start();
/*<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Kory Kleinert
CSC-155-201F_2021SP
-->*/
$_SESSION['section']='site';
?>
<html>
<head>
Welcome Person
</head>

<body>
<?php
echo "Welcome ";
echo $_SESSION['username'];
?>
<?php include 'header.php';?>
<?php include 'checker.php';?>

<?php include 'itemNumbers.php';?>
<?php include 'footer.php';?>
</body>

</html>