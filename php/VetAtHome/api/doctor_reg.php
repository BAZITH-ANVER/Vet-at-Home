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
     <label>EMAIL:</label><input type="text" name="email"class='form-control'><br>
     <label>PASSWORD:</label><input type="text"name="password"class='form-control'><br>
     <label>SPECIALIZATION:</label><input type="text" name="specialization"class='form-control'><br>
	 <label>PHONE:</label><input type="text" name="phone"class='form-control'><br>
     <label>FEES:</label><input type="text" name="fees"class='form-control'><br>
     <label>USERNAME:</label><input type="text" name="username"class='form-control'><br>
     <label>LOCATION:</label><input type="text" name="location"class='form-control'><br>

   <center>  <input type="submit"name="submit" class='btn btn-danger'><center>
  </form>
     <?php
     error_reporting(0);
$con=mysqli_connect("localhost","root","","vethome");
       if(isset($_POST['submit']))
       {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $specialization=$_POST['specialization'];
        $phone=$_POST['phone'];
        $fees=$_POST['fees'];
             $username=$_POST['username'];
             $location=$_POST['location'];

        
        $ins="INSERT INTO doctor(name,email,password,specialisation,phone,fees,username,location)VALUES('$name','$email','$password','$specialization','$phone','$fees','$username','$location')";
         
		$res=mysqli_query($con,$ins);
          if($res)
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