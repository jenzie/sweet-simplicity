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
				<table style = "text-align:center; width:100%; font-family:verdana,sans-serif; font-size:11px; color:#218db5">
					<tr>
						<td><br><br>
							<h1>Welcome to the site, <br />
								<?php 
								if(isset($_COOKIE['Name']))
									echo $_COOKIE['Name'].".";
								else
									echo "Guest.";
								?>
							</h1>
						</td>
					</tr>
					<tr>
						<td>
							<br />Login or register below:<br />
							<form name="register" action="Register.php" method="post">
								<input type="submit" value="Register"/>
							</form><br />
							Username: <input type = "textbox" name = "txt_username" /><br />
							Password: &nbsp;<input type = "textbox" name = "txt_password" /><br />
							<form name="welcome" method = "post" action="ss-checklogin.php">
								<input type="submit" value="Login"/>
							</form>
						</td>
					</tr>
				</table>
				<?php 
				mysql_connect("localhost", "root") or die(mysql_error());
				mysql_select_db("sweetsimplicity") or die(mysql_error());
				?>
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
