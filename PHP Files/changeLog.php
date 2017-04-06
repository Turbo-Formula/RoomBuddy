<?php
	$logFile = fopen($logFileName, "w") or die("Unable to open file!");
	$txt = "John Doe\n";
	fwrite($logFileName, $txt);
	$txt = "Jane Doe\n";
	fwrite($logFileName, $txt);
	fclose($logFileName);
?> 