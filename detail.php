<?php
session_start();
unset($_SESSION['userInfor']); 
?>

<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Shopping cart</title>
<link rel="stylesheet"
	href="main.css"
    type="text/css">

<style>

table  {
	background-color:#B8ECFF;
	color:black;
	text-align:left;
	font-size:14px;
	border-spacing: 0px;
	
}
table a, table, tbody, tfoot, tr, th, td {
	font-family: Verdana, arial, helvetica, sans-serif;
}
table, {
	border-left:3px solid #567;
	border-right:3px solid #000;
	padding: 3px;
}
table a {<link rel="stylesheet"
	href="main.css"
    type="text/css">
	text-decoration: none;
	background: inherit;
	color: #ccf;
	font-weight: bold;
}
table a:link {
	text-decoration: none;
}
table a:visited {
	background: inherit;
	color: #66c;
	text-decoration: line-through;
}
table a:hover {
	background: inherit;
	color: #eef;
	position: relative;
	top: 1px;
	left: 1px;
	text-decoration: none;
}
table caption {
	border-top:1px solid #ddf;
	border-left:1px solid #ddf;
	border-right:1px solid #669;
	border-bottom:1px solid #669;
	text-align: left;
	padding: 3px;
	color: #ccf;
	background: #99f;
	font-family: georgia, "times new roman", serif;
	font-size:20px;
	font-weight:bold;
}
table, td, th {
	margin:0px;
	padding:3px;
	border-left:1px solid #ddf;
	border-right:1px solid #669;
	border-bottom:1px solid #669;
}
td, th {
	border-top:1px solid #ddf;
	border-left:1px solid #ddf;
	border-right:1px solid #669;
	border-bottom:1px solid #669;
}
tr.odd {
	color: inherit;
	background: #88e;
}
ht:bold;
		color:#592C16;
		padding: 16px 9px;
		
	}
</style>

<script type="text/javascript">
	/// count seat have booked
    function chooseOne(cb) {
		var count=0;
		if(navigator.appName.indexOf("Explorer")>-1)  
			count=document.getElementById("countSelect").innerText;  
		else  
			count=document.getElementById("countSelect").textContent; ;

		if(cb.checked)  
			count++;
		else
			count--;
		document.getElementById("countSelect").innerHTML=count.toString();
    }
	
</script>
    
</head>
<body onLoad="MM_preloadImages('pics/home_on.png','pics/flights_on.png','pics/book_on.png','pics/contact_on.png')">

<p>&nbsp;</p>
<div id="header">

<img id="img1" 
class="brand"
src="pics/air.png" 
width="267" height="54">

<a href="index.html">
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
<?php
session_start();

?>



<?php
 
    $link = mysql_connect("rerun","potiro","pcXZb(kL");
    if (!$link)
	   die("Could not connect to Server");
      mysql_select_db("poti",$link);

    $no = $_REQUEST['route_no'];
    $query_string = "select from_city, to_city, price, route_no from flights where route_no = '$no'";
    $result = mysql_query($query_string);
    $a_row = mysql_fetch_row($result);
       
           $_SESSION['from']=$a_row[0];
           $_SESSION['to']=$a_row[1];
           $_SESSION['price']=$a_row[2];
           
       
            $_SESSION['cityf'][]=$_SESSION['from'];
             $_SESSION['cityt'][]=$_SESSION['to'];
             $_SESSION['priceAll'][]=$_SESSION['price'];
             
            // var_dump($_SESSION['cityf']);
  			
  			$_SESSION['selectcity']=array( $_SESSION['from'] , $_SESSION['to'] );
  	    	//var_dump($_SESSION['selectcity']);
  	    	$_SESSION['cityAll'][]=$_SESSION['selectcity'];
			//var_dump($_SESSION['cityAll']);	
				print "<br><br>";
				print "<tr>\n";
				print "\t<td>From:\t$a_row[0]</td>\n";
	       	print "<br><br>";
				print "\t<td>To:\t$a_row[1]</td>\n";
				print "<br><br>";
				print "\t<td>Price:\t$a_row[2]</td>\n";
	       	print "<br><br>";
			
           

      


      
?>
</div>


<div>
  
<form name="myForm" action="list.php" method="post" >
  <?php 
	//print "<input type='hidden' value='$a_row[0]' name='from'/>";
	//print "<input type='hidden' value='$a_row[1]' name='to'/>";
	//print "<input type='hidden' value='$a_row[3]' name='route'/>";
	//print "<input type='hidden' value='$a_row[2]' name='price'/>";
	?>
	
   <table>
   <tbody>
   <tr>
   <td><font size:"+2">Seat No.</td>
   <td><font size:"+2">Extra Request</td>
   <td><font size:"+2">Extra Request</td>
   <td><font size:"+2">Extra Request</td>
   </tr>
   
   <tr>
   <td>
   <input type="checkbox" value="A" name="a[]" onclick='chooseOne(this)'/>A</td>
   <td>
   <input type="checkbox" value="Child" name="a[]"/>Child</td>
   <td>
   <input type="checkbox" value="Wheelchair" name="a[]"/>Wheelchair</td>
   <td>
   <input type="checkbox" value="Special Diet" name="a[]"/>Special diet</td>
   
   </tr>
  <tr>
   <td>
   <input type="checkbox" value="B" name="b[]" onclick='chooseOne(this)'/>B</td>
   <td>
   <input type="checkbox" value="Child" name="b[]"/>Child</td>
   <td>
   <input type="checkbox" value="Wheelchair" name="b[]"/>Wheelchair</td>
   <td>
   <input type="checkbox" value="Special Diet" name="b[]"/>Special diet</td>
   
   </tr>
  <tr>
   <td>
   <input type="checkbox" value="C" name="c[]" onclick='chooseOne(this)'/>C</td>
   <td>
   <input type="checkbox" value="Child" name="c[]"/>Child</td>
   <td>
   <input type="checkbox" value="Wheelchair" name="c[]"/>Wheelchair</td>
   <td>
   <input type="checkbox" value="Special Diet" name="c[]"/>Special diet</td>
    
   </tr>
   <tr>
   <td>
   <input type="checkbox" value="D" name="d[]" onclick='chooseOne(this)'/>D</td>
   <td>
   <input type="checkbox" value="Child" name="d[]"/>Child</td>
   <td>
   <input type="checkbox" value="Wheelchair" name="d[]"/>Wheelchair</td>
   <td>
   <input type="checkbox" value="Special Diet" name="d[]"/>Special diet</td>

   </tr>
   <tr>
   <td>
   <input type="checkbox" value="E" name="e[]" onclick='chooseOne(this)'/>E</td>
   <td>
   <input type="checkbox" value="Child" name="e[]"/>Child</td>
   <td>
   <input type="checkbox" value="Wheelchair" name="e[]"/>Wheelchair</td>
   <td>
   <input type="checkbox" value="Special Diet" name="e[]"/>Special diet</td>
 
   </tr>
      <tr>
      <td></td>
      <td></td>
      <td></td>
      <td align="right"><input type="submit" name="submit" value="Add to Bookings" style="font-size:16px"></td>
      </tr>
   </tbody>
   </table>

</form>
   <tr>
   You have selected  <span id="countSelect" style="color:#F80000">0</span> ticket.
   </tr>
   
<script>
	myForm.addEventListener("submit", function(ev){
	if(Number(document.getElementById("countSelect").innerHTML==0)){
	alert("Please select at least one seat.");
		ev.preventDefault();
	   }
	});
</script>

</div>



</body>
</html>



