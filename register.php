<!-- Jenny Zhen -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
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
					<h1><span>Register</span></h1>
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
				<table style = "text-align:center; width:100%">
					<tr>
						<td>
							<h1>Register</h1>
							<form method = "post" action = "ss-regcomp.php">
							<p>
								Username: <input type = "textbox" name = "txt_username" /><br />
								Password: &nbsp;<input type = "textbox" name = "txt_password" /><br />
								First Name: <input type = "textbox" name = "txt_firstName" /><br />
								Last Name: <input type = "textbox" name = "txt_lastName" /><br />
								Your Email: <input type = "textbox" name = "txt_email" /><br />
								Gender: <input type = "radio" name = "txt_gender" value = "Female" checked = "checked" />Female
										<input type = "radio" name = "txt_gender" value = "Male" />Male
								<br /><br /><input type = "submit" value = "Submit">
								<input type = "reset" value = "Clear" />
							</p>
							</form>
						</td>
					</tr>
				</table>
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
