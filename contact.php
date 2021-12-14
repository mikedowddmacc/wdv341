<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Page</title>
</head>

<body>
	<header>
		<h1>Contact</h1>
		<h1>WDV Final Project</h1>
		<ul>
			<li><a href="homepage.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</header>

<form action="contact.php" method="post">
  <div class="elem-group">
    <label for="name">Name</label>
    <input type="text" placeholder="Enter your name here." pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">E-mail</label>
    <input type="email" placeholder="Enter your e-mail here." required>
  </div>
  <div class="elem-group">
    <label for="title">Purpose for Contacting Us</label>
    <input type="text" required placeholder="Enter your text here." pattern=[A-Za-z0-9\s]{8,60}>
  </div>
  <div class="elem-group">
    <label for="message">Message Box</label>
    <textarea placeholder="Enter your message here." required></textarea>
  </div>
  <button type="submit">Send Message</button>
</form>

<footer>
<h4>@<?php
echo date("Y")
?></h4>
</footer>

</body>
</html>