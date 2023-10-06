<?php
include("header.php");
//echo "<div class='container'>";
include("connection.php");
error_reporting(0);

?>

  
 <h4>View Booking</h4>
    
	
                              <?php

										
				$sel = "SELECT * FROM booking WHERE patient_id ='1' and status='Booked'"; 
											//echo $sel;
										
										
										
								//$sel="select * from medicine "; 
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
						$sel1 = "SELECT * FROM doctor WHERE id ='$row[doctor_id]'"; 
						$res1=mysqli_query($con,$sel1);
						$row1=mysqli_fetch_array($res1);
                        
							?>
							<div class="well" >

								<label>Doctor Name: </label><?php echo $row1[name]; ?><br>
								<label>Rate: </label><?php echo $row[rate]; ?><br>
								<label>Date: </label><?php echo $row[date]; ?><br>
								
								<a href='payment.php?id=<?php echo $row[id]?>&uid=<?php echo '1' ?>' class='btn btn-danger'>PAY</a>
                      
                             </div>
                             <br> <br>


									
							<?php
								}
                            
							?>  
                                
                                
        