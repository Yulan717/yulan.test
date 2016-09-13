

<?php
session_start();

unset($_SESSION['userInfor']); 

?>

<html>
<head>
<title>Payment</title>

<link rel="stylesheet"
	href="main.css"
    type="text/css">
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.4/jquery-min.js"
type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
type="text/javascript"></script>
<script type="text/javascript">
	$(function(){
		//Datepicker
		$('data_field').datepicker({
			//inline: true,
			dateFormat: 'm-yy'
		});
	});

</script>
	<script type="text/javascript">
	
	function checkback()
    {   
        document.form1.action="Personal.php";
        document.form1.submit();
    }
	
	function validate()
	{
		var error = true;
		document.form1.creditCardType.style.background = "White";
		document.form1.creditCardNumber.style.background = "White";						        document.form1.nameCreditCard.style.background = "White";
		document.form1.expiryData.style.background = "White";						        
		document.form1.securityCode.style.background = "White";
		
		if (document.form1.creditCardType.value == "")
		{
         		error_type = 1;
			document.form1.creditCardType.focus();
			document.form1.creditCardType.style.background = "Pink";
         		error = false;
		}
		if (document.form1.creditCardNumber.value == "")
		{
         		error_type = 1;
			document.form1.creditCardNumber.focus();
			document.form1.creditCardNumber.style.background = "Pink";
         		error = false;
		}
		if (document.form1.nameCreditCard.value == "")
		{
         		error_type = 1;
			document.form1.nameCreditCard.focus();
			document.form1.nameCreditCard.style.background = "Pink";
         		error = false;
		}
		if (document.form1.expiryData.value == "")
		{
         		error_type = 1;
			document.form1.expiryData.focus();
			document.form1.expiryData.style.background = "Pink";
         		error = false;
		}
		if (document.form1.securityCode.value == "")
		{
         		error_type = 1;
			document.form1.securityCode.focus();		
			document.form1.securityCode.style.background = "Pink";
         		error = false;
		}
		
		if (isNaN(document.form1.creditCardNumber.value))
		{
			error_type = 2;
			document.form1.creditCardNumber.focus();
			document.form1.creditCardNumber.style.background = "Pink";
         		error = false;
		}
		if (isNaN(document.form1.securityCode.value))
		{
			error_type = 2;
			document.form1.securityCode.focus();
			document.form1.securityCode.style.background = "Pink";
         		error = false;
		}
		

		var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i

		if ( document.form1.email.value != "" && emailfilter.test(document.form1.email.value) ==false)
		{
			error_type = 2;
			document.form1.email.focus();
			document.form1.email.style.background = "Red";
         		error = false;
		}

/***********************************************
* Email Validation script-   Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for legal use.
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/


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
   <h3>Complete Booking – Stage 2 of 4 Screens</h3>
   <?php
   
    $fname=$_REQUEST["fname"];
    $lname=$_REQUEST["lname"];
    $suburb=$_REQUEST["suburb"];
    $state=$_REQUEST["state"];
    $country=$_REQUEST["country"];
    $postcode=$_REQUEST["pcode"];
	$address1=$_REQUEST["address1"];
    $address2=$_REQUEST["address2"];
    $email=$_REQUEST["email"];
    $address=$address1.", ".$address2.", ".$suburb.", ".$state.", ".$country." ,".$postcode;
	
    $pname=$fname."  ".$lname    ;
    $_SESSION['address']=$address;
    $_SESSION['name']=$pname;
    $_SESSION['email']=$email;  
    $_SESSION['mobile']=$mobile; 
    $_SESSION['business']=$business; 
    $_SESSION['work']=$work; 
    
  print "<table border=0>";
  print "<tr><td><font-size:45px><strong>Personal Detail</strong></td>";
  print "<tr><td >Name:</td>";
  print "<td>$pname</td>";
  print "<tr><td >Address:</td>";
  print "<td>$address</td>";
  print "<tr><td >Email: </td>";
  print "<td >$email</td>\n";

  
  print "<br><br><br>";
  
    ?>
 </div>
 
 
<div>
<!--
 action="comfirm.php" onsubmit="return validate()" 
!-->       
 <form name="form1" action="confirm.php" method="post">

<table>
   <tbody>
   <br><br>
   <tr>
   <span style="color:#F00">*</span> indicates required fields
   </tr>
   <tr>
       <th>Credit card type<span style="color:#F00">* </span></th>
           <td colspan="3"><select name="creditCardType" id="creditCardType">
             <option value="selected=&quot;selected&quot;">- please select -</option>
             <option value="Visa">Visa</option> 
             <option value="Diners">Diners</option>
             <option value="Mastercard">Mastercard</option>
             <option value="Amex">Amex</option>
             </select></td>
    </tr>

   <tr>
      <th>Credit card Number<span style="color:#F00">* </span></th>
          <td colspan="3"><input type="text" name="creditCardNumber" id="creditCardNumber" maxlength="12" required="" aria-required="true"></td>
   </tr>

    <tr>
       <th>Name on credit card<span style="color:#F00">* </span></th>
       <td colspan="3"><input type="text" name="nameCreditCard" id="nameCreditCard" required="" aria-required="true"></td>
    </tr>
    <tr>
       <th> Expiry date<span style="color:#F00">* </span></th>
      <td colspan="3">
      <input type="date" name="expiryDate" value="mm/yy" min="30-05-2016" id="expiryDate" required="" aria-required="true">

     </td>
     </tr>

      <tr>
       <th>
        Security code<span style="color:#F00">* </span>
       </th>
       <td colspan="3">
       <input type="password" name="securityCode" id="securityCode" maxlength="3" required="" aria-required="true">
      </td>
      </tr>

   </tbody></table>

        <button type="button" class="btn btn-default table-center" aria-label="Left Align" id="search_flights" onclick="history.back()">
         <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Back
           </button>

         <button type="submit" class="btn btn-default table-center" onsubmit="return validate()" ><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>Stage 3 - Review Bookings and Details</button>

    </form>

 </div>



</body>



</html>