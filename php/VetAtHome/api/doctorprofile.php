<?php
include("header.php");
//include("connection.php");

?>

 <h4>Profile</h4>
    
    <table class="table table-striped" >
                        
                           
                              <?php
                                $con = mysqli_connect("localhost","root","","vethome");  //connection query
                            
                                $sel="select * from  doctor where id='$id'"; 
                                    
                                $res=mysqli_query($con,$sel);
                                while($row=mysqli_fetch_array($res))
                                {


                            ?>
                            <tr>
                            </tr>
                            <tr>
                            <th>NAME</th><td><?php echo $row['name']?></td>
                            </tr>
                             <tr>
                            <th>Email</th><td>
                                <?php echo $row['email']?></td>
                            </tr>
                            <tr>
                            <th>phone</th><td><?php echo $row['phone']?></td></tr>
							 <tr><th>Address</th><td><?php echo $row['location']?></td></tr>
                             <tr><th>Specialisation</th><td><?php echo $row['specialisation']?></td></tr>

                            
                        
                            <?php
                                }
                            
                            ?>  
                                
                            
                        </table>
