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
     <label>NAME:</label><input type="text"name="name" class='form-control'><br>
     <label>AGE:</label><input type="text" name="age"class='form-control'><br>
     <label>BloodGroup:</label><input type="text"name="blood_group"class='form-control'><br>
     <label>status:</label><input type="time" name="status"class='form-control'><br>
   <center>  <input type="submit"name="submit" class='btn btn-danger'><center>
  </form>
     <?php
     error_reporting(0);
       include("connection.php");
       if(isset($_POST['submit']))
       {

        $name=$_POST['name'];
        $age=$_POST['age'];
        $bloodgroup=$_POST['blood_group'];
        $status=$_POST['status'];
       
        
        $ins="INSERT INTO request(name,age,bloodgroup,status)VALUES('$name','$age','$bloodgroup','$status')";
          $res= mysqli_query($con,$ins);
          if(res)
          {
echo "<script>
alert('inserted');

</script>";

          }

        }
     ?>


 </div>
  </body>
  </html>