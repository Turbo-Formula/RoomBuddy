<?php
	$type = $changeType;

	if ($type = "booking")
	{
		$revision = $rev."\n"; 
		$logFileName = $changeType.$rNum.$rev
		$logFile = fopen($logFileName, "w") or die("Unable to open file!");
		$lastUpdatedBy = slMember."\n";
		$lastUpdatedTime = $rLast."\n";
		$changesMade = $changes;
	
		fwrite($logFileName, $lastUpdatedBy);
		fwrite($logFileName, $lastUpdatedTime);
		fwrite($logFileName, $changesMade);
		fclose($logFileName);
	}

	if ($type = "customer")
	{
		$revision = $rev."\n"; 
		$logFileName = $changeType.$name.$rev
		$logFile = fopen($logFileName, "w") or die("Unable to open file!");
		$lastUpdatedBy = slMember."\n";
		$lastUpdatedTime = $rLast."\n";
		$changesMade = $changes;
	
		fwrite($logFileName, $lastUpdatedBy);
		fwrite($logFileName, $lastUpdatedTime);
		fwrite($logFileName, $changesMade);
		fclose($logFileName);
	}
	
	if ($type = "catering")
	{
		$revision = $rev."\n"; 
		$logFileName = $changeType.$name.$rev
		$logFile = fopen($logFileName, "w") or die("Unable to open file!");
		$lastUpdatedBy = slMember."\n";
		$lastUpdatedTime = $rLast."\n";
		$changesMade = $changes;
	
		fwrite($logFileName, $lastUpdatedBy);
		fwrite($logFileName, $lastUpdatedTime);
		fwrite($logFileName, $changesMade);
		fclose($logFileName);
	}
	
	if ($type = "assets")
	{
		$revision = $rev."\n"; 
		$logFileName = $changeType.$name.$rev
		$logFile = fopen($logFileName, "w") or die("Unable to open file!");
		$lastUpdatedBy = slMember."\n";
		$lastUpdatedTime = $rLast."\n";
		$changesMade = $changes;
	
		fwrite($logFileName, $lastUpdatedBy);
		fwrite($logFileName, $lastUpdatedTime);
		fwrite($logFileName, $changesMade);
		fclose($logFileName);
	}
?> 