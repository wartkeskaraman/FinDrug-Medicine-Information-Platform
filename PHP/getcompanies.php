<?php
	require_once("config.php");
	session_start();
?>
</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>FinDrug</title>

	<link rel="stylesheet" type="text/css" href="getcostyle.css">
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

<input id="button" type="button" name="button" value="Search"/>
<input id="src" type="search" name="src"/>
</div>	
<div id="get">

	<table width="auto" height="auto" border="1">
    <tr>
        <td width="80" height="40">Company Year</td>
        <td width="80" height="40">Company Name</td>
        <td width="auto" height="40">Company Info</td>
  
          
    </tr>


<?php

  $getvar = mysqli_query($connection,"SELECT * FROM companies");

  while($b=mysqli_fetch_array($getvar)){

  	$coyear = $b['co_year'];
    $coname = $b['co_name'];   
    $coinfo = $b['co_info'];

    echo "<tr>
                    <td>$coyear</td>
                    <td>$coname</td>
                    <td>$coinfo</td>
          </tr>";
                     
 	}
?>
</table>


</div>
</div>
</body>
</html>
