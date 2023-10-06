<?php

$con = mysqli_connect("localhost","root","","vethome");

$email = $_POST['email'];
$password = $_POST['password'];

//$email = "amal@gmail.com";
//$password = "222";

$sql ="Select * from doctor where email ='$email' and password ='$password'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$data[] = array('id' => $row['id']);
	echo json_encode($data);
}
else{
	echo "failed";
}
?>