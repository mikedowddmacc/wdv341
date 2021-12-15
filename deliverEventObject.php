<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>9-1: PHP-JSON Event Object
 </title>
</head>

<body>
	<header>
		<h1>WDV341 Intro to PHP</h1>
		<h1>9-1: PHP-JSON Event Object
 </h1>
	</header>


<?php
include 'dbConnect.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "SELECT name FROM wdv341_events";
$ = array(""=>"", ""=>"", ""=>"");

class Event	{
	public $id;
	public $name;
	public $description;
	public $presenter;
	public $date;
	public $time;
	public $date_inserted;
	public $date_updated;
}

$outputObj = new EventClass;

$myJSON = json_encode($outputObj);

echo $myJSON;

?>


</body>
</html>