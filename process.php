<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet"
	href="main.css"
    type="text/css">
    
    <script type="text/javascript">  
    function save()
    {   
        document.form1.action="index.php";
        document.form1.submit();
    }
    
    function send()
    {
    var radios = document.getElementsByName('route_no');
    var count=0;
    for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
       count++;
        break;
         }
         }
              
    	if (count==1) {
    		 document.form1.action="detail.php";
        document.form1.submit();
    	}
    	else {
    			alert("Please select at least one flight.");
    			return false;
    	}

       
    }   
</script>
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

<table>
<tbody>

<tr>
    <form  name="form1">
<?php

	   
	$link = mysql_connect("rerun","potiro","pcXZb(kL");
if (!$link)
   die("Could not connect to Server");
mysql_select_db("poti",$link);

$From = $_REQUEST['from_city'];
$To = $_REQUEST['to_city'];

	
$query_string = "select from_city, to_city, price, route_no from flights where ";
if($From !="" && $To !="")   {
      $query_string = $query_string . "from_city ='$From' and to_city='$To'";
   }else {	
   	
	if($From !="") {
		$query_string =$query_string." from_city='$From'";
	}
	else {
		if($To !="") {
		$query_string =$query_string." to_city='$To'";
	}
	}
} 
	
	
	
$result = mysql_query($query_string);


$num_rows = mysql_num_rows($result);



if ($num_rows > 0 ) {
    print "<table border=0 background='pics/map.png'  style='position:absolute; top:250px; left:300px' >";
	print"<tr><td width='120px'><strong>From</strong></td>";
	print "<td width='150px'><strong>To</strong></td>";
	print "<td width='120px'><strong>Price</strong></td>";
	print "<td width='120px'><strong>Select</strong></td></tr>";
	
	
    while ( $a_row = mysql_fetch_row($result) ) {
		 print "<tr>\n";
         print "\t<td >$a_row[0]</td>\n";
         print "\t<td >$a_row[1]</td>\n";
		 print "\t<td >$$a_row[2]</td>\n";
         print "\t<td ><input type='radio' value='$a_row[3]' name='route_no' /></td>";
         print "</tr>";
         print "<tr>\n";
         
    }
} else {
	header("Location:index.html");}
	


mysql_close($link);
	
	?>
    </tr>
   
    </tbody>
    </table>
    

    <input type='submit' value='New Search' onclick="save()" style="position:absolute; top:430px; left:300px ;font-size:18px">
    <input type='submit' value='Make Booking for selected flight' onclick="return send(this)" style="position:absolute; top:430px; left:600px;font-size:18px">
	</form>
	

</body>
</html>

