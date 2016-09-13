
<html>
<head>
<title>Contact Page</title>

<link rel="stylesheet"
	href="main.css"
    type="text/css">

<script type="text/javascript">
	
	function validate()
	{
		var error = true;
		document.form2.subject.style.background = "White";
		document.form2.firstName.style.background = "White";
		document.form2.lastName.style.background = "White";														
		document.form2.email.style.background = "White";
		document.form2.content.style.background = "White";

		if (document.form2.subject.value == "")
		{
         		error_type = 1;
			document.form2.subject.focus();
			document.form2.subject.style.background = "Pink";
         		error = false;
		}
		
		
		if (document.form2.email.value == "")
		{
         		error_type = 1;
			document.form2.email.focus();
			document.form2.email.style.background = "Pink";
         		error = false;
		}
		var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

		if ( document.form2.email.value != "" && emailfilter.test(document.form2.email.value) ==false)
		{
			error_type = 2;
			document.form2.email.focus();
			document.form2.email.style.background = "Pink";
         		error = false;
		}
		if (document.form2.content.value == "")
		{
         		error_type = 1;
			document.form2.content.focus();
			document.form2.content.style.background = "Pink";
         		error = false;
		}

		if ( error ==false)
		{
			switch (error_type)
			{
				case 1: alert("The required field has not been filled in.");
				break;
				case 2: alert("Please enter a valid value.");
				break;

			}
         		return false;
		}
		else
		{
			return true;
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
 
<div>
 
<p>&nbsp;</p>
<form name="form2" method="POST" action="contact.php" onsubmit="return validate()">

     Subject<span style="color:#F00">* </span>:
    <input type="text" name="subject" id="subject">
     <br>
    First Name:
    <input type="text" name="firstName" id="firstName">
     <br>
     Last Name:
     <input type="text" name="lastName" id="lastName">
     <br>
     Email<span style="color:#F00">* </span>:
     <input type="text" name="email" id="email">
     <br>
      <label>Content<span style="color:#F00">* </span></label>
      <br>
      <textarea rows="10" cols="100" name="content" ></textarea>  
      <br>
      <input type="submit" value="Submit"  name="submit" id="submit">
      
    <input type="reset" value="Reset"  name="reset" />

</form> 

</div>

<?php

$msg = <<<HERE
 
Subject: $_REQUEST[subject]

First Name: $_REQUEST[firstName]

Last Name: $_REQUEST[lastName] 

Email: $_REQUEST[email]

Contents: $_REQUEST[content]

HERE;

mail("Meng-Chen.Yu@student.uts.edu.au", "Customer Contact", $msg , "From:Customer Reply-To:Service");

ini_set("SMTP", "student.uts.edu.au");

?>

 </body>
</html>