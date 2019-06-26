<?php 
class Car{
	
	public static function Display($array){
	
		echo "<table border = '0'>";
		
		foreach($array as $key => $row){
			echo "<tr>";
			
				echo "<td>";
				echo '<img src= "images/cars/'.$row['Image']." \" height = 'auto' width = '250px'>";
				echo "</td>";
				//--------------------------
				echo "<td>";
				echo "<font color = #CC0000>";
				echo "<h3>". $row['Year']." , ".$row['Make']." ". $row['Model']. " , ". $row['Color']."</h3>";
				echo "</font>";
				
				if($row['Old_Price'] > 0){
				
					echo "<del style = \"color:#CC0000;\"> ";
					echo '<h4 style = "color:#A9A9A9;">'.$row['Old_Price'];
					echo "</h4></del>";
					
				}
				echo "<h4> $". $row['Price']."</h4>";
				echo "<h4>". $row['KM']." KM</h4>";
				echo "</td>";
				
			
			echo "</tr>";
		}
		echo "</table>";
	}
	
	
}
?>