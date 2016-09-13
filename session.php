<?php
session_start();


	//unset($_SESSION["flights"]);when check out
	 
	addToCart();
	 
	$flights1 = array('route'=>10,
					'price'=>120,
					'seats'=>array(array('child'=>TRUE,'chair'=>TRUE,'diet'=>TRUE),
					               array('child'=>FALSE,'chair'=>TRUE,'diet'=>TRUE)
					));	
	
	$flights2 = array('route'=>12,
					'price'=>120,
					'seats'=>array(array('child'=>TRUE,'chair'=>TRUE,'diet'=>TRUE),
					               array('child'=>FALSE,'chair'=>TRUE,'diet'=>TRUE),
								   array('child'=>FALSE,'chair'=>TRUE,'diet'=>TRUE)
				));

	

				
	$_SESSION["flights"][count($_SESSION["flights"])] = $flights1;
	$_SESSION["flights"][count($_SESSION["flights"])] = $flights2;
	
	echo "<h1>Booking details </h1><br>";
	printCart();
	echo "<h1>Updating booking with route number equal to 3 </h1><br>";
	updateCart(3);
	echo "<h1>Booking details after updating</h1><br>";
	printCart();
	echo "<h1>delete  booking with route number equal to 10 </h1><br>";
	deleteCart(10);
	echo "<h1>Booking details after deleting</h1><br>";
	printCart();
	
	
function deleteCart($route){
	for($i=0; $i<count($_SESSION["flights"]);$i++){
		if($_SESSION["flights"][$i]['route'] === $route){
			unset($_SESSION["flights"][$i]);
			$_SESSION["flights"] = array_values($_SESSION["flights"]);			
			return;			
		}
	}	
}	
	
function updateCart($route){
	for($i=0; $i<count($_SESSION["flights"]);$i++){
		if($_SESSION["flights"][$i]['route'] === $route){
			$flights['route'] = 3;
			$flights['price'] = 124;
			for($j=0;$j<2;$j++){	
				$flights['seats'][$j]['child'] = TRUE;
				$flights['seats'][$j]['chair'] = FALSE;
				$flights['seats'][$j]['diet'] = TRUE;
			}
			$_SESSION["flights"][$i] = $flights;	
			return;			
		}
	}
	
}	

function printCart(){
	$spaces = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		
	for($i=0; $i<count($_SESSION["flights"]);$i++){
		echo "Flight number ". ($i+1)." <br>";
		echo "$spaces Route number is :".$_SESSION["flights"][$i]['route']."<br>";
		
		$seats = $_SESSION["flights"][$i]['seats'];
		echo "$spaces selected seats <br>";
		for($j=0; $j<count($seats);$j++){
			$currentSeat = $seats[$j];
			 
			foreach($currentSeat as $key=>$value)
				echo "$spaces $spaces $key  $value ";
			echo "<br>";

		}			
	}
}	
function addToCart(){		
	$flights['route'] = $_POST['route'];
	$flights['price'] = $_POST['price'];
	$flights['from'] = $from;
	$flights['to'] = $to;
	$ctr = 0
	for($i=0;$i<5;$i++){
		if($_POST['a'] == TRUE)	
		 $flights['seats'][$ctr++]['child'] = TRUE;
		 $flights['seats'][$ctr++]['chair'] = TRUE;
		 $flights['seats'][$ctr++]['diet'] = FALSE;
	}	
	$_SESSION["flights"][count($_SESSION["flights"])] = $flights;	
}

?>
