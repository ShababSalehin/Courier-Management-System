<?php
include("db_connect.php");
error_reporting(0);

?>

<html>
<head>
</head>
<body>
<form action="" method="GET"><h1><font color='white'>
Customer ID         : <input type="" name="customer_id" value=""/><br><br>

Customer Name       : <input type="text" name="customer_name" value=""/> <br><br>

Customer Email      : <input type="text" name="customer_email" value=""/><br><br>

Customer Mobile     : <input type="text" name="customer_mobile" value=""/><br><br>      

Username            : <input type="text" name="username" value=""/><br><br>

Password            : <input type="text" name="password" value=""/><br><br>
<input type="Submit" name="submit" value="Submit"/>
</h1>
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

			if($id!="" && $cn!="" && $ce!="" && $cm!="" && $user!="" && $pwd!="")
			{
				$query = "INSERT INTO CUSTOMER VALUES ('$id', '$cn','$ce','$cm','$user','$pwd')";
				
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