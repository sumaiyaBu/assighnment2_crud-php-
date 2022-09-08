<?php
	include "dbconnect.php";
	
	$Id=$_GET["edit_id"];
	$Name=$_POST["nam"];
	$Description=$_POST["des"];
	$Quantity=$_POST["quan"];
	$Price=$_POST["price"];
	$Expire_date=$_POST["expire"];
	
	$sql="UPDATE product SET Name='$Name', Description='$Description', Quantity='$Quantity',Price='$Price',Expire_date='$Expire_date'
	 where Id='$Id' ";
	
	$result=$conn->query($sql);
	if($result)
		header('location:index.php');
	
	
	

	
	
	
?>

