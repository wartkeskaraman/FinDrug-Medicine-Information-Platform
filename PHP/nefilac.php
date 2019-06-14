<?php
	require_once("config.php");
	session_start();
?>
</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>FinDrug</title>

	<link rel="stylesheet" type="text/css" href="getdrugs2.css">
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

	<table width="800" height="auto" border="1">
    <tr>
        <td width="70" height="60">ID</td>
        <td width="70" height="60">Name</td>
        <td width="70" height="60">Company</td>
        <td width="120" height="60">Department</td>
        <td width="70" height="60">Price</td>
        <td width="400" height="60">Drug Info</td>
          
    </tr>


<?php

  $getvar = mysqli_query($connection,"SELECT * FROM drugs WHERE drug_ill LIKE '%nefro%'");

  while($b=mysqli_fetch_array($getvar)){

  	$drugid = $b['drug_id'];
    $drugname = $b['drug_name'];
    $drugco = $b['drug_co'];
    $drugill = $b['drug_ill'];
    $drugprice = $b['drug_price'];
    $druginfo = $b['drug_info'];

    echo "<tr>
                    <td>$drugid</td>
                    <td>$drugname</td>
                    <td>$drugco</td>
                    <td>$drugill</td>
                    <td>$drugprice</td>
                    <td>$druginfo</td>
          </tr>";
                     
 	}
?>
</table>


</div>
</div>
</body>
</html>
