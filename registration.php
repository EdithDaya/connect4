<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$name = $_POST['user'];
$password= $_POST['Password'];

$s= "select * from usertable where name = '$name' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "Try another username";
}else{
	$reg="insert into usertable(name , password) values ('$name' , '$password')";
	mysqli_query($con,$reg);
	echo"Success!";
}

 ?>