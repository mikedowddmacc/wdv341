<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>7-2: Create selectOneEvent</title>
</head>

<body>
	<header>
		<h1>WDV341 Intro to PHP</h1>
		<h1>7-2: Create selectOneEvent</h1>
	</header>


<?php
include 'dbConnect.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "SELECT id, name FROM MyGuests WHERE name='John'"
?>


</body>
</html>