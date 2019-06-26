<?php include "includes/header.php"?>
<?php include "classes/Message.php"?>
<?php include "classes/User.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
		<div id="contenttext">
			
			<div class="bodytext" style="padding:12px;" align="justify">
				
				<?php
				//Boostrap Template
				//https://bootsnipp.com/snippets/vl4R7
				
					if(isset($_POST["Submit"])){
						
						
						$Username = $_POST["Username"];
						$Password = $_POST["Password"]; 
						
						if( User::Login($Username, $Password) ){
							Message::Show("Your are successfully logged-in !", Message::$Full_Size, Message::$Success);
						}else{
							Message::Show("Your Username and Password do not match with our records !", Message::$Full_Size, Message::$Error);
						}
						
					}
				?>
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<!-- Card Header -->
			<div class="card-header">
				<div class="row justify-content-md-center"><img src="images/user-password.png" height="100px" width="100px;"></div>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<form action = "#" method = "POST">
					<!-- Username -->
					<div class="input-group form-group">
						<div class="input-group-prepend"><span class="input-group-text">
						<i class="fa fa-user"></i></span></div><input type="text" name="Username" placeholder="Username" class="form-control" required />	
					    <font color="red"><b>*</b></font>
					</div>
					<!-- Password -->
					<div class="input-group form-group">
						<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key"></i></span></div>
						<input type="password" name="Password" placeholder="Password"  class="form-control" required />
						<font color="red"><b>*</b></font>
					</div>
					<!-- Remember Me -->
					<div class="row align-items-center remember"><input type="checkbox" name="Remember_Me" >Remember Me</div>
					<!-- Submit -->
					<div class="form-group">
						<input type="submit" name="Submit" value="Login" class="btn btn-danger float-right ">
					</div>
				</form>
			</div>
			<!-- Card Footer -->
			<div class="card-footer">
				<div class="d-flex justify-content-center links">Don't have an account?<a href="#">Sign Up</a></div>
				<div class="d-flex justify-content-center"><a href="#">Forgot your password?</a></div>
			</div>
		</div><!-- End Card -->
	</div>
	</div><!-- End Container -->
				
	</div><!-- End Bodytext -->
		</div>
			<?php include "includes/footer_menu.php"?>
		</div>
	</div>
<?php include "includes/footer_links.php"?>