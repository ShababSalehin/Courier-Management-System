<?php
include("db_connect.php");
error_reporting(0);
            $_GET['delivery_id'];
			$_GET['delivery_address'];
			$_GET['delivery_type'];
			
?>

<html>
<head>
</head>
<body>
<form action="" method="GET"><h1><font color='white'>
Delivery ID         : <input type="" name="delivery_id" value="<?php echo $_GET['delivery_id'];?>"/><br><br>

Delivery Address    : <input type="text" name="delivery_address" value="<?php echo $_GET['delivery_address'];?>"/> <br><br>

Delivery Type       : <input type="text" name="delivery_type" value="<?php echo $_GET['delivery_type'];?>"/><br><br>
  
<input type="Submit" name="submit" value="Update"/>
</h2>
</form>

	<?php
		if($_GET['submit'])
		{
			$delivery_id=$_GET['delivery_id'];
			$delivery_address=$_GET['delivery_address'];
			$delivery_type=$_GET['delivery_type'];
			$query= "UPDATE delivery SET delivery_address='$delivery_address',delivery_type='$delivery_type' WHERE delivery_id='$delivery_id'";
			$data=mysqli_query($conn,$query);
			if($data)
			{
				echo "<h2><font color='white'>Record updated successfully.</h2> <a href='delivery-display.php'><h2><font color='yellow'>Check updated list here.</h2></a>";
			}
			else
			{
				echo "<h2><font color='white'>Record not updated.</h2> <a href='delivery-display.php'><h2><font color='yellow'>Check updated list here.</h2></a>";
			}
		}
		else
		{
			echo "<font color='blue'>Click on Update button to save changes";
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