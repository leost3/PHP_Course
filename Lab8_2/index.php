<?php include "includes/header.php"?>
<?php include "classes/Message.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
		<div id="contenttext">
			<?php include "includes/title.php"?>
			<div class="bodytext" style="padding:12px;" align="justify">
				
				<?php
				    Message::Show("Welcome!");
					Message::Show("Wrong Page", Message::$Medium_Size, Message::$Error);
					Message::Show("There was a problem with your network", Message::$Big_Size, Message::$Warning);
					Message::Show("The problem is solved", Message::$Small_Size, Message::$Success);
					
					$cars_carousel = array("car1.jpg", "car2.jpg", "car3.jpg", "car4.jpg", "car5.jpg", "car6.jpg");
				?>
				<div id="myCarousel" class="carousel slide" data-ride= "carousel" >
				<!-- indicators -->
				<?php
					echo '<ul class="carousel-indicators">';
					$count = count($cars_carousel);
					for($x=0; $x<$count; $x++ ){
						if($x == 0){
							echo '<li data-target="#myCarousel" data-slide-to ="0" class = "active"></li>';
						}else{
							echo '<li data-target="#myCarousel" data-slide-to ="'.$x.'"></li>';
						}
					}
					echo '</ul>';
				?>
				<!-- The slideshow -->
				<?php
					echo '<div class="carousel-inner" role="listbox">';
					
					for($x = 0; $x < $count; $x++ ){
						if($x == 0){
							echo '<div class = "carousel-item active">';
						}else{
							echo '<div class = "carousel-item">';
						}
						echo '<img src= "images/cars/'.$cars_carousel[$x].'" class ="d-block w-100" alt="">';
						echo '</div>';
					}
					echo '</div>';
				?>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
				</div>
			</div>
		</div>
			<?php include "includes/footer_menu.php"?>
		</div>
	</div>
	<?php include "includes/footer_links.php"?>