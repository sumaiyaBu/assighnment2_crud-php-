<?php
	include "dbconnect.php";
    $Name=$Description=$Quantity=$Price=$Expire_date="";
	$NameMsg=$DescriptionMsg=$QuantityMsg=$PriceMsg=$Expire_dateMsg="";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$Name = test_input($_POST["nam"]);
		$Description=test_input($_POST["des"]);
		$Quantity=test_input($_POST["quan"]);
		$Price=test_input($_POST["price"]);
		$Expire_date=test_input($_POST["expire"]);
	
	}
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$sql = "INSERT INTO product(Id, Name, Description, Quantity, Price, Expire_date)
	VALUES (NULL, '$Name', '$Description', '$Quantity', '$Price','$Expire_date')";
	
	if($conn->query($sql))
	{
		header('location:index.php');
		//$last_id = $conn->insert_id;
		//echo "Data inserted Successfully";
	}

	
	//echo "Last Id: ". $last_id;

	$conn->close();	

?>

