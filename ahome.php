<?php

session_start();
include "database.php";
function countRecord($sql,$db)
{
$res=$db->query($sql);
return $res->num_rows;
}

if(!isset($_SESSION["AID"])){
	header("location:alogin.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-Book management</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		<div id="header">
		<h1>E-Library management system</h1>
	    </div>

	    <div id="wrapper">
	    	 <h3 id="heading">Welcome Admin</h3>
	    	 <div id="center">
	    	 	<ul class="record">
	    	 		<li>Total students: <?php echo countRecord("select * from student",$db); ?></li>
	    	 		<li>Total books:<?php echo countRecord("select * from student",$db); ?></li>
	    	 		<li>Total request: <?php echo countRecord("select * from reuest",$db); ?></li>
	    	 		<li>Total comments:<?php echo countRecord("select * from comment",$db); ?></li>
	    	 	</ul>

             
	    	</div>
	    		
	    </div>

	    <div id="navi">
	   <?php
	   include "adminsidebar.php"
	   ?>
	    </div>

	    <div id="footer" >
	    	<p>
	    	Copyright &copy; KOBIKA 2024</p>
	    </div>



	</div>


</body>
</html>