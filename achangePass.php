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

	    
	    	 <h3 id="heading">Change password</h3>
	    	
	    	 	<div id="center">

	    	 		<<?php 

                    if(isset($_POST['submit']))
                    {
                    $sql="SELECT * FROM admin  where APASS={'$_POST['opass']}' and AID='{$_SESSION['AID']}'";	
                    $res=$db->query($sql);
                    if($res->num_rows>0)
                    {
                     $s="update admin set APASS='{$_POST["npass"]}' where AID=".$_SESSION['AID']" ;
                    }
                    else
                    {
                    	echo "<p class='error'>Invalid password</p>";
                    }

                    }

	    	 		 ?>


	    	 		<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
	    	 			<label>Old Password</label>
	    	 			<input type="password" name="opass" required>
	    	 			<label>New Password</label>
	    	 			<input type="password" name="npass" required>
	    	 			<button type="submit" name="submit">Update password</button>

	    	 			
	    	 		</form>
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