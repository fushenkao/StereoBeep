<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'stereobeep';

$con = mysqli_connect($host,$username,$password,$database);
$name = $_POST['your_name'];
$email = $_POST['your_email'];
$mobile = $_POST['your_number'];
$u_name = $_POST['your_username'];
$p_word = $_POST['your_password'];
$acc_no = $_POST['your_accountno'];

$sql = "INSERT INTO register(Name,Email,MobileNo,Username,Password,AccNo) VALUES('$name','$email','$mobile','$u_name','$p_word','$acc_no')";
$submit = mysqli_query($con,$sql);
if($submit == 1){
	header('location: home.html');
}
else{
	echo mysqli_error($con);
}
?>