<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
$student_FirstName = 'Leonardo';
$student_LastName = 'Studart';
$chapter = 3;
$lab = 1;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>PHP Demo</title>
</head>
<?php include "includes/functions.php" ?>
<body>
	
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<div id="logo">
				<div style="margin-top:70px" class="whitetitle"><?php echo $student_FirstName; ?></div>
			</div>
			<div id="topheader">
				<div align="left" class="bodytext">
					<br />
					<strong>Student Name:<?php echo " ".$student_FirstName." ".$student_LastName; ?> </strong><br />
					Course: 420-L04-AS<br />
					Teacher: Salima Hassaine<br />
					Semester: Winter 2017<br />
				</div>
			</div>
			<div id="menu">
				<div align="right" class="smallwhitetext" style="padding:9px;">
					<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Contact Us</a>
				</div>
			</div>
			<div id="contenttext">
				<div style="padding:10px">
					<span class="titletext"><?php echo "Chapter ".$chapter." - Lab practice ".$lab; ?></span>
				</div>
					<div class="bodytext" style="padding:12px;" align="justify">
					<strong>You have to use this template to practice PHP . Enjoy!</strong><br />
				<?php 
					$error_weight = "";
					$error_height = "";
					$error_metric = "";
					$selected = 0;
					$height = 0;
					$weight = 0;

					
					if (isset($_POST["submit"])) {
						$selected = $_POST["metric"];
						$height = $_POST["Height"];
						$weight = $_POST["Weight"];

						if (empty($_POST["Weight"])) {
							$error_weight = "Error: Weight is required";
						}
						if (empty($_POST["Height"])) {
							$error_height = "Error: Height is required";
						}
						if (empty($_POST["metric"])) {
							$error_metric = "Error: Metric is required";
						}
					}
				?>
					<form action="#" method="POST">
						<!-- <div style="display: flex"> -->
							Weight: <input type="number" name="Weight" value='<?php echo $weight ?>'><font color="red">*<?php echo $error_weight?></font></br>
							Metric:	<select name="metric">
										<option value = '0'  <?php if ($selected == '0') echo 'selected' ?>   >NONE</option>
										<option value = 'LB' <?php if ($selected == 'LB') echo 'selected' ?>   >LB</option>
										<option value = 'KG' <?php if ($selected == 'KG') echo 'selected' ?>   >KG</option>
									</select>
									<font color="red">*<?php echo $error_metric?></font></br>
							<!-- </div> -->
								
							Height: <input type="number" name="Height" value='<?php echo $height?>'><font color="red">*<?php echo $error_height?></font></br>
								<!-- <select name="metric">
									<option value = '0'>NONE</option>
									<option value = '1'>LB</option>
									<option value = '2'>KG</option>
								</select> -->
						<input type="submit" name="submit" value="send"> </br>
					</form>
					<?php
					if (isset($_POST["submit"])) {
						if (!empty($_POST["Weight"])&&!empty($_POST["Height"])&&!empty($_POST["metric"])) {
							$error_weight= "";
							$error_height= "";
							echo "Weight is ".$_POST["Weight"]."  ".$_POST["metric"]."</br>";
							echo "Height is ".$_POST["Height"]."</br>";
							calcBmi($_POST["Weight"],$_POST["Height"],$_POST["metric"]);
						}
					}
					?>
				</div>
			</div>
			
			<div id="footer" class="smallgraytext">
				<a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Contact Us</a>
			</div>
		</div>
	</div>
</body>
</html>