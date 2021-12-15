<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>3-1 PHP Basics</title>
</head>

<body>
	<header>
		<h1>WDV341 Intro</h1>
		<h1>3-1 PHP Basics</h1>
	</header>


<?php
$yourName = "Michael Dowd";
$number1 = 15;
$number2 = 25;

echo "<p>My name is:" . $yourName . "</p>";
echo "<p>Number 1: " . $number1 . "</p>";
echo "<p>Number 2: " . $number2 . "</p>";
?>



<p id="demo"></p>

<script>
const cars = ["PHP", "HTML", "Javascript"];
document.getElementById("demo").innerHTML = cars;
</script>

</body>
</html>