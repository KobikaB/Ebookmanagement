 <!-- connection file -->
<?php
$db=new mysqli("localhost","root","","Ebookmanagement");
if(!$db){
	echo "Error";
}
else{
	echo "Database connected";
}
?>