<?php

function logMessage($message) {	
	$logFile = './logs/mysite.log';	
	//open for appending, create the if it doesn't exist
	$hFile = fopen($logFile, 'a+'); 

	if(!is_resource($hFile)){
		printf("Unable to open %s for writing. Check file permissions.", $logFile);
		return false;
	}
	
	fwrite($hFile, $message);
	fclose($hFile);
	
	return true;
}

logMessage("Hello, log!\n");

?>