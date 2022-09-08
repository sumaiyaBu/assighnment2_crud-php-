
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
                    padding: 10px;
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3),0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    /* margin-top: 10px; */
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
                h1{
                    font-size:40px;
                    font-weight:600;
                }
            </style>
<body>


<h1> Insert Data</h1>
<form action="insert.php" method="post">
 <fieldset style="background-color:skyblue">
<!-- Id: <input type="text" name="edit_id"> <br><br> -->
Name*: <input type="text" placeholder="Name" name="nam"> <br><br>

Description: <input type="text" placeholder="Des" name="des"><br><br>
Quantity: <input type="text" placeholder="Quantity" name="quan"><br><br>
Price: <input type="text" placeholder="Price" name="price"><br><br>
Expire_date: <input type="text" placeholder="Expire_date" name="expire"><br><br>

<input type="submit" value="Insert">
            </fieldset>
</form>

</body>
</html>
