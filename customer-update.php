<?php
include("db_connect.php");
error_reporting(0);
            $_GET['id'];
			$_GET['cn'];
			$_GET['ce'];
			$_GET['cm'];
?>

<html>
<head>
</head>
<body>
<form action="" method="GET"><h1><font color='white'>
Customer ID         : <input type="" name="customer_id" value="<?php echo $_GET['id'];?>"/><br><br>

Customer Name       : <input type="text" name="customer_name" value="<?php echo $_GET['cn'];?>"/> <br><br>

Customer Email      : <input type="text" name="customer_email" value="<?php echo $_GET['ce'];?>"/><br><br>

Customer Mobile     : <input type="text" name="customer_mobile" value="<?php echo $_GET['cm'];?>"/><br><br> 

Username            : <input type="text" name="username" value="<?php echo $_GET['user'];?>"/><br><br>

Password            : <input type="text" name="password" value="<?php echo $_GET['pwd'];?>"/><br><br>     
<input type="Submit" name="submit" value="Update"/>
</h2>
</form>

	<?php
		if($_GET['submit'])
		{
			$id=$_GET['customer_id'];
			$cn=$_GET['customer_name'];
			$ce=$_GET['customer_email'];
			$cm=$_GET['customer_mobile'];
			$user=$_GET['username'];
			$pwd=$_GET['password'];
			$query= "UPDATE CUSTOMER SET customer_name='$cn',customer_email='$ce',customer_mobile='$cm',username='$user',password='$pwd' WHERE customer_id='$id'";
			$data=mysqli_query($conn,$query);
			if($data)
			{
				echo "<h2><font color='white'>Record updated successfully.</h2> <a href='customer-display.php'><h2><font color='yellow'>Check updated list here.</h2></a>";
			}
			else
			{
				echo "<h2><font color='white'>Record not updated.</h2> <a href='customer-display.php'><h2><font color='yellow'>Check updated list here.</h2></a>";
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