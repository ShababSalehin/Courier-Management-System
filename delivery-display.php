<style>
td
{
padding:50px;
}

 body {
  background-image: url('assets/uploads/img_bg_2.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

</style>


<?php
include("db_connect.php");
error_reporting(0);
$query = "SELECT * FROM delivery";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
?>
<table>
<tr>
<th><b><i><h3><u>Delivery ID</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></i></b></th>
<th><b><i><h3>&nbsp;&nbsp;&nbsp;&nbsp;<u>Delivery Address</u>&nbsp;&nbsp;&nbsp;&nbsp;</h3></i></b></th>
<th><b><i><u><h3>Delivery Type</h3></u></i></b></th>
<th colspan="2"><b><i><u><h3>Operations</h3></u></i></b></th>

</tr>

<?php
while($result=mysqli_fetch_assoc($data))
{echo "<tr>
<td><h4>".$result['delivery_id']."</h4></td>
<td><h4>".$result['delivery_address']."</h4></td>
<td><h4>".$result['delivery_type']."</h4></td>
<td><h4><a href='delivery-update.php?delivery_id=$result[delivery_id]&delivery_address=$result[delivery_address]&delivery_type=$result[delivery_type]'>Edit</a></h4></td>
<td><h4><a href='delivery-delete.php?delivery_id=$result[delivery_id]' onclick='return checkdelete()'>Delete</a></h4></td>
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
<body bgcolor="#FFFF00">
</body>