<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Travel Agency</title>

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



<div id="nav">

  <form action="process.php" method="post">
    <div align="center">
      <table width="598" height="94" border="0" cellspacing="0">
        <tbody>
        <tr>
          <td width="210"><h2 style="color:#FB4F00"><var><strong>Search Flights</strong></var></h2></td>
          <td width="37"><strong>From</strong></td>
          <td width="150">
            <select name="from_city" style="font-size:18px">   
               <option selected="selected" />
              <option />Adelaide
               <option />Alice Springs
               <option />Brisbane 
			   <option />Broken Hill
               <option />Broome                
               <option />Bendigo 
               <option />Canberra
               <option />Darwin 
               <option />Hobart 
			   <option />Kalgoorlie 
               <option />Launceston 
               <option />Melbourne 
               <option />Mt Isa
 			   <option />Newcastle
               <option />Sydney
               <option />Perth
               <option />Pt Augusta                
               <option />Rockhampton      
             </select>
			</td>

          <td width="18"><strong>To</strong></td>
          <td width="150">
          <select name="to_city" style="font-size:18px">   
               <option selected="selected" />
              <option />Adelaide
               <option />Alice Springs
               <option />Brisbane 
			   <option />Broken Hill
               <option />Broom           
               <option />Bendigo 
               <option />Canberra
               <option />Darwin 
               <option />Hobart 
			   <option />Kalgoorlie 
               <option />Launceston 
               <option />Melbourne 
               <option />Mt Isa
 			   <option />Newcastle
               <option />Sydney
               <option />Perth
               <option />Pt Augusta 
               <option />Rockhampton      
             </select>
			</td>
          <td width="61"><input name="Submit" type="submit" style="font-size:16px"></td>
        </tr>
      </tbody>
</table>
</div></form></div>

</div>

<div id="content">

  <p align="center"><img src="pics/main page.png" width="545" height="398"></p>
  
</div>  


<div id="footer">
<p align="center"></p>
<p style="font-size:16px" align="center"> <strong>Right @ 2016 UTS</strong></p>
<p style="font-size:14px" align="center">The website that it was created as an Assignment for the subject Programming on the Internet at the University of Technology, Sydney for Autumn semester 2016.
</p>
</div>


</body>
</html>
