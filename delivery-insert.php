<?php
include("db_connect.php");
error_reporting(0);
?>

<html>
<head>
</head>
<body>
<form action="" method="GET"><h1><font color='white'>
Delivery ID         : <input type="" name="delivery_id" value=""/><br><br>

Delivery Address       : <input type="text" name="delivery_address" value=""/> <br><br>

Delivery Type      : <input type="text" name="delivery_type" value=""/><br><br>

<input type="Submit" name="submit" value="Submit"/>
</h1>
</form>

	<?php
		if($_GET['submit'])
		{
			$delivery_id=$_GET['delivery_id'];
			$delivery_address=$_GET['delivery_address'];
			$delivery_type=$_GET['delivery_type'];
			if($delivery_id!="" && $delivery_address!="" && $delivery_type!="")
			{
				$query = "INSERT INTO delivery VALUES ('$delivery_id', '$delivery_address','$delivery_type')";
                $data = mysqli_query($conn,$query);
				if($data)
				{
					echo "<h2><font color='white'>Data inserted.</h2>";
				}
			
			}
			
			else
			{
				echo "<h2><font color='white'>All fields must fill up.</h2>";
			}
		}
		
		
		
	?>



</body>



</html>
<style>
body {
	background-image: url('br registration.jpg');
	background-size: 100% 110%;
	width: 100%;
	height: 100vh;
}
</style>