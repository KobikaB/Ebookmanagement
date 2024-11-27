<?php
session_start();
include "Database.php";
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
	    	 <h3 id="heading">Admin login Here</h3>
	    	 <div id="center">

             <?php

             if(isset($_POST['submit'])){
             	  $sql="SELECT * FROM admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
             	  $res=$db->query($sql);

             	  if($res->num_rows>0){

             	  	$row=$res->fetch_assoc();
             	  	$_SESSION["AID"]=$row["AID"];
             	  	$_SESSION["ANAME"]=$row["ANAME"];
                    header("location:ahome.php");
             	  }
             	  else{
             	  	echo "<p class='error'>invalid user details</p>";
             	  }
              
             }
             ?>

	    	 <form action="alogin.php" method="post">
	    	 	<label>Name</label>
	    	 	<input type="text" name="aname" required>
	    	 	<label>Password</label>
	    	 	<input type="password" name="apass" required>
	    	 	<button type="submit" name="submit">Login now </button>
	    	 </form>
	    	</div>
	    		
	    </div>

	    <div id="navi">
	   <?php
	   include "sidebar.php"
	   ?>
	    </div>

	    <div id="footer" >
	    	<p>Copyright &copy; KOBIKA 2024</p>
	    </div>



	</div>


</body>
</html>