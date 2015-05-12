<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>SERLER ARTICLE POSTING SYSTEM</h1>
<?php include "header.php" ?>
<div id="main">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action ="serlersearchprocess.php" method = "POST">
<!--General Information-->
<p>
<h2>Article Details</h2>
<label>Title: <input type="text" maxlength="5" name="Title"> </label><br><br>
<label>Author: <input type="text" name="Author"> </label><br><br>
<label>Journal: <input type="text" name="Journal"> </label><br><br>
<label>Year: <input type="text" name="Year"> </label>
<br><br>
<!--Radio buttons are used for the privacy of the status-->
<label>APA: 
<input type="radio" name="APA" value="Standard">Standard
<input type="radio" name="APA" value="Other">Other</label>
<br>
 </label>
<br><br>
<!--Checkboxes  to tick the permissions of the status-->
<label>Rating
<input type="radio" name="rating" value="1">&#9734;
<input type="radio" name="rating" value="2">&#9734;&#9734;
<input type="radio" name="rating" value="3">&#9734;&#9734;&#9734;
<input type="radio" name="rating" value="4">&#9734;&#9734;&#9734;&#9734;
<input type="radio" name="rating" value="5">&#9734;&#9734;&#9734;&#9734;&#9734;
</label>

<br><br>
<label> Research Level
<select name="ResearchLevel">
  <option value="">Research: </option>
  <option value="Professional">Professional</option>
  <option value="Other">Other</option>
</label>
</select>
<br>



<h2>Evidence item</h2>
<label>Benefit or Outcome: <input type="text" name="Benefit"> </label><br><br>
<label>Description: <input type="text" name="Description"> </label><br><br>
<label>Result of Study: <input type="text" name="Result"> </label><br><br>
<label>Integrity information of practice: <input type="text" name="Integrity"> </label>
<br>
<h2>Research Information</h2>
<label>Research Question<input type="text" name="ResearchQuestion"> </label><br><br>
<label>Research Methods<input type="text" name="ResearchMethod"> </label><br><br>
<label>Research Metrics<input type="text" name="ResearchMetrics"> </label><br><br>
<label> Nature of Participants
<select name="Participants">
  <option value="Test 0">Test 0 </option>
  <option value="Test 1">Test 1</option>
  <option value="Test 2">Test 2</option>
</label>
<br>
<!--Buttons used for posting the status or to reset the input info-->
<input type ="submit" value="Post">
<input type ="submit" value="Reset">
</form><p>
</div>
</body>
</html>
