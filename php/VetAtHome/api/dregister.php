<?php

$con = mysqli_connect("localhost","root","","vethome");

$name = $_POST['name'];
$phone = $_POST['phone'];
$spec = $_POST['spec'];
$place = $_POST['place'];
$username = $_POST['username'];
$email = $_POST['email'];
$fees = $_POST['fees'];
$password = $_POST['password'];

$sql = "INSERT INTO doctor(name,phone,address,age,username,email,fees,password) VALUES ('$name','$phone','$address','$age','$username','$email','$fees','$password')";

if(mysqli_query($con,$sql))
{
	echo "success";
}
else{
	echo "failed";
}
?>