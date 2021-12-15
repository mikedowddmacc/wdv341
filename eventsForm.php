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

$sql = "SELECT * FROM wdv341_events";
?>

<form>name=”form1″ method=”post” action="form-handler.php"<?php echo htmlspecialchars($_SERVER[‘PHP_SELF’]); ?>”
		<p>Id: <input type="text" name="first_name" id="first-name" /></p>
		<p>Name: <input type="text" name="name" id="name" /></p>
		<p>Description: <input type="text" name="description" id="description" /></p>
		<p>Presenter: <input type="text" name="presenter" id="presenter" /></p>
		<p>Date: <input type="text" name="date" id="date" /></p>
		<p>Time: <input type="text" name="time" id="time" /></p>
		<p>Date Inserted: <input type="text" name="date_inserted" id="date_inserted" /></p>
		<p>Date Updated: <input type="text" name="date_updated" id="date_updated" /></p>
</form>

</body>
</html>