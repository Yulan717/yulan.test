<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

	<?php
 $from=$_POST['from'];
  $to= $_POST['to'];
  $price=$_POST['price'];	  
  $flight=$_POST['flight'];
  $total=$_POST['total'];
  print $from;
  print "11111";
$_SESSION['amount'][]=$total;
$_SESSION["flightAll"][]=$flight;
$_SESSION['cityf'][]=$_POST['from'];
$_SESSION['cityt'][]= $_POST['to'];
$_SESSION['priceAll'][]=$_POST['price'];	

?>
</body>
</html>