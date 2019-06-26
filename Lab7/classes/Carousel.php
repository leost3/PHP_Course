<?php 

class Carousel{
	
	public static function Display($array, $size='w-100'){
			echo '<div id="myCarousel" class="carousel slide" data-ride= "carousel" >';
			// indicators -->
			echo '<ul class="carousel-indicators">';
			$count = count($array);
			for($x=0; $x<$count; $x++ ){
				if($x == 0){
					echo '<li data-target="#myCarousel" data-slide-to ="0" class = "active"></li>';
				}else{
					echo '<li data-target="#myCarousel" data-slide-to ="'.$x.'"></li>';
				}
			}
			echo '</ul>';
			//-- The slideshow -->
			echo '<div class="carousel-inner" role="listbox">';
					
			for($x = 0; $x < $count; $x++ ){
				if($x == 0){
					echo '<div class = "carousel-item active">';
				}else{
					echo '<div class = "carousel-item">';
				}
				echo '<img src= "images/cars/'.$array[$x].'" class ="d-block '.$size.' " alt="">';
				echo '</div>';
			}
			echo '</div>';
			
			//-- Left and right controls -->
			echo '<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">';
			echo '<span class="carousel-control-prev-icon"></span>';
			echo '</a>';
			echo '<a class="carousel-control-next" href="#myCarousel" data-slide="next">';
		    echo '<span class="carousel-control-next-icon"></span>';
			echo '</a>';
			echo '</div>';
			echo '</div>';
	}
	
}


?>