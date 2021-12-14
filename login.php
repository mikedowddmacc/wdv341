<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>

<body>
	<header>
		<h1>Login</h1>
		<h1>WDV Final Project</h1>
		<ul>
			<li><a href="homepage.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</header>
	
<form action="contact.php" method="post">
	<div class="elem-group">
    <label for="name">Username/ Email Address</label>
    <input type="text" placeholder="Enter your name or email address here." pattern=[A-Z\sa-z]{3,20} required>
	</div>
	<div class="elem-group">
    <label for="name">Password</label>
    <input type="text" placeholder="Enter your password here." pattern=[A-Z\sa-z]{3,20} required>
	</div>
</form>

<footer>
<h4>@<?php
echo date("Y")
?></h4>
</footer>

</body>
</html>