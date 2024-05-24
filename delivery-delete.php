<?php
include("db_connect.php");
$delivery_id = $_GET['delivery_id'];
$query= "DELETE FROM delivery WHERE delivery_id='$delivery_id'";
$data=mysqli_query($conn,$query);
			if($data)
			{
				echo "<script>alert('Record deleted.')</script>";
				?>
				<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/cms/delivery-display.php">
				<?php
			}
			else
			{
				echo "<script>alert('Delete process failed.')</script>";
			}
			?>
		
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/cms/delivery-display.php">
<?php
?>