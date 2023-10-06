<html>

<?php
include("header.php");
?>
 <body>  
  <div class="container col-sm-12">
  <form action=""method="POST">
   
<input  type='hidden' class="form-control" style="width:250px;" name='name' placeholder="name	" min="<?php echo $row['name'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='email' placeholder="email" min="<?php echo $row['email'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='specialisation' placeholder="specialisation" min="<?php echo $row['specialisation'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='phone' placeholder="phone" min="<?php echo $row['phone'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='fees' placeholder="fees" min="<?php echo $row['fees'];?>" required>
    
 <input  type='text' class="form-control" style="width:250px;" name='location' placeholder="location" min="<?php echo $row['location'];?>" required>

			
  &nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name='submit'>SEARCH</button><br><br>
  
  
  
  <table class=" table boxS" >
                           
                            <tr>
							 <th>Name</th>
							<th>Email</th>
							<th>Specialisation</th>
							<th>Phone</th>
							<th>Fees</th>
							<th>Location</th>

						    </tr>
                           
  </form>
     <?php

       include("connection.php");
       if(isset($_POST['submit']))
       {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $specialisation=$_POST['specialisation'];
        $phone=$_POST['phone'];
        $fees=$_POST['fees'];
		        $location=$_POST['location'];

	   }
       
	   	if($location=="" )
										{
										
										$sel = "SELECT * FROM  doctor "; 
										}
										
										
										else{
				$sel = "SELECT * FROM doctor WHERE location LIKE '%$location%'"; 
											//echo $sel;
										}
										
										
								//$sel="select * from medicine "; 
								$res=mysqli_query($con,$sel);
								while($row=mysqli_fetch_array($res))
								{
		
	
							?>
                             <tr>
								<td><?php echo $row['name'];?></td>
								
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['specialisation'];?></td>
								<td><?php echo $row['phone'];?></td>
								<td><?php echo $row['fees'];?></td>
								<td><?php echo $row['location'];?></td>

								</tr>

								
								
								
								
								
							<?php
								}
                            
							?>  
                                
                            
                        </table>
										
									
													

      


 </div>
  </body>
  </html>