<?php include "includes/header.php"?>
<?php include "includes/array_functions.php"?>
<?php include "includes/sorting_functions.php"?>
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
			<?php include "includes/footer.php"?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>