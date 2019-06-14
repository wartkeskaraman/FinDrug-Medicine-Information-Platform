<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>FinDrug</title>
	
	<link rel="stylesheet" type="text/css" href="search2.css">
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
 <input type="text" name="search" id="search" placeholder="Enter what you search..."><br>
 
</form>
</div>	
<div id="result">
<?php
require_once("config.php");
session_start();

$search = @mysqli_real_escape_string($_GET['search']);
$result = @mysqli_query($connection,"SELECT * FROM drugs WHERE drug_name LIKE '%".$search."%'" );
if(@mysqli_num_rows($result)>0){
 while($resread=@mysqli_fetch_array($result)){
  $dname = $resread['drug_name'].'<br>';

  echo "<tr>
  			<td>$dname</td>	
  		</tr>";
 }
}
else{
 echo "No result!" ;
}
?>
</div>
</div>
</body>
</html>


