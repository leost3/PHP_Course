<?php include "includes/header.php"?>
<?php include "classes/Car.php"?>
<?php include "classes/Sorting.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<div id="contenttext">
		
				<div class="bodytext" style="padding:12px;" align="justify">
					
				<?php 
					$cars = array("Jeep" =>array("Year"=>2014 , "Make"=> "Jeep", "Model"=> "Grand-Cherokee","Old_Price"=>48314, "Price"=> 38500, "KM"=> 70000, "Color"=> "BLACK", "Image"=>"Jeep.jpg"),
					              "BMW"  =>array("Year"=>2016 , "Make"=> "BMW" , "Model"=> "X5-M" ,"Old_Price"=>0, "Price"=> 126000, "KM"=>90 , "Color"=>"White" , "Image"=>"BMW.jpg"),
								  "Acura"=>array("Year"=>2015 , "Make"=> "MDX" , "Model"=> "60876","Old_Price"=>60876, "Price"=> 54399 , "KM"=> 50000 , "Color"=> "BLACK", "Image"=>"ACURA.jpg" ),
								  "Honda"=>array("Year"=>2016 , "Make"=>"Honda", "Model"=> "Pilot","Old_Price"=>46320, "Price"=> 44999 , "KM"=> 60 , "Color"=> "Silver", "Image"=>"Honda.jpg" ),
								  "Audi" =>array("Year"=>2015 , "Make"=>"Audi" , "Model"=> "Q3 "  ,"Old_Price"=>0, "Price"=> 30988 , "KM"=> 40000 , "Color"=> "BLACK", "Image"=>"Audi.jpg" ));
					$selected = 0;
					if(isset($_POST["v_sort"])){
						$selected = $_POST["v_sort"];
						switch($selected){
							case 1: Sorting::ASort_Ascending_Order($cars,'Model' );
									break;
							case 2: Sorting::ASort_Descending_Order($cars,'Price' );
									break;
							case 3: Sorting::sortIncremental($cars, 'Price');
									break;
							case 4: Sorting::ASort_Descending_Order($cars,'Year' );
									break;
							case 5: Sorting::sortIncremental($cars, 'Year');
									break;
							case 6: Sorting::ASort_Descending_Order($cars,'KM' );
									break;
							case 7: Sorting::sortIncremental($cars, 'KM');
									break;
						}
					}
				?>
					<form action ='#' method = "post">
					<big>Sort by</big>
						<select name="v_sort" onchange = "this.form.submit();">
							<option value=0 <?php if($selected == 0)echo "selected"; ?>>Not sorted</option>
							<option value=1 <?php if($selected == 1)echo "selected"; ?>>By Make</option>
							<option value=2 <?php if($selected == 2)echo "selected"; ?>>By Price High to Low</option>
							<option value=3 <?php if($selected == 3)echo "selected"; ?>>By Price Low to High</option>
							<option value=4 <?php if($selected == 4)echo "selected"; ?>>By Year High to Low</option>
							<option value=5 <?php if($selected == 5)echo "selected"; ?>>By Year Low to High</option>
							<option value=6 <?php if($selected == 6)echo "selected"; ?>>By KM High to Low</option>
							<option value=7 <?php if($selected == 7)echo "selected"; ?>>By KM Low to High</option>
						</select>
					</form>
					</br></br>
					
					<?php
					
						Car::Display($cars);
					?>
					
				</div>
			</div>
			<?php include "includes/footer_menu.php"?>
		</div>
	</div>
	<?php include "includes/footer_links.php"; ?>