<html>
<head>
<title>Status Posting</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Status Posting </h1>
<?php include "header.php" ?>
<div id="main">
<?php
	// post status process variables
	$Title=$_POST["Title"];
	$Author=$_POST["Author"];
	$Journal=$_POST["Journal"];
	$Year=$_POST["Year"];
	
	//Evidence Variables
	$Benefit=$_POST["Benefit"];
	$Description=$_POST["Description"];
	$Result=$_POST["Result"];
	$Integrity=$_POST["Integrity"];

	//Research Variables
	$ResearchQuestion=$_POST["ResearchQuestion"];
	$ResearchMethod=$_POST["ResearchMethod"];
	$ResearchMetrics=$_POST["ResearchMetrics"];
	
	
	//The following functions are created in order to check the statusCode and status for the following conditions:
	// The Status Code begins with S
	// The Status Code are consisted of Numbers after the S
	// The Status Code are consisted of Five Characters 
	// The Actual Status has the correct characters
	// The Date input is correct
	function statusCodeBeginsWithS($string){
		if($string[0] == "S") {
			return TRUE;
		}
	}
	
	function checkIfStatusCodeAreNumbersAfterS($string) {
		if(preg_match("/^[0-9]+$/",substr($string, 1))){
			return TRUE;
		}
	}
	
	function checkIfStatusCodeIsFiveChars($strLength){
		if(strlen($strLength) == 5) {
			return TRUE;
		}
	}
	
	function checkIfStatusHasCorrectChars($string){
		if(preg_match('/^[!?\.\,a-z0-9 ]+$/i', $string)){
			return TRUE;
		}
	}
	
	function checkIfStringIsNull($string) {
		if($string == "") {
		return TRUE;
		}
	}
		
	function checkTheDate($d,$m,$y){
		if (checkdate($m, $d, $y) == 1){
		return TRUE;
}}


	//The Following Conditional Statements will assign the results of the share and permission radio/checkboxes to variables.
	//
	if (!empty($_POST["APA"])) {
		$APA=$_POST["APA"];
	} else {
		$APA="";
	}
	
	if (!empty($_POST["rating"])) {
		$rating=$_POST["rating"];
	} else {
		$rating="";
	}

	if (!empty($_POST["ResearchLevel"])) {
		$ResearchLevel=$_POST["ResearchLevel"];
	} else {
		$ResearchLevel="";
	}
	
	if (!empty($_POST["Participants"])) {
		$Participants=$_POST["Participants"];
	} else {
		$Participants="";
	}
	
	
	//Connects to the database using the details in the settings.php file
	
	require_once("settings.php");
	
	$connect=@mysqli_connect($host,$user,$pswd,$dbnm) or die ( " Unable to connect to server ");
	
	// The following three queries below are used to:
	// Creates the table and if it doesnt exists
	// Insert variables into the database for use later
	// Looks for the status code in order to find uniqueness
	mysql_select_db("SERLERDB");
	$sql = "CREATE TABLE IF NOT EXISTS SERLERDB
	( 
	Title VARCHAR (40) NOT NULL,
	Author VARCHAR (25),
	Journal VARCHAR (25),
	Year VARCHAR (4),
	APA VARCHAR (25),
	Rating Varchar (5),
	Research_Level VARCHAR(20),
	Benefit_or_Outcome VARCHAR(25),
	Description VARCHAR (25),
	Result_of_Study VARCHAR (25),
	Integrity VARCHAR (25),
	Research_Question VARCHAR (25),
	Research_Methods VARCHAR (25),
	Research_Metrics VARCHAR (25),
	Participants VARCHAR (25)
	)";
	
	$insertQuery = "insert into SERLERDB"."(Title,Author,Journal,Year,APA,Rating,Research_Level,Benefit_or_Outcome,Description,Result_of_Study,Integrity,Research_Question,Research_Methods,Research_Metrics,Participants)"
	." values "
	."('$Title','$Author', '$Journal', '$Year','$APA','$rating','$ResearchLevel','$Benefit','$Description','$Result','$Integrity','$ResearchQuestion','$ResearchMethod','$ResearchMetrics','$Participants')";
	
	if(!@mysqli_query($connect,$sql)) {
	echo "ERROR";
	}
	else { 
		"connected and created";
		}
		
	if($connect->query($insertQuery)){
	echo "yay"; }
	else {
	echo "nope";
	}

	
	
	
?>
</div>
<?php include "footerForPostStatusProcess.php" ?>
</body>
</html>
