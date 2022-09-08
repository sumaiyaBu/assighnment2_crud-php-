<?php
	include "dbconnect.php";
	
	$id=$_GET["del"]; 
	$sql="DELETE from product WHERE Id='$id'";
	$result=$conn->query($sql);
	if($result)
		header('location:index.php');
?>