<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: customer-login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1><font color='black'>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="customer-reset-password.php" class="btn btn-warning">Customer Reset Password</a><br><br><br><br>
        <a href="customer-insert.php" class="btn btn-info"><i>Customer INFO</i></a><br><br><br><br>		
		<a href="delivery-insert.php" class="btn btn-success"><i><b>Request a delivery</b></i></a><br><br><br><br>
		<a href="customer-logout.php" class="btn btn-danger">Sign Out</a>
    </p>
    </p>
    </p>
</body>
</html>
<style>
body {
	background-image: url('cus welcome.jpeg');
	background-size: 100% 110%;
	width: 100%;
	height: 100vh;
}
</style>