<?php
include("header.php");
//echo "<div class='container'>";
include("connection.php");
error_reporting(0);

?>
 <h4>Requests</h4>
    
                              <?php

                              		if(isset($_REQUEST['did']))
                              		{


								$res=mysqli_query($con,"UPDATE request SET status='$_REQUEST[st]'  WHERE id='$_REQUEST[did]' ");

                              		}
								$sel="select * from request where doctor_id='$id'"; 
									
								
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{

									$sel2="select * from doctor where id='$row[doctor]'"; 
									
								
								$res2=mysqli_query($con,$sel2);
								$row2=mysqli_fetch_array($res2);

                        
							?>
							<div class="well" >

								<center>
								<label>Address: </label><?php echo $row[address]; ?><br>
								<label>Time: </label><?php echo $row[time]; ?><br>
								<label>Date: </label><?php echo $row[date]; ?><br>
								<label>Diseases: </label><?php echo $row[deseases]; ?><br>

								<?php

									if($row['status']=="REQUEST")
									{

										echo"<a href='?uid=$id&did=$row[id]&st=Accept' class='btn btn-success' > Accept</a> &nbsp;&nbsp;&nbsp;";
										echo"<a href='?uid=$id&did=$row[id]&st=Reject' class='btn btn-danger' > Reject </a>&nbsp;&nbsp;&nbsp;";
										echo"<a href='resheule.php?uid=$id&did=$row[id]&st=Reshedule' class='btn btn-primary' > Reshedule </a>";

									
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
                                
