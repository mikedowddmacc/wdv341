<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>11-1: Self Posting Input Event form with INSERT</title>
</head>

<body>
	<header>
		<h1>WDV341 Intro to PHP</h1>
		<h1>11-1: Self Posting Input Event form with INSERT</h1>
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


?>

form name=”form1″ method=”post” action=”<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>” 

</body>
</html>