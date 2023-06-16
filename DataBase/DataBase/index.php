<?php
session_start();
if(!isset($_SESSION['username'])){

   header("location:login.php");
}
else
{
include 'iti/slidebar.php';
include 'function/connection.php';}
 ?>

			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Admin</h1>
					</div>
	
					
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<div class="username mt-1">
							<h4 class="mb-1"><?php
	                       echo $_SESSION['username'];
							?></h4>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
						     <a class="dropdown-item" href="login.php"class="logout-button"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
						
 
					
	<?php 
if(!isset($_GET['do'])){
	include 'view/view_admin.php';

}elseif($_GET['do'] == "add"){
	include 'view/Add_admin.php';
}elseif($_GET['do'] == "edit"){
	include 'view/edit_admin.php';
}

?>
?>
	<?php
	include 'iti/footer.php';
 ?>

  
