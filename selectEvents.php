<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>7-1: Create selectEvents</title>
</head>

<body>
	<header>
		<h1>WDV341 Intro to PHP</h1>
		<h1>7-1: Create selectEvents</h1>
	</header>


<?php
include 'dbConnect.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "SELECT * FROM `wdv341_events`";
?>


</body>
</html>