<?php 
require_once("config.php");
session_start();

?>

</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>FinDrug</title>

	<link rel="stylesheet" type="text/css" href="addcostyle.css">
<link rel="stylesheet" type="text/css" href="ana.css" media="only screen and (max-width: 480px)" />
</head>
<body>
<div id="content">
<div id="menu">
	<a href="second.html"><img id="syringe" src="syringe.png"/></a>
	<a href="second.html"><p id="findrug">FinDrug</p></a>
<ul id="menubar">
<li><a href="drugs.html">Drugs</a></li>
<li><a href="illness.html">Illnesses</a></li>
<li><a href="getcompanies.php">Companies</a></li>
<li><a href="news.html">News</a></li>
</ul>

<form action="search.php" method="get">
  <input type="submit" value="button" id="button">
  <input type="text" name="search" id="search">
 
</form>
</div>	

<div id="add">

	<form name="form1" method="post" action="copage.php">
  <table width="434" height="350" border="1">
    
      <tr>
        <td>Company Date</td>
        <td><label for="date"></label>
        <input type="text" name="date" id="date"></td>
      </tr>
    
      <tr>
        <td width="115">Company Name</td>
        <td width="276"><input type="text" name="name" id="name"></td>
      </tr>

      <tr>
        <td height="39">Company Info</td>
        <td height="39"><label for="coinfo"></label>
        <textarea name="coinfo" id="coinfo" cols="45" rows="5"></textarea></td>
      </tr>
      
      <tr>    	
			<td colspan="2" align="center"><input type="submit" name="addcompanies" id="addcompanies" value="Add" /></td>
      </tr>

  </table>
    
    <label for="name"></label>
</form>

</p>
</div>
</body>
</html>