<html>
<head>   
<link href="../css/calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
	include '../php/calendar.php';
 
	$calendar = new Calendar();
 
	echo $calendar->show(2020);
?>
</body>
</html>  