<?php
session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$name= $_POST['user'];
$pass= $_POST['password'];
$s="SELECT * FROM usertable  where name='$name' ";
$result= mysqli_query($con, $s);
$num= mysqli_num_rows($result);
if($num == 1){
	echo "Username already taken";
}else{
	$reg="INSERT INTO `usertable` ('name', 'password') VALUES ('$name' , '$pass')";
	mysqli_query($con,$reg);
	echo "registration succeful";
}

?>