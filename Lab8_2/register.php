<?php include "includes/header.php"?>
<?php include "classes/Message.php"?>
<?php include "classes/User.php"?>
<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
		<div id="contenttext">
			
			<div class="bodytext" style="padding:12px;" align="justify">
				
				<?php
					if(isset($_POST["Submit"])){
						
						$First_Name = $_POST["First_Name"];
						$Last_Name = $_POST["Last_Name"];
						$Email = $_POST["Email"];
						$Username = $_POST["Username"];
						$Password = $_POST["Password"]; 
						$Confirmed_Password = $_POST["Confirmed_Password"];
						
						if(User::Email_Exists($Email)){
							Message::Show("This email already exists ! Try again...", Message::$Full_Size, Message::$Error);
						}
						
						if(User::Username_Exists($Username )){
							Message::Show("This username already exists ! Try again...", Message::$Full_Size, Message::$Error);
						}
						
						if($Password != $Confirmed_Password){
							Message::Show("The password and its confirmation are not the same ! Try again...", Message::$Full_Size, Message::$Error);
						}
						if( empty($First_Name) || empty($Last_Name) || empty($Email) || 
						    empty($Username) || empty($Password) || empty($Confirmed_Password))
						{
							Message::Show("Enter a value for each required field !", Message::$Full_Size, Message::$Error);
						}else{
							if(!User::Email_Exists($Email) && !User::Username_Exists($Username) && $Password == $Confirmed_Password )
							{
								$userObj = new User($First_Name, $Last_Name, $Email, $Username, $Password, 2);
								$userObj->Insert();
								Message::Show("Your account is successfully created !", Message::$Full_Size, Message::$Success);
							}
						}
						
					}
				?>
				<form action = "#" method = "POST">
					<input type= "text"     name="First_Name" placeholder="First Name" required />
					<font color="red"><b>*</b></font></br></br>
					<input type= "text"     name="Last_Name"  placeholder="Last Name" required />
					<font color="red"><b>*</b></font></br></br>
					<input type= "email"    name="Email"      placeholder="Email" required />
					<font color="red"><b>*</b></font></br></br>
					<input type= "text"     name="Username"   placeholder="Username" required />
					<font color="red"><b>*</b></font></br></br>
					<input type= "password" name="Password"   placeholder="Password" required />
					<font color="red"><b>*</b></font></br></br>
					<input type= "password" name="Confirmed_Password" placeholder="Confirm Password" required />
					<font color="red"><b>*</b></font></br></br>
					<input type= "submit"   name="Submit" value="Create Account"/>
				</form>

			</div>
		</div>
			<?php include "includes/footer_menu.php"?>
		</div>
	</div>
	<?php include "includes/footer_links.php"; ?>