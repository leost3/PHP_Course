<?php include "includes/header.php"?>
<?php include "includes/array_functions.php"?>
<?php include "includes/sorting_functions.php"?>

<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<div id="contenttext">
				<?php include "includes/title.php"?>
				<div class="bodytext" style="padding:12px;" align="justify">
				
				<div class="bodytext" style="padding:12px;" align="justify">
					<?php
						$carCarousel = array("car1.jpg", "car2.jpg", "car3.jpg","car4.jpg","car5.jpg","car6.jpg")
					?>
					<div id="myCarousel" class ="carousel slide" data-ride = "carousel">
						<!-- indicators -->

						<?php 
							echo '<ul class = "carousel-indicators">';
							$count = count($carCarousel);
							for ($i=0; $i <$count ; $i++) { 
								if ($i == 0) 
									echo '<li data-target = "#myCarousel" data-slide-to = "0" class = "active"> </li>';
								else
									echo '<li data-target = "#myCarousel" data-slide-to = "'.$i.'" class = "active"> </li>';	
								
							}
							echo '</ul>';
						?>

						<?php 
							echo '<div clas= "carousel-inner">';
							for ($i=0; $i <$count ; $i++) { 
								if ($i == 0)
									echo '<div class= "carousel-item active">';
								else
									echo '<div class= "carousel-item">';
								echo '<img src = "images/'.$carCarousel[$i].'"	height="400 width="600"	/>';
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
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>