<?php include "includes/header.php"?>
<?php include "includes/arrayFunctions.php"?>
<?php include "includes/sortFunctions.php"?>

<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<?php include "includes/title.php"?>
			<div id="contenttext">
			<?php 
			$selected = 0;
			?>
			<form action='#' method="POST">
				<select name="sort" onChange=this.form.submit() >
					<option value="0" <?php if($selected == 0) echo 'selected' ?> >Not sorted</option>
					<option value="1" <?php if($selected == 1) echo 'selected' ?> >Model</option>
					<option value="2" <?php if($selected == 1) echo 'selected' ?> >Price: High to Low</option>
					<option value="3" <?php if($selected == 1) echo 'selected' ?> >Price: Low to High</option>
					<option value="4">Km: High to Low</option> 
					<!-- <option value="Year: new to Old">Year: new to Old</option>
					<option value="Year: Old to New">Year: Old to New</option> -->
				</select>
				<!-- <button type="submit" name="submit">submit</button> -->
			</form>
			<?php 
				if (isset($_POST["sort"])) {
					switch($_POST["sort"]) {
						case 1: ksort($cars);
								break;
						case 2: sortByPrice_High_Low($cars);
								break;
						case 3: sortByPrice_Low_High($cars);
								break;
						case 4: sortByKm($cars);
								break;
					}
			} 
			?>

				<table border="0">
						<div class="bodytext" style="padding:12px;" align="justify">
						<?php
						if (isset($_POST["sort"])) {
							$selected = $_POST["sort"];	
						} 


						Display($cars);
						
						?>
					</div>
				</table>
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>
</body>
</html>
			<!-- $cars = array
             ("Jeep" => array("Year" => 2014, "Make" =>"Jeep","Model" =>"Grand-Cherokee","Old_Price" => 48314, "Price"=>38500,"KM"=> "70","Color" => "Black", "Image" =>"Jeep.jpg"),

              "BMW" => array("Year" => 2016, "Make" =>"Jeep","Model" =>"X5 M","Old_Price" =>0, "Price"=>126000,"KM"=> "90","Color" =>"White", "Image" =>"BMW.jpg"),

              "Acura" => array("Year" => 2015, "Make" =>"ACURA","Model" =>"MDX","Old_Price" =>60876, "Price"=>54399,"KM"=> 50000,"Color" =>"Black", "Image" =>"Acura.jpg"),

              "Honda" => array("Year" => 2016, "Make" =>"Honda","Model" =>"Pilot","Old_Price" =>46320, "Price"=>44999,"KM"=> "60","Color" =>"Silver", "Image" =>"Honda.jpg"),

              "Audi" => array("Year" => 2015, "Make" =>"Audi","Model" =>"Q3","Old_Price" => 0, "Price"=>30988,"KM"=> "40000","Color" =>"Black", "Image" =>"Audi.jpg")

    		); -->