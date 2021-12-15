<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>4-1 PHP Functions</title>
</head>

<body>
	<header>
		<h1>WDV341 Intro</h1>
		<h1>4-1 PHP Functions</h1>
	</header>

<?php
echo date("m-d-Y") . "<br>";
echo date("d-m-Y") . "<br>";
$str = "Dmacc is an interesting place.";
echo $str . "<br>";
echo "The sentence shown above has " . strlen($str) . " characters." . "<br>";
echo trim($str) . "<br>";
echo strtolower($str) . "<br>";
$hasdmacc = 
$phonenum = ("+123-456-7890");
echo $phonnum . "<br>";
$money_num = "123456";
echo number_format($money_num ,2,".",",");
?>

</body>
</html>