<?php include "includes/header.php"?>
<?php include "includes/arrayFunctions.php"?>

<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<?php include "includes/title.php"?>
			<div id="contenttext">
			<!-- <form type="POST" >
				<input type="select">
					<option value="Not sorted"></option>
					<option value="Model"></option>
					<option value="Price: Low to High"></option>
					<option value="Price: High to Low"></option>
					<option value="Km: High to Low"></option>
					<option value="Km: High to Low"></option>
					<option value="Year: new to Old"></option>
					<option value="Year: Old to New"></option>
				</input>
			</form> -->
		<div>
			<h1><?php sortByModel($cars)?></h1>
		</div>


			// Not sorted
			// Model
			// Price: Low to High
			// Price: High to Low
			// Km: High to Low
			// Km: Low to High
			// Year: new to Old
			// Year: Old to New
				<table border="0">
						<div class="bodytext" style="padding:12px;" align="justify">
						<?php
						Display($cars)
						?>
					</div>
				</table>
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>
</body>
</html>