</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>FinDrug</title>

	<link rel="stylesheet" type="text/css" href="drugpage2.css">
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

<form action="search.php" method="get">
	<input type="submit" value="button" id="button">
 	<input type="text" name="search" id="search">
 
</form>
</ul>

<div id="db">
<?php	 
	 require_once("config.php");
	 session_start();
	 
	 $id = intval($_POST["inum"]);
	 $name = strval($_POST["iad"]);
	 $comp = strval($_POST["ifirm"]);
	 $dept = strval($_POST["ilist"]);
	 $price = doubleval($_POST["ifiyat"]);
	 $info = strval($_POST["ibilgi"]);

	 $sql =  " INSERT INTO drugs(drug_id, drug_name, drug_co, drug_ill, drug_price, drug_info) VALUES('$id','$name','$comp','$dept','$price','$info')" ;
	 
	 if(mysqli_query($connection, $sql)) {

		 echo  "Successfully Added!";
	}

	 else{
		 
		 echo  "Can't Connect DB!!".mysqli_error($connection);
	 }

?>

</div>
</div>
</body>
</html>