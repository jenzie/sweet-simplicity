<!--Jenny Zhen-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet Simplicity: Registration Complete!</title>
	</head>
	<body style="text-align:center;font-family:tahoma;font-size:12px;background-color:#D1E0FF">
		<?php//erm, credits to Mr. Turner
			function checkValuesExist()
			{
				if (!array_key_exists("txt_username", $_POST) || !array_key_exists("txt_password", $_POST) || !isset($_POST["txt_username"]) || !isset($_POST["txt_password"]) || $_POST["txt_username"] == "" || $_POST["txt_password"] == "")
					return "You must fill in every field.";
					
				return null;
			}
			
			function checkUserExists()
			{
				$cmd = "SELECT username FROM users WHERE username='".$_POST["txt_username"]."'";
				$result = mysql_query($cmd);
				$info = mysql_fetch_assoc($result);
				if (isset($info) && $info["username"] == $_POST["txt_username"])
					return "That username already exists.";
					
				return null;
			}
			
			function checkUserName()
			{
				if (preg_match("[[^0-9a-zA-z]]", $_POST["txt_username"]))
					return "Use only letters and numbers for your username please";
					
				return null;
			}
			
			function checkPassword()
			{
				if (preg_match("[[^0-9a-zA-z]]", $_POST["txt_password"]))
					return "Use only letters and numbers for your password please";
					
				return null;
			}
			$con = mysql_connect("localhost", "root");
			mysql_select_db("sweetsimplicity", $con);
			
			$headerMsg = "Location: register.htm?msg=";
			
			$tmp = checkValuesExist();
			if (isset($tmp))
				$headerMsg.=$tmp."; ";
				
			$tmp = checkUserExists();
			if (isset($tmp))
				$headerMsg.=$tmp."; ";
				
			$tmp = checkUserName();
			if (isset($tmp))
				$headerMsg.=$tmp."; ";
				
			$tmp = checkPassword();
			if (isset($tmp))
				$headerMsg.=$tmp."; ";

			if (preg_match("[;]", $headerMsg))
				header($headerMsg);
		?>
		<?php
			echo "<p><h1>Thank you for registering!</h1></p>";
			echo "<div align = 'center'>";
			echo "<table style='text-align:center;background-color:#FFFFFF;border-style:solid;width:350px;' border='3'>";
			echo "<tr><td>";
			echo "<br />Welcome to the site, ";
			$gender = $_POST['txt_gender'];
			if($gender == "Female")
				echo "Ms. ";
			else 
			if($gender == "Male")
				echo "Mr. ";
			echo $_POST['txt_firstName']." ".$_POST['txt_lastName'].".";
			echo "<p>Your registered info:<br /><br />";
			echo "Username: ".$_POST['txt_username']."<br />";
			echo "Password: ".$_POST['txt_password']."<br />";
			echo "First Name: ".$_POST['txt_firstName']."<br />";
			echo "Last Name: ".$_POST['txt_lastName']."<br />";
			echo "Email: ".$_POST['txt_email']."<br />";
			echo "Gender: ".$_POST['txt_gender']."<br />";
			echo "</td></tr>";
			echo "</table>";
			echo "</div>";
		?>
		<?php
		$con = mysql_connect("localhost", "root");
		mysql_select_db("sweetsimplicity", $con);

		// Insert a row of information into the table "example"
		mysql_query("INSERT INTO users (username, password, firstName, lastName, gender, email) 
		VALUES('$_POST[txt_username]','$_POST[txt_password]','$_POST[txt_firstName]','$_POST[txt_lastName]','$_POST[txt_gender]','$_POST[txt_email]') ") 
		or die(mysql_error());
		?>
		<br />
		<form action = "index.html">
			<input type = "submit" value = "Return to Main Page!" />
		</form>
	</body>
</html>