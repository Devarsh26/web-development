<?php

$con=mysqli_connect('localhost','root');

if($con){
	echo"Connection Successful";
} else{
	echo"No connection";
}

mysqli_select_db($con,'careerform');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$city = $_POST['city'];
$aboutyou = $_POST['aboutyou'];



$query = "insert into careertable (first_name, last_name, gender, dob, phone, email, city, aboutyou) values('$first_name','$last_name','$gender','$dob','$phone','$email','$city','$aboutyou')";

mysqli_query($con,$query);

header("location:Home.html");

?>