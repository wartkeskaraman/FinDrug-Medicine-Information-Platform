</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>FinDrug</title>

	<link rel="stylesheet" type="text/css" href="copagestyle.css">
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

<div id="db">
<?php	 
	 require_once("config.php");
	 session_start();
	 
	 $date = intval($_POST["date"]);
	 $name = strval($_POST["name"]);
	 $info = strval($_POST["coinfo"]);
	 

	 $sql =  " INSERT INTO companies(co_year, co_name, co_info) VALUES('$date','$name','$info')" ;
	 
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