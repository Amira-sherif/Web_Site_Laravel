
<?php if($row_one_user['gender']=="Male"){echo 0;}else{echo 1;};?>
<?php 
if(isset($_POST['submit'])){
include 'connection.php';
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = ($_POST['password']);
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$update_user = "UPDATE user SET first_name = '$firstname',last_name = '$lastname', password = '$password', gender = '$gender',   address = '$address', email = '$email',phone = '$phone' WHERE id =  $id";
$connect->query($update_user);
header("Location:../users.php");

}


?>