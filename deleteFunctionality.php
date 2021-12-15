<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WDV341 Intro PHP</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *,:after,:before{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}body{font:normal 15px/25px 'Open Sans',Arial,Helvetica,sans-serif;color:#444;text-align:left}h1,h2,h3{font-weight:400}h1{font:normal 40px/120px 'Open Sans',Arial,Helvetica,sans-serif;text-align:center;color:#444;margin:0}h1 span{color:#484c9b}h2{font-size:25px;line-height:30px;color:#484c9b;margin:50px 0 10px}h3{font-size:18px;line-height:35px;margin:50px 0 0}a{color:#484c9b;text-decoration:none}a:focus,a:hover{text-decoration:underline}p{margin:0 0 2rem}p span{color:#aaa}header{width:98%;margin:40px auto 0;border-bottom:1px solid #ddd;padding-bottom:40px;text-align:center}header p{margin:0}section{width:95%;max-width:910px;margin:40px auto}pre{background:#f9f9f9;padding:10px;font-size:12px;border:1px solid #eee;white-space:pre-wrap;border-radius:10px}table{border:1px solid #eee;background:#f9f9f9;width:100%;border-collapse:collapse;border-spacing:0;margin-bottom:3rem}thead{background:#5965af;color:#fff}tbody tr td,thead td{padding:.5rem .75rem}tbody tr:nth-child(even){background:#efefef}tbody tr td:first-child{padding-left:1.25rem}tbody tr td:first-child,tbody tr td:nth-child(3),thead td:first-child,thead td:nth-child(3){width:15%}tbody tr td:nth-child(2),thead td:nth-child(2){width:20%}tbody tr td:last-child,thead td:last-child{width:50%}@media only screen and (min-width:768px){body{font-size:20px;line-height:30px}h2{font-size:30px;line-height:45px}h3{font-size:22px;line-height:45px;margin-top:50px}p{margin-bottom:2rem}h1{font-size:60px}pre{padding:20px;font-size:15px}}
    </style>
	<style>
		.eventBlock { width: 100%; margin-bottom: 1rem; max-width: 48em; background: #f7f7f7; border: 1px solid #efefef; border-radius: 10px; padding: 1rem; display: flex; justify-content: space-between; }
		.eventBlock > div { width: 50%; }
	</style>
</head>
<body>
	<header>
		<h1>WDV341 Intro <span>PHP</span></h1>
		<p></p>
	</header>

<script>
document.getElementById("myBtn").addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>

    <section>
        <h2 style="text-align: center;"> 
            <?//=row count?> Events are available today.
        </h2>
        <?php //loop through events ?>
        <div class="eventBlock">
            <div>
                <span class="displayEvent">
                    Event: <?//=event name?>
					<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                </span>
                <div>
                    Presenter: <?//=presenter?>
					<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                </div>
                <div>
                    <span class="displayTime">
                        Time: <?//=formatted time?>
						<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                    </span>
                </div>
                <div>
                    <span class="displayDate">
                        Date: <?//=formatted date?>
						<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                    </span>
                </div>
            </div>
            <div>
                <span class="displayDescription">
                    Description:<br> <?//=description?>
					<a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                </span>
            </div>
        </div>
        <?php //close event loop ?>
    </section>
</body>
</html>