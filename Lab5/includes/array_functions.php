<?php
$cars = array("Jeep"=> array("Year"=>2014, "Make"=>"Jeep" , "Model" =>"Grand-Cherokee", "Old_Price"=>48314 , "Price"=>38500 , "KM"=>70000, "Color"=>"Black" , "Image"=>"Jeep.jpg" ),
              "BMW"=>  array("Year"=>2016, "Make"=>"BMW" , "Model" =>"X5 M", "Old_Price"=>0 , "Price"=>126000 , "KM"=>90, "Color"=>"White" , "Image"=>"BMW.jpg" ),
			  "Acura"=>array("Year"=>2015, "Make"=>"Acura" , "Model" =>"MDX", "Old_Price"=>60876 , "Price"=>54399 , "KM"=>50000, "Color"=>"Black" , "Image"=>"Acura.jpg" ),
			  "Honda"=>array("Year"=>2016, "Make"=>"Honda" , "Model" =>"Pilot", "Old_Price"=>46320 , "Price"=>44999 , "KM"=>60, "Color"=>"Silver" , "Image"=>"Honda.jpg" ),
			  "Audi"=> array("Year"=>2015, "Make"=>"Audi" , "Model" =>"Q3", "Old_Price"=>0 , "Price"=>30988 , "KM"=>40000, "Color"=>"Black" , "Image"=>"Audi.jpg" )
			  );
			  
function Display($array){
	
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
?>