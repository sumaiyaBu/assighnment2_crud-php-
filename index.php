<?php
	include "dbconnect.php";
	$sql="SELECT * FROM product";
	
	$result=$conn->query($sql);
	
?>


<html>
	<body>
		<style>
			body{
				background: url(img/leaves.png) repeat fixed 0 0;
			}
			
			td{
				color:black;
				background-color:white;
			}
			img{
				margin-left:8px;
				font-size:10px;
			}
		</style>

	<center>
		<h1 style="color:black"> Product Information</h1>
		<table  border='3' cellpadding='10' cellspacing='5' style="width:100%;background-color:#ccc">
			<tr >
				
				<th style="background-color:blue;color:white">Name</th>
				<th style="background-color:blue;color:white">Description</th>
				<th style="background-color:blue;color:white">Quantity</th>
				<th style="background-color:blue;color:white">Price</th>
				<th style="background-color:blue;color:white">Expire_date</th>
				<th style="background-color:blue;color:white">Edit<img src="img/edit.png" alt=""></th>
				<th style="background-color:blue;color:white">Delete<img src="img/del.png" alt=""></th>
			</tr>
			<?php 
			while($row = $result->fetch_assoc()){
				$id= $row["Id"];
				$name=$row["Name"];
				
				echo "<tr>";
				//echo "<td >". $id. "</td>";
					echo "<td>". $name. "</td>";
					echo "<td>". $row["Description"]. "</td>";
					echo "<td>". $row["Quantity"]. "</td>";
					echo "<td>". $row["Price"]. "</td>";
					echo "<td>". $row["Expire_date"]. "</td>";
					echo "<td><b><a href='edit.php?edit=$id'> Edit </a></b></td>";
					echo "<td><b> <a href='delete.php?del=$id'> Delete </a></b> </td>";
				echo "</tr>";
				}
			?>
		
		</table>
		<button style="color:red;background-color:blue;margin-top:25px;padding:5px"><a style="color:white;text-decoration:none"href="insertData.php">Insert Product Information</a></button>
		
		<br><br>

	</center>
	</body>
</html>



