<?php
include("header.php");
//echo "<div class='container'>";
include("connection.php");
error_reporting(0);

?>
<form action=""method="POST">
   
<input  type='hidden' class="form-control" style="width:250px;" name='name' placeholder="name	" min="<?php echo $row['name'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='email' placeholder="email" min="<?php echo $row['email'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='specialisation' placeholder="specialisation" min="<?php echo $row['specialisation'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='phone' placeholder="phone" min="<?php echo $row['phone'];?>" required>
<input  type='hidden' class="form-control" style="width:250px;" name='fees' placeholder="fees" min="<?php echo $row['fees'];?>" required>
    
 <input  type='text' class="form-control" style="width:250px;" name='location' placeholder="location" min="<?php echo $row['location'];?>" required>

			
  &nbsp;&nbsp;&nbsp;<br><button type="submit" class="btn btn-danger" name='submit'>SEARCH</button><br><br>
  
  
 <h4>Drivers</h4>
    
	
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
							<div class="well" >

								<label>Name: </label><?php echo $row[name]; ?><br>
								<label>Email: </label><?php echo $row[email]; ?><br>
								<label>Specialisation: </label><?php echo $row[specialisation]; ?><br>
								<label>Phone: </label><?php echo $row[phone]; ?><br>
								<label>Location: </label><?php echo $row[location]; ?><br>
								<label>Fees: </label><?php echo $row[fees]; ?><br>

								<a href='booking2.php?id=<?php echo $row[id]?>&uid=<?php echo $id; ?>' class='btn btn-danger'>REQUEST</a>
                      
                             </div>
                             <br> <br>


									
							<?php
								}
                            
							?>  
                                
                                
        