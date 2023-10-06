<?php

$con = mysqli_connect("localhost","root","","vethome");

$email = $_POST['email'];
$password = $_POST['password'];

//$email ='anandu@gmail.com';
//$password ='2255';

$sql ="Select * from patient where email ='$email' and password ='$password'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$data[] = array('id' => $row['id']);
	echo json_encode($data);

	//echo "success";
}
else{
	echo "failed";
}
?>