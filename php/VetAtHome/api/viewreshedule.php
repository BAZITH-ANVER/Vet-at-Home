<?php
include("header.php");
//echo "<div class='container'>";
include("connection.php");
error_reporting(0);

?>
 <h4>Requests</h4>
    
                              <?php

                              		if(isset($_REQUEST['uid']))
                              		{


								$res=mysqli_query($con,"UPDATE reshedule SET status='$_REQUEST[st]'  WHERE id='$_REQUEST[did]' ");

                              		}
								$sel="select * from reshedule where patient_id='$id'"; 
									
								
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{

									$sel2="select * from doctor where id='$row[doctor_id]'"; 
									
								
								$res2=mysqli_query($con,$sel2);
								$row2=mysqli_fetch_array($res2);

                        
							?>
							<div class="well" >

								<center>
								<label>Doctor Name: </label><?php echo $row2[name]; ?><br>
								<label>Time: </label><?php echo $row[time]; ?><br>
								<label>Date: </label><?php echo $row[date]; ?><br>

								<?php

									if($row['status']=="Reshedule")
									{

										echo"<a href='?uid=$id&did=$row[id]&st=Accept' class='btn btn-success' > Accept</a> &nbsp;&nbsp;&nbsp;";
										echo"<a href='?uid=$id&did=$row[id]&st=Reject' class='btn btn-danger' > Reject </a>&nbsp;&nbsp;&nbsp;";
										echo"<a href='booking.php?uid=$id&did=$row[id]&st=Requset' class='btn btn-primary' > Request Another Doctor </a>";

									
									}
									
									
									else
									{
										echo" <label>Status: </label> $row[status]";


									}


								?>
							</center>
								
								
                      
                             </div>
                             <br> <br>


							<?php
								}
                            
							?>  
                                
