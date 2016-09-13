<?php
  session_start();
unset($_SESSION['userInfor']); 
  
  ?>


<?php
				$F=array();
				        // print $_SESSION['cityf'][0];
				 
				   $numFlight=count($_SESSION['flightAll']);
				 //  print $numFlight;
			
				   
				   
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
		
		            
                            
		                  	 echo "Amount  of Flight:  $".	 $_SESSION["wholeprice"];
		                
		

                    //  session_destroy();



?>


