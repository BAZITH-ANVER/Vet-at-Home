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

  $sel = "SELECT * FROM booking WHERE id='$_REQUEST[id]'"; 
											//echo $sel;
										
										
										
								//$sel="select * from medicine "; 
								$res=mysqli_query($con,$sel);
								$row=mysqli_fetch_array($res);
								
		
  
  ?>
  <form action=""method="POST"><br>
  	<center><h2><b><p style = "color:green">Payment Details</p></b></h2></center>
	     <label>PATIENT NAME:</label><input type="text" name="uid" class='form-control'><br>

  
<!--  <input type="hidden" name="uid" value='<?php //echo $_REQUEST['uid'] ?>'>-->
   <input type="hidden" name="did" value='<?php echo $_REQUEST['id'] ?>'>
     <label>DATE:</label><input type="date" name="date"  value="<?php echo $row['date'];  ?>" readonly class='form-control'><br>
     <label>FEES:</label><input type="text" name="fees"  value="<?php echo $row['rate'];  ?>" readonly class='form-control'><br>
      <label>CARD NAME:</label><input type="text" name="cardname"  class='form-control'><br>
     <label>CARD NUMBER:</label><input type="text" name="cardnumber" class='form-control'><br>
     <label>CARD TYPE:</label><select class='form-control' name="cardtype"><option>--select--</option>
	 <option value="Debite">Debit</option>
	 <option value="Credit">Credit</option>
	 
	 </select>
	 <br>
	   <label>CARD MONTH:</label><select class='form-control' name="cardmonth"><option>--select--</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	<option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 	 <option value="7">7</option>

	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	 <option value="11">11</option>
	 <option value="12">12</option>

	 </select>
	 <br>
	   <label>CARD YEAR:</label><select class='form-control' name="cardyear"><option>--select--</option>
	 <option value="2021">2021</option>
	 <option value="2022">2022</option>
	 	 <option value="2023">2023</option>
	 <option value="2024">2024</option>
	 <option value="2025">2025</option>

	 </select>
	 <br>
     <label>CVV:</label><input type="text" name="cvv"  class='form-control'><br>


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
        $cardname = $_POST['cardname'];
        $cardnumber = $_POST['cardnumber'];
        $cardtype = $_POST['cardtype'];
        $cardmonth = $_POST['cardmonth'];
        $cardyear = $_POST['cardyear'];
        $cvv = $_POST['cvv'];

        
        $ins="INSERT INTO payment(patient_id,doctor_id,date,rate,cardname,cardnumber,cardtype,cardmonth,cardyear,cvv) VALUES('$u','$d','$date','$fees','$cardname','$cardnumber','$cardtype','$cardmonth','$cardyear','$cvv')";
                 $ins="update booking set status='paid' where id='$_REQUEST[id]'";

		 $res= mysqli_query($con,$ins);
          if($res)
          {
             echo "<script>
             alert('Payment Successfully Completed');

             </script>";


        }
	   }
     ?>
          


 </div>
  </body>
  </html>