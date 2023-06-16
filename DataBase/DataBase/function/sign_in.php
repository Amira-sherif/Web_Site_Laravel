<?php 
if(isset($_POST['submit'])){
	session_start();
	include 'connection.php';
$username = $_POST['username'];
$password = ($_POST['password']);

$select_admin = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result_admin = $connect->query($select_admin);
$count = $result_admin->num_rows;

if($count > 0){
	$_SESSION['username'] = $username;
	echo $_SESSION['username'];
	header("Location: ../index.php");

}else
{
header("Location:../login.php");
}
}
?>







