<?php

session_start();
include "database.php";


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

	    
	    	 <h3 id="heading">View request details</h3>
	    	 <?php
	    	 $sql="SELECT STUDENT.NAME,reuest.MES,reuest.LOGS from student INNER join reuest on student.ID=reuest.ID";
	    	 $res=$db->query($sql);
	    	 if($res->num_rows>0)
	    	 {
	    	 	echo "<table>
                 <tr>
                 <th>SNO</th>
                 <th>NAME</th>
                 <th>MES</th>
                 <th>LOGS</th>
                 </tr>
	    	 	";
	    	 	$i=0;
	    	 	while($row=$res->fetch_assoc()){
	    	 		$i++;
	    	 		echo "<tr>";
	    	 		echo "<td>{$i}</td>";
                       echo "<td>{$row['NAME']}</td>";
                      echo "<td>{$row['MES']}</td>";
                     echo "<td><a href='{$row['LOGS']}</td>";
	    	 		echo "</tr>";
	    	 	}
	    	 	echo "<table>";
	    	 }
	    	 else
	    	 {
	    	 	echo "<p class='error'>No request found</p>";
	    	 }
	    	 ?>
	    	 	

             
	   
	    		
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