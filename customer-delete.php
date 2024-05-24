<?php
include("db_connect.php");
$customer_id = $_GET['id'];
$query= "DELETE FROM CUSTOMER WHERE customer_id='$customer_id'";
$data=mysqli_query($conn,$query);
			if($data)
			{
				echo "<script>alert('Record deleted.')</script>";
				?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/cms/customer-display.php">
				<?php
			}
			else
			{
				echo "<script>alert('Delete process failed.')</script>";
			}
			?>
		
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/cms/customer-display.php">
<?php
?>