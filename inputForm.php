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
<form action ="inputFormprocess.php" method = "POST">
<!--General Information-->
<p>
<h1>Article Details</h1>
<label>Title:<input type="text" maxlength="5" name="statusCode"> </label><br>
<label>Author: <input type="text" name="status"> </label><br>
<label>Journal: <input type="text" name="status"> </label><br>
<label>Year: <input type="text" name="status"> </label>
<br>
<!--Radio buttons are used for the privacy of the status-->
<label>APA: 
<input type="radio" name="APA" value="Standard">Standard
<input type="radio" name="APA" value="Other">Other</label>
<br>
<label>Specify Other APA<input type="text" name="APAOther">
 </label>
<br>
<!--Checkboxes  to tick the permissions of the status-->
<label>Rating
<input type="radio" name="rating" value="oneStar">1
<input type="radio" name="rating" value="twoStar">2
<input type="radio" name="rating" value="threeStar">3
<input type="radio" name="rating" value="fourStar">4
<input type="radio" name="rating" value="fiveStar">5
</label>

<br>
<label> Research Level
<select name="ResearchLevel">
  <option value="">Research</option>
  <option value="Professional">Professional</option>
  <option value="Other">Other</option>
</select>
<br>
<!--Buttons used for posting the status or to reset the input info-->
<input type ="submit" value="Post">
<input type ="submit" value="Reset">
<br>

<h2>Evidence item</h2>
<label>Benefit or Outcome<input type="text" maxlength="5" name="statusCode"> </label><br>
<label>Description <input type="text" name="status"> </label><br>
<label>Result of Study <input type="text" name="status"> </label><br>
<label>Integrity information of practice <input type="text" name="status"> </label>

</form><p>
</div>
</body>
</html>
