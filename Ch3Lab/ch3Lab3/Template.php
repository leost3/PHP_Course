<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
$student_FirstName = 'Leonardo';
$student_LastName = 'Studart';
$chapter = 3;
$lab = 3;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>PHP Demo</title>
</head>
<?php include("includes/functions.php") ?>
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



	<!-- ------------------------------------------------------------------------------------------------------------------ -->
			<?php 

				$error_salary = "";

				if (isset($_POST["submit"])) {
					if( empty($_POST["salary"])) {
						$error_salary = "Error: Field is mandatory";
					}
				}

			?>

					<form action="#" method="post">
						Enter Annual Income($): <input value="60000" type="number" name="salary"><font color="red">*<?php echo $error_salary ?></font></br>
				
						<input type="submit" name="submit" value="send"> </br>
					</form>
					<?php
					if (isset($_POST["submit"])) {
						if(!empty($_POST["salary"])) {
							echo "Employee gross salary is ".$_POST["salary"]."</br>";
							echo "Your annual taxes are ".calcIncomeTax($_POST["salary"])."</br>";
							echo "Your net salary is ".calcNetRate($_POST["salary"],calcIncomeTax($_POST["salary"]))."</br>";
						}

						// function calcIncomeTax($salary) {

						// 	function calcNetRate($salary, $calcIncomeTax) {
						
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