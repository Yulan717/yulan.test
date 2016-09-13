

<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php

 echo  "Name: ".$_SESSION['name'];
 echo "<br/>";
 echo "Address:  ".$_SESSION['address'];
  echo "<br/>";
 
 echo "Email:  ".$_SESSION['email'];
  echo "<br/>";
echo "Credit Card Details Supplied";
echo "<br/>";

echo "Booking Detail:";
 echo "<br/>";
 
echo  "From   ".$_SESSION['from'];

echo  "      To   ".$_SESSION['to'];
 echo "<br/>";

     
			       for ($row = 0; $row < count($_SESSION['flight']); $row++) {
			       	$num=$row+1;
                 echo "<p><b>Ticket $num</b></p>";
                 echo "<ul>";
                 for ($col = 0; $col < 3; $col++) {
                  echo "<dt>".$_SESSION['flight'][$row][$col]."</dt>";
                   }
                  echo "</ul>";
                    }

 print "<form action='detail.php' method='get'>";
 print "\t<td><input type='submit' value='Confirm Payment'></form></td>\n";

?>



</body>
</html>