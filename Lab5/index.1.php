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
					<?php 
						$cars_carousel = array("car1.jpg","car2.jpg","car3.jpg","car4.jpg","car5.jpg","car6.jpg");
					?>
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- indicators -->
						<?php 
							echo "<ul class='carousel-indicator'>";
							$count = count($cars_carousel);
							for ($x=0; $x < $count; $x++) {
								if ($x == 0) {
									echo "<li data-target='#myCarousel' data-slide-to='0' class='active'></li>";
									
								}else {
									echo "<li data-target='#myCarousel' data-slide-to='$x' class='active'></li>";
									
								}
							}
							echo"</ul>";
						?>
						<!-- The Slideshow -->
						<?php 
							echo "<ul class='carousel-inner'>";
							for ($x=0; $x < $count; $x++) {
								if ($x == 0) {
									echo "<div class='carousel-item active'";
									
									
								}else {
									echo "<div class='carousel-item'>";
									
								}
								echo '<img src="./images/cars/'.$cars_carousel[$x].'" class=""alt=>';
								echo "</div>";
							}
						?>
						<!-- T -->
						<a class="carousel-control-prev" href="#myCarousel" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
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