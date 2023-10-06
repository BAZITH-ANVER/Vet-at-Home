<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
 <body>  
  <div class="container col-sm-12">
  <?php
         include("connection.php");

  $sel = "SELECT * FROM request WHERE id='$_REQUEST[id]'"; 
											//echo $sel;
										
										
										
								//$sel="select * from medicine "; 
								$res=mysqli_query($con,$sel);
								$row=mysqli_fetch_array($res);
								
		
  
  ?>
  <form action=""method="POST"><br>
  	<center><h2><b><p style = "color:green">Booking</p></b></h2></center>
	     <label>PATIENT NAME:</label><input type="text" name="uid" class='form-control'><br>

  
<!--  <input type="hidden" name="uid" value='<?php //echo $_REQUEST['uid'] ?>'>-->
   <input type="hidden" name="did" value='<?php echo $_REQUEST['id'] ?>'>
     <label>DATE:</label><input type="date" name="date"  value="<?php echo $row['date'];  ?>" readonly class='form-control'><br>
     <label>FEES:</label><input type="text" name="fees" value="<?php echo $row['fees'];  ?>"  readonly class='form-control'><br>
     

     <center>  <input type="submit"name="submit" style="width:150px;background:green;color: white;height:40px;"><center> 
  </form>
     <?php
     error_reporting(0);
       include("connection.php");
       if(isset($_POST['submit']))
       {
	
         $u = $_POST['uid'];
         $d = $_POST['did'];
        $date = $_POST['date'];
        $fees = $_POST['fees'];


        
        $ins="INSERT INTO booking(patient_id,doctor_id,date,rate,status) VALUES('$u','$d','$date','$fees','Booked')";
         $res= mysqli_query($con,$ins);
          if($res)
          {
             echo "<script>
             alert('Request Sent');

             </script>";


        }
	   }
     ?>
          


 </div>
  </body>
  </html>