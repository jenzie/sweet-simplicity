<!-- Jenny Zhen -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login/Register</title>
		<meta name = "description" content = "Just a website to display personal work and client requests."/>
		<meta name = "keywords" content = "media, media major, photoshop, illustrator, powerpoint, cs3, adobe"/>
		<link href = "main.css" rel = "stylesheet" type = "text/css" />
		<link href = "favicon.ico" rel = "shortcut icon" />
		<link href = "favicon.png" rel = "icon" type = "image/gif" />
    </head>
	<body id = "home">
		<div id = "wrapper">
				<div id = "sidebar">	
					<div id = "logo">
						<h1><span>Login/Register</span></h1>
					</div>
					<div id = "main_nav">
						<ul class = "nav">
							<li class = "first"><a href = "index.php">Home</a></li>
							<li><a href = "portfolio.html">Portfolio</a></li>
							<li><a href = "clientfaqs.html">Client Work: Q&amp;A</a></li>
							<li><a href = "clientreq.php">Client Work: Request</a></li>
							<li><a href = "contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div id = "main_content">
					<div id = "banner"></div>
					<br><br><br>
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
			echo "<br /><br /><p><h1>Thank you for registering!</h1></p>";
			echo "<div align = 'center'>";
			echo "<table style = 'text-align:center; width:100%; font-family:verdana,sans-serif; font-size:11px; color:#218db5'>";
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
		<div align = "center">
			<form action = "index.php">
				<input type = "submit" value = "Return to Main Page!" />
			</form>
		</div>
	</div>
			<div class = "clear">&nbsp;</div>
		</div>
		<div id = "footer_wrapper">
			<div id = "footer">
				Copyright &copy; Sweet Simplicity 2009. All rights reserved. &nbsp;| 
				<a href="index.php">home</a> | 
				<a href="about.html">about</a> | 
				<a href="contact.html">contact</a> |
			</div>		
		</div>
	</body>
</html>
