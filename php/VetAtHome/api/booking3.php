<?php
include("header.php");
//echo "<div class='container'>";
include("connection.php");
error_reporting(0);

?>

  
 <h4>Booking Details</h4>
    
	
                              <?php

								 include("connection.php");
  
										
										$sel = "SELECT * FROM  request where status='Accept'"; 
										
										
										
										
										
										
								//$sel="select * from medicine "; 
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
		
                        
							?>
							<div class="well" >

								<label>Doctor_id: </label><?php echo $row[doctor_id]; ?><br>
								<label>Patient_id: </label><?php echo $row[patient_id]; ?><br>
								<label>Date: </label><?php echo $row[date]; ?><br>
								<label>Time: </label><?php echo $row[time]; ?><br>
								<label>Fees: </label><?php echo $row[fees]; ?><br>
								<label>Diseases: </label><?php echo $row[deseases]; ?><br>
								<label>Address: </label><?php echo $row[address]; ?><br>

								<a href='book.php?id=<?php echo $row[id]?>&uid=<?php echo$_REQUEST[id] ?>' class='btn btn-danger'>BOOK NOW</a>
                      
                             </div>
                             <br> <br>


									
							<?php
								}
                            
							?>  
                                
                                
        