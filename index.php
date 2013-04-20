<!-- Jenny Zhen -->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Sweet Simplicity</title>
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
				<h1><span>Welcome</span></h1>
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
							<img src = "deity.png" title = "Deity" style = "width:291px; height:239px" />
						</td>
					</tr>
					<tr>
						<td>
							<div style = "font-family: tahoma; font-size:8pt; color:gray">
								<marquee>Welcome to Sweet Simplicity, 
								<?php 
								if(isset($_COOKIE['Name']))
									echo $_COOKIE['Name'].".";
								else
									echo "Guest.";
								?> &lt;3</marquee>
							</div>
							<p>
								This site is to display some of the work 
								that I have done in my media major from 2009-2010.
								Feel free to take a look around and contact me if you have any comments, 
								suggestions, or questions.
							</p>
							<p>
								You may <a href = "splash.php">log in or register</a> if you would like to continue.
							</p>
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
