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
				<form action="#" method="post">
					First Name
					<input name='firstName' ></br>
					Last Name
					<input name='lastName' ></br>
					Email
					<input name='email' ></br>
					<input type="submit" name="submit">
				</form>
			
			<?php
			$var = "6547";
			$var++;
			$var--;
			echo "$var";
			echo "ssssssssssssssssssssssssssssssssssss"; 
			if(isset($_POST['submit'])) {
				echo "first name is".$_POST['firstName']."</br>";
				echo "last name is".$_POST['lastName']."</br>";
				echo "email is".$_POST['email']."</br>";

				$cars = array('ACURA.jpg','Audi.jpg','BMW.jpg');
				
				for ($x=0; $x< count($cars);$x++) {
					echo $cars[$x];
					echo '<img src= "images/cars/'.$cars[$x].'">';
				}
			}
			?>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>