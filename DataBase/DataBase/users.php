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
						<h1 class="float-left text-center text-md-left">Users</h1>
				
				
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a  href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
							<?php 
if(!isset($_GET['do'])){
	include 'view/view_user.php';
}elseif($_GET['do'] == "add"){
	include 'view/add_user.php';
}
elseif($_GET['do'] == "edit"){
	include 'view/edit_user.php';
}
elseif($_GET['do'] == "details"){
	include 'view/view_details.php';
	
}
?>
								
				</section>
			</main>
	
		</div>
	</div>
	<?php
	include 'iti/footer.php';
 ?>
