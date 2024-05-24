<style>
td
{
padding:50px;
}

 body {
  background-image: url('assets/uploads/img_bg_3.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>

<?php
include("db_connect.php");
error_reporting(0);
$query = "SELECT * FROM customer";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
?>
<table>
<tr>
<th><b><i><h3><u>Customer ID</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></i></b></th>
<th><b><i><u><h3>Customer Name</h3></u></i></b></th>
<th><b><i><u><h3>Customer Email</h3></u></i></b></th>
<th><b><i><u><h3>Customer Mobile</h3></u></i></b></th>
<th colspan="2"><b><i><u><h3>Operations</h3></u></i></b></th>

</tr>

<?php
while($result=mysqli_fetch_assoc($data))
{echo "<tr>
<td><h4>".$result['customer_id']."</h4></td>
<td><h4>".$result['customer_name']."</h4></td>
<td><h4>".$result['customer_email']."</h4></td>
<td><h4>".$result['customer_mobile']."</h4></td>
<td><h4><a href='customer-update.php?id=$result[customer_id]&cn=$result[customer_name]&ce=$result[customer_email]&cm=$result[customer_mobile]'>Edit</a></h4></td>
<td><h4><a href='customer-delete.php?id=$result[customer_id]' onclick='return checkdelete()'>Delete</a></h4></td>
</tr>";
}
}
else{
	echo "No record found";
}
?>
</table>
<script>
function checkdelete()
{
	return confirm('Are you sure you want to delete this data ?');
}
</script>


	