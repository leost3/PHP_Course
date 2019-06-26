<?php
class Carousel {
    public static function DisplayCarousel($cars_carousel) {
        
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
				
				// <!-- The slideshow -->
				
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
				
				// <!-- Left and right controls -->
				echo '<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
				</div>';
    }
}