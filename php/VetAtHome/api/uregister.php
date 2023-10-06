<?php

$con = mysqli_connect("localhost","root","","vethome");

$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$age = $_POST['age'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO patient(name,phone,address,age,username,email,password) VALUES ('$name','$phone','$address','$age','$username','$email','$password')";

if(mysqli_query($con,$sql))
{
	echo "success";
}
else{
	echo "failed";
}
?>