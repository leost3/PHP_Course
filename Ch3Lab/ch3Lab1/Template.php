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
					<form action="template.1.php" method="post">
						<label action="#id">Employee Id</label>
						<input value="333" type="text" name="id" id="id"></br>
						<label action="#firstName">First name</label>
						<input value="leo" type="text" name="firstName" id=#firstName> </br>
						<label action="#lastName">Last name</label>
						<input value="studart" type="text" name="lastName"id=#lastName > </br>
						<label action="#grossSalary">Gross Salary</label>
						<input value="60000" type="text" name="grossSalary" id=#grossSalary> </br>
						<input type="submit" name="submit" value="send"> </br>
					</form>
					<?php
					if (isset($_POST["submit"])) {
						echo "Employee Id ".$_POST["id"]."</br>";
						echo "Employee First Name ".$_POST["firstName"]."</br>";
						echo "Employee Last Name ".$_POST["lastName"]."</br>";
						echo "Employee Gross Salary ".$_POST["grossSalary"]."</br>";
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