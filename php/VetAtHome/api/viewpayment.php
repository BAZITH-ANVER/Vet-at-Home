<?php
include("header.php");
//include("connection.php");

?>

 <h4>View Payments</h4>
    
    <table class="table table-striped" >
                        
                         
                            <tr>
                            <th>PATIENT NAME</th>
                            <th>DATE</th>
                            <th>RATE</th>
							<th>CARD NAME</th>
                             <th>CARD NUMBER</th>
                             <th>CARD TYPE</th>
</tr>
                              <?php
                                $con = mysqli_connect("localhost","root","","vethome");  //connection query
                            
                                $sel="select * from  payment where doctor_id='1'"; 
                                    
                                $res=mysqli_query($con,$sel);
                                while($row=mysqli_fetch_array($res))
                                {
                                $sel1="select * from  patient where id='$row[patient_id]'"; 
                                $res1=mysqli_query($con,$sel1);
                                $row1=mysqli_fetch_array($res1);

                            ?>
                           <tr>
                            <td><?php echo $row1['name']?></td>
                            
                             
                            <td>
                                <?php echo $row['date']?></td>
                            
                            
                            <td><?php echo $row['rate']?></td>
							<td><?php echo $row['cardname']?></td>
                             <td><?php echo $row['cardnumber']?></td>
                             <td><?php echo $row['cardtype']?></td>

                            
                        </tr>
                            <?php
                                }
                            
                            ?>  
                                
                            
                        </table>
