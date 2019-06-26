<?php include "includes/header.php"?>
<?php include "classes/Message.php"?>
<?php include "classes/Carousel.php"?>
<?php include "classes/User.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
		<div id="contenttext">
			<?php include "includes/title.php"?>
			<div class="bodytext" style="padding:12px;" align="justify">
				
				    <form action=formRegistration.php method="POST">
						<input name='first_name' type="text" placeholder="enter first name" /></br>
						<input name='last_name' type="text" placeholder="enter last name" /></br>
						<input name='email' type="text" placeholder="enter email"/></br>
						<input name='password' type="text" placeholder="enter password" /></br>
						<input name='user_name' type="text" placeholder="enter user name"/></br>
						<input name='salte' type="text" placeholder="enter salte"/></br>
						<input type="submit" name="submit">
					</form>
					
				<?php

					if (isset($_POST["submit"])) {
						$first_name =  $_POST["first_name"];
						$last_name =  $_POST["last_name"];
						$email =  $_POST["email"];
						$password =  $_POST["password"];
						$user_name =  $_POST["user_name"];
						$salte =  $_POST["salte"];
					}

	
					$user = new User($first_name, $last_name, $email, $password, $user_name, $salte);
					// $user = new User($_POST["first_name"]);
					$user->Insert();
					
					// $cars_carousel = array("car1.jpg", "car2.jpg", "car3.jpg", "car4.jpg", "car5.jpg", "car6.jpg");
					// Carousel::Display($cars_carousel);
				?>

			</div>
				<?php include "includes/footer.php"?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>