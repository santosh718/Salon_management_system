<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <Table>
        <tr>
            <td><input type="text" name="SrNo" id="SrNo"></td>
            <td><input type="text" name="ItemName" id="ItemName"></td>
            <td><input type="text" name="Price" id="Price"></td>
            <td><input type="text" name="Amount" id="Amount"></td>
            <td><input type="submit" value="Create"></td>
        </tr>
    </Table>
    </form>
</body>
</html>

<?php
	$con = new mysqli("localhost","root","printf[];","Santosh@123","Test");
	
	
	if ($con->connect_error) {
	  die("Connection failed: " . $con->connect_error);
	}
	echo "Connected successfully";
    $SrNo = $_POST["SrNo"];
	$Name = $_POST["ItemName"];
	$Price = $_POST["Price"];
	$Amount = $_POST["Amount"];
	
	$sql = "INSERT INTO Invoice (SrNo,ItemName, Price, Amount) VALUES ($SrNo,'$Name',$Price,$Amount)";
	

	
	if ($con->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
?>