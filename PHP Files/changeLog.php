<?php
	$revision = $rev."\n"; 
	$logFileName = $rNum.$rev
	$logFile = fopen($logFileName, "w") or die("Unable to open file!");
	$lastUpdatedBy = slMember."\n";
	$lastUpdatedTime = $rLast."\n";
	$changesMade = $changes;
	
	fwrite($logFileName, $lastUpdatedBy);
	fwrite($logFileName, $lastUpdatedTime);
	fwrite($logFileName, $changesMade);
	fclose($logFileName);
?> 