	
	
	
	<?php
	session_start();
	
	unset($_SESSION['userInfor']); 
	
	?>
	
	<html>
	<head>
	<meta charset="UTF-8">
	<title>Travel Agency</title>
	<style>
	
	
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
	
	</head>
	
	<body>
	
	
	<div>
	
	
	<?php 
  
	  print "<table >";	
	  print "\t<tr><td>Seat No.</td>";
	  print "\t<td>Extra Request</td>";
	  print "\t<td>Extra Request</td>";
     print "\t<td>Extra Request</td></tr>";
  
     if(isset($_POST["addToBook"])) { 
     
     	echo $_POST['from']."<br>";
echo $_POST['to']."<br>";
echo $_POST['price']."<br>";
echo $_POST['route']."<br>";

	$flights['route'] = $_POST['route'];
	$flights['price'] = $_POST['price'];
	$flights['from'] = $_POST['from'];
	$flights['to'] = $_POST['to'];
	$ctr = 0;
	for($i=0;$i<5;$i++){
	
		foreach($_POST['a'] as $selected){
			   echo $selected['child']."</br>";
			   	if($selected['child'])
			   		$flights['seats'][$ctr++]['child'] = "child";
			   	if($selected['Wheelchair'])
			   		$flights['seats'][$ctr++]['Wheelchair'] = "Wheelchair";
			if($selected['Wheelchair'])
			   		$flights['seats'][$ctr++]['Wheelchair'] = "Wheelchair";
			   		
			}
		
		//if($_POST['a[0]'] == TRUE)	
		// $flights['seats'][$ctr++]['child'] = TRUE;
		 //$flights['seats'][$ctr++]['chair'] = TRUE;
		 //$flights['seats'][$ctr++]['diet'] = FALSE;
	}	
	//$_SESSION["flights"][count($_SESSION["flights"])] = $flights;	
     
	
	$arr1=$_POST['a'];    //用一个数组变量接受复选框中的值。
	//var_dump($arr1);  
	$arr2=$_POST['b'];
	$arr3=$_POST['c'];  
	$arr4=$_POST['d'];  
	$arr5=$_POST['e'];  
	$fromc=$_POST['from'];
    
	  
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

				var_dump($flight);
				
				
				//var_dump($flight);	
	     //	$_SESSION["flightAll"][]=$flight;
	     	}
				
					$F=array();
				        // print $_SESSION['cityf'][0];
				 
				   $numFlight=count($_SESSION['cityAll']);
				  if (isset($_SESSION["flightAll"])){
							for($i=0;$i<count($_SESSION["flightAll"]);$i++) { 
							     $numa=$i+1;
							   echo "<p><b>Flight $numa</b></p>";
						      echo "From:".$_SESSION['cityf'][$i];
						      echo "    To:". $_SESSION['cityt'][$i];
						      echo " Total:". $_SESSION['priceAll'][$i];
                          
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
								
							
									
							
	//$num_ticket=count($_SESSION['flight']);
	//$total=$_SESSION['price']*$num_ticket;
	
		
	
	
		
		?>
	
	
	
	<div >
	<table align="center" width="598" height="94" border="0" cellspacing="0">
	<tbody>
	<tr>
				<td>
			<form method="post" action="index.html" >
				<input type="submit"  value="Book more Flights"  name="Flights" />
				</form>
				</td>
				<td >
				<form method="post" action="index.html">
				<input type="reset"  value="Clear all booked flights"  name="Clear" />
				</form>      
				</td>
	
			<td><input type="submit" name="clear" value="Clear" onclick="{if(confirm('Do you want to clear your shopping cart?')) {return true;} return false;}"></td>
	     
				<td>
				<form method="post" action="Personal.php" >
				<input type="submit"  value="Proceed to Checkout"  name="Checkout" />
				</form>      
				</td>    
				</tr>
				</tbody>
	
	  
	</div>
	
	
	
	
	</body>
	</html>
