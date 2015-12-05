<?php 
	
	//Insert Url of Google Doc here
	$spreadsheetUrl = "****************************************************************************";

	//Open the file to read
	$fileHandle = fopen($spreadsheetUrl, "r");

	//While loop parses through the crv file 
	while (!feof($fileHandle)){
		$lineOfText = fgetcsv($fileHandle, 1024);  //1024 is the number of rows I think
		print $lineOfText[0].$lineOfText[1].$lineOfText[2]."<br>"; //Here you can format the text to your specifications

	}

	fclose($fileHandle);	//Close the file 


?>