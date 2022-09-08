<?php
	include "dbconnect.php";
	$id=$_GET["edit"];
	$sql="SELECT * FROM product where Id='$id'";
	$result=$conn->query($sql);
	
		
	$row= $result->fetch_assoc();
	$nam=$row["Name"];
	$des=$row["Description"];
	$quan=$row["Quantity"];
	$price=$row["Price"];
	$expire=$row["Expire_date"];
	 
							
		
?> 
                           



<html>
	<style>
        	  body{
            display:grid;
            place-items: center;
            font-weight:bold;
            background: url(img/leaves.png) repeat fixed 0 0;
        }
		

form{
          width:40%;
            border:5px solid gray;
            border-radius: 10px;
            padding: 10px;;
			
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3),0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: beige;
        }
		form input[type="text"]{
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #bdc7d8;
    border-radius: 5px;
    padding: 3px 10px;
    margin: 2px 0;
    font-size: 14px;
}
form input[type="submit"]{
    background-color: #4267b2;
    border:1px solid #29487d;
    color: #fff;
    padding: 3px 8px;
    margin-top: 23px;
    font-weight: 600;
        }
		form input[type="submit"]:hover{
            background-color: #4298b2;
        }
        form input[type="text"]:focus{
    border: 5px solid lightskyblue;
}
        h1{
                    font-size:40px;
                    font-weight:600;
                }
	</style>
<body>

<h1 style="color:black;font-size:40px;font-weght:600"> Update Data</h1>

<form action="editaction.php?edit_id= <?php echo $id;?>" method="post">

<!-- Id: <input type="text" name="edit_id"placeholder="Id" value="<?php echo $Id;?>"> <br><br> -->
Name*: <input type="text" name="nam" placeholder="Name" value="<?php echo $nam;?>"> <br><br>

Description: <input type="text" name="des" placeholder="Des" value="<?php echo $des;?>"><br><br>
Quantity: <input type="text" name="quan" placeholder="Quantity" value="<?php echo $quan;?>"><br><br>
Price: <input type="text" name="price" placeholder="Price" value="<?php echo $price;?>"><br><br>
Expire_date: <input type="text" name="expire" placeholder="Expire_date" value="<?php echo $expire;?>"><br><br>

<input type="submit" value="Update">

</form>

</body>
</html>

