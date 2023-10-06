<?php
include("header.php");
//include("connection.php");

?>

 <h4>View Feedback</h4>
    
    <table class="table table-striped" >
                        
                         
                            <tr>
                            <th>NAME</th>
                            <th>COMPLAINTS</th>
                            <th>FEEDBACK</th>
							
</tr>
                              <?php
                                $con = mysqli_connect("localhost","root","","vethome");
                            
                                $sel="select * from feedback_tbl"; 
                                    
                                $res=mysqli_query($con,$sel);
                                while($row=mysqli_fetch_array($res))
                                {
                                

                            ?>
                           <tr>
                            <td><?php echo $row['name']?></td>
                            
                             
                            <td><?php echo $row['complaint']?></td>
                            
                            
                            <td><?php echo $row['feedback']?></td>
						     
                        </tr>
                            <?php
                                }
                            
                            ?>  
                                
                            
                        </table>
