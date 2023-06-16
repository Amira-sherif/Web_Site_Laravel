<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$password = ($_POST['password']);
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = date("Y-m-d");


	$insert_user = "INSERT INTO user( first_name, last_name, address, gender, u_date, password, email, phone) VALUES ('$firstname','$lastname','$address','$gender','$date','$password','$email','$phone')";
	$connect->query($insert_user);
	header("Location: ../users.php");
}
?>