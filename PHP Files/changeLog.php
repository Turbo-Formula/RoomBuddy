<?php
	$type = $changeType;

	if ($changeType = "booking")
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

	if ($changeType = "customer")
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
	
	if ($changeType = "catering")
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
	
	if ($changeType = "assets")
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