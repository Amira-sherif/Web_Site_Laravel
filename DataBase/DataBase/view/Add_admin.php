<?php
include 'iti/slidebar.php';


?>
<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
			
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-md-12 col-lg-8">
					
<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-12">
								<div class="card mb-4" style="width:540px;">
									<div class="card-block">
										<h3 class="card-title">Inputs</h3>
										<form class="form" action="function/add_admin.php" method="post"  enctype="multipart/form-data">
											<div class="form-group row" >
												<label class="col-md-3 col-form-label" >UserName</label>
												<div class="col-md-9">
													<input type="text" name="username" class="form-control" placeholder="Username" >
												</div>
											</div>
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Password</label>
												<div class="col-md-9">
													<input class="form-control" type="password" name="password" placeholder="Password">
												</div>
											</div>
                                            <div class="form-group row">
												<label class="col-md-3 col-form-label">Image</label>
												<div class="col-md-9">
													<input class="form-control" type="file" name="image">
												</div>
											</div>
<br>
                                            <input class="btn btn-primary" type="submit" name="submit" value="Add">

                                            
                                            </form>
                                         </div> </div></div>
                                        </section>
                                     </div>
                                     </section>
                                     </section>
                                     </div>
                                     </section>
                                     </div>

										
											
						

<?php
include 'iti/footer.php';
?>