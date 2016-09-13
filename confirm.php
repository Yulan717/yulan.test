<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Confirm</title>

<link rel="stylesheet"
	href="main.css"
    type="text/css">

 
 
</head>
<body onLoad="MM_preloadImages('pics/home_on.png','pics/flights_on.png','pics/book_on.png','pics/contact_on.png')">

<div id="header">

<img id="img1" 
class="brand"
src="pics/air.png" 
width="267" height="54">

<a href="index.php">
<img id="img2" 
class="home"
src="pics/home_off.png" 
width="110" height="45"

onmouseover=img2.src="pics/home_on.png";
onmouseout=img2.src="pics/home_off.png"></a>

<a href="search.html">
<img id="img3"
class="flights"
src="pics/flights_off.png" 
width="110" height="45"

onmouseover=img3.src="pics/flights_on.png";
onmouseout=img3.src="pics/flights_off.png"></a>

<a href="booking.php">
<img id="img4"
class="booking"
src="pics/book_off.png" 
width="110" height="45"

onmouseover=img4.src="pics/book_on.png";
onmouseout=img4.src="pics/book_off.png"></a>

<a href="about.html">
<img id="img5"
class="about"
src="pics/about_off.png" 
width="110" height="45"

onmouseover=img5.src="pics/about_on.png";
onmouseout=img5.src="pics/about_off.png"></a>

<a href="contact.php">
<img id="img6"
class="contact"
src="pics/contact_off.png" 
width="110" height="45"

onmouseover=img6.src="pics/contact_on.png";
onmouseout=img6.src="pics/contact_off.png"></a>


</div>
<div>
<h3>Complete Booking – Stage 3 of 4 Screens</h3>

<?php

echo "<br/><br/></br>";
echo  "Name:\t".$_SESSION['name'];
echo "<br/><br/>";
echo "Address:\t".$_SESSION['address'];
echo "<br/><br/>";
echo "Email:\t".$_SESSION['email'];
echo "<br/><br/>";
echo "* Credit Card Details Supplied.";
echo "<br/><br/>";
echo "Booking Detail:\t";
echo "<br/><br/>";
echo  "From:\t".$_SESSION['from'];
echo "<br/><br/>";
echo  "To:\t".$_SESSION['to'];
echo "<br/><br/>";

 for ($row = 0; $row < count($_SESSION['flight']); $row++) {
			       	$num=$row+1;
                 echo "<p><b>Ticket $num</b></p>";
                 echo "<ul>";
                 for ($col = 0; $col < 3; $col++) {
                  echo "<dt>".$_SESSION['flight'][$row][$col]."</dt>";
                   }
                  echo "</ul>";
                    }

 print "<form action='final.php' method='get'>";
 print "\t<td><input type='submit' value='Confirm'></form></td>\n";

 
 

$msg = <<<HERE
 
Booking Detail:

Name: $_SESSION[name]

Address: $_SESSION[address]

Email: $_SESSION[email]

From:\t$_SESSION[from]

To:\t$_SESSION[to]


HERE;

mail($_SESSION[email], "Booking Details", $msg , "From:Travel.com To:Customer");

?>
</div>
</body>
</html>