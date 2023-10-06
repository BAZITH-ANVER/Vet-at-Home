
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
  <form action=""method="POST"><br>
 <center><h2><b><p style = "color:blueviolet;"> Feedback</p></b></h2></center>
     <input type="hidden"name="userid" value='<?php echo $id; ?>' class='form-control'><br>
     <label>COMPLAINT:</label><textarea name="complaint"class='form-control'></textarea><br>
    <label>FEEDBACK:</label><textarea name="feedback"class='form-control'></textarea><br>
     <center>  <input type="submit"name="submit" style="width:150px;background:blueviolet;color: white;height:40px;"><center> 

   
  </form>
     <?php
     error_reporting(0);
       include("connection.php");
       if(isset($_POST['submit']))
       {

        $name=$_POST['name'];
        $complaint=$_POST['complaint'];
        $feedback=$_POST['feedback'];
        

        
        $ins="INSERT INTO feedback_tbl(name,complaint,feedback)VALUES('$name','$complaint','$feedback')";
         $res= mysqli_query($con,$ins);
          if($res)
          {
             echo "<script>
               alert('feedback Submitted');

               </script>";

          }

        }
     ?>


 </div>
  </body>
  </html>