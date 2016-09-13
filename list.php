	
	
	
	<?php
	session_start();
	
	unset($_SESSION['userInfor']); 
	
	?>
	
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Travel Agency</title>
	
	
	<script type="text/javascript">  
	
    function more()
    {   
        document.form1.action="index.php";
        document.form1.submit();
    }
    
    function checkout()
    {
    	document.form1.action="Personal.php";
        document.form1.submit();
    	}
  
    
</script>
<!--	<style>
	
	
	table  {
		background: #ffcccc;
		color:black;
		text-align:left;
		font-size:12px;
		border-spacing: 4px;
	}
	table a, table, tbody, tfoot, tr, th, td {
		font-family: Verdana, arial, helvetica, sans-serif;
	}
	table, {
		border-left:3px solid #567;
		border-right:3px solid #000;
		padding: 3px;
	}
	table a {
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
-->	
	</head>
	
	<body>
	
	
	<div>
	
	
	<?php
	  /*print "<table >";	
	  print "\t<tr><td>Seat No.</td>";
	  print "\t<td>Extra Request</td>";
	  print "\t<td>Extra Request</td>";
     print "\t<td>Extra Request</td></tr>";*/
	
	$arr1=$_POST['a'];    //用一个数组变量接受复选框中的值。
	//var_dump($arr1);  
	$arr2=$_POST['b'];
	$arr3=$_POST['c'];  
	$arr4=$_POST['d'];  
	$arr5=$_POST['e']; 
  
	         $flight=array();
					  
				if($arr1[0]=="A") 
					array_push($flight,$arr1);
	
					
					if($arr2[0]=="B") 
						array_push($flight,$arr2);
	
					if($arr3[0]=="C") 
						array_push($flight,$arr3);
					
					if($arr4[0]=="D") 
						array_push($flight,$arr4);
				
					if($arr5[0]=="E") 
						array_push($flight,$arr5);
						
						
         		    $num_ticket=count($flight);
         		   $total=$$_SESSION['priceAll']*$num_ticket;
         		  // print $_SESSION['to'];
         
         		   
         		   $_SESSION["ticket"]=$flight;
         		   $total=$_SESSION['price']*count($_SESSION["ticket"]);
         		 //  print $total;
         		   $_SESSION["totalTicket"][]=$total;
         		  //  var_dump($_SESSION['totalTicket']);
      
         		 //  var_dump($_SESSION['cityf']);
		
		       	$_SESSION["flightAll"][]=$flight;
		       	
				
					$F=array();
				        // print $_SESSION['cityf'][0];
				 
				  
				   
				  if (isset($_SESSION["flightAll"])){
							for($i=0;$i<count($_SESSION["flightAll"]);$i++) { 
							     $numa=$i+1;
							   echo "<p><b>Flight $numa</b></p>";
						      echo "From:".$_SESSION['cityf'][$i];
						      echo "    To:". $_SESSION['cityt'][$i];
						     
						      echo " Total:". $_SESSION['totalTicket'][$i];
                          
				            $F=$_SESSION["flightAll"][$i];
							    for ($row = 0; $row < count($F); $row++) {
							       	$num=$row+1;
								    	 echo "<p><b>Ticket $num</b></p>";
								    	 echo "<ul>";
									    for ($col = 0; $col < 3; $col++) {
										 echo "<dt>".$F[$row][$col]."</dt>";
										}
								   echo "</ul>";
											}
								}
								}
		
		                  $wholeprice=0;
		                  for($j=0;$j<count($_SESSION["flightAll"]);$j++) {
                               $wholeprice=$wholeprice+$_SESSION['totalTicket'][$j];      	
                              
                            } 
		                  	 echo "Amount  of Flight:  ".$wholeprice;
		                  	 $_SESSION["wholeprice"]=$wholeprice;
		
		  $numFlight=count($_SESSION['flightAll']);
		  print "<br>";
		  print "Ticket number(s):\t".$numFlight;
		?>
	
	
	
	<div >
	
<form  name="form1">
		<table >
	   <tbody>
	    <tr>
 		<td>
		<input type="submit"  value="Book more Flights"   onclick="more()"/>
		</td>
	    <td >
        <input type="reset"  value="Clear all booked flights"   onclick="clear()" />
       	</td>
			<td>
			<input type="submit"  value="Proceed to Checkout"   onclick="checkout()" />     
			</td>    
			</tr>
			</tbody>
	       </table>
  </form>
	
	
	
	</body>
	</html>
