<?php include "includes/header.php"?>
<?php include "classes/Car.php"?>
<?php include "classes/sorting.php"?>
<?php include "includes/array_functions.php"?>

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
					$selected = 0;
					if(isset($_POST["sorting"])){
						$selected = $_POST["sorting"];
					}
				?>
					<form action ="#" method="POST">
						<b>Sort by:</b> 
						<select name="sorting" onchange="this.form.submit();">
						<option value="0" <?php if($selected ==0) echo "selected"?>>Not sorted</option>
						<option value="1" <?php if($selected ==1) echo "selected"?>>By Make</option>
						<option value="2" <?php if($selected ==2) echo "selected"?>>By Price (High to Low)</option>
						<option value="3" <?php if($selected ==3) echo "selected"?>>By Price (Low to High)</option>
						<option value="4" <?php if($selected ==4) echo "selected"?>>By Year  (High to Low)</option>
						<option value="5" <?php if($selected ==5) echo "selected"?>>By Year  (Low to High)</option>
						<option value="6" <?php if($selected ==6) echo "selected"?>>By Mileage in KM  (High to Low)</option>
						<option value="7" <?php if($selected ==7) echo "selected"?>>By Mileage in KM  (Low to High)</option>
						
						</select>
					</form>
					</br></br>
				<?php
					if(isset($_POST["sorting"])){
						switch($_POST["sorting"]){
							case 1: Sorting::ASortAscending($cars, 'Make');
									break;
							case 2: Sorting::ASortDescending($cars, 'Price');
									break;
							case 3: Sorting::ASortAscending($cars, 'Price');
									break;
							case 4: Sorting::ASortDescending($cars, 'Year');
									break;
							case 5: Sorting::ASortAscending($cars, 'Year');
									break;
							case 6: Sorting::ASortDescending($cars, 'KM');
									break;
							case 7: Sorting::ASortAscending($cars, 'KM');
									break;
						}
						
					}
					Car::Display($cars);
				?>
				
				
				</div>
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>
</body>
</html>