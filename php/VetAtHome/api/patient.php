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
     <label>ADDRESS:</label><input type="text" name="address"class='form-control'><br>
	 <label>PHONE:</label><input type="text" name="phone"class='form-control'><br>
     <label>AGE:</label><input type="text" name="age"class='form-control'><br>
     <label>USERNAME:</label><input type="text" name="username"class='form-control'><br>

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
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $age=$_POST['age'];
             $username=$_POST['username'];

        
        $ins="INSERT INTO patient(name,email,password,address,phone,age,username)VALUES('$name','$email','$password','$address','$phone','$age','$username')";
         
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