<html>
<head>
	<title>PHP-SRePS</title>
</head>
<style>
	body {
		background-image: url("background.png");
		background-size: 100% 100%;
	}
	.border {
		background-size: 100% 100%;
		background-color: white;
	}
	table{
		font-size: 20px;
	}
	h1{
		font-size: 30px;
	}
	p{
		font-size: 20px;
	}
</style>

<body>

<center><DIV class = "border" style="border: 3px solid grey;padding:30px; width:50%; height: 90%" >
<h1><center>Employee Confirmation Registration</center></h1>
<!-- Form back to login screen -->
<form action="index.html" method="post">
<table align="center" height="100px" width="500px" border=0>

<?php
session_start();
//Display Date
$timezone="Asia/Kuala_Lumpur";
date_default_timezone_set($timezone);
$_SESSION['date'] = date("d-M-Y h:i a");

echo "<p align = left>Registered Date & Time: <b>".$_SESSION['date']."</b><br></p>";
	//Connect to db
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'php_sreps');
	
	//Test
	/*
	if(!$con)
	{
		echo'Not connected to server';
	}
	if (!mysqli_select_db($con,'didi'))
	{
		echo'Database Not selected';
	}
	*/
	
	//Insert data to db
	$sqlemp ="INSERT INTO employee_information(username,ic,password,email,contact,gender,dob,status,regdate)
	 VALUES ('".$_POST['emp_username']."','".$_POST['emp_ic']."','".$_POST['emp_password']."','".$_POST['emp_email']."','".$_POST['emp_contact']."','".$_POST['emp_gender']."','".$_POST['emp_dob']."',
			'".$_POST['emp_status']."','".$_SESSION['date']."')";
			
	mysqli_query($con,$sqlemp);
	
	
	//Test
	/*
	if (!mysqli_query($con,$sqlcus))
	{
		echo'Not Inserted';
	}
	else
	{
		echo'Inserted';
	}
	*/
	
?>

<?php
	//Display data inserted
    echo "<p align = left>Registration Date : <b>".$_SESSION['date']."</b><br></p>".
		 "<p align = left>Username : <b>".$_POST['emp_username']."</b><br></p>".
		 "<p align = left>Ic : <b>".$_POST['emp_ic']."</b><br></p>".
		 "<p align = left>Password : <b>".$_POST['emp_password']."</b><br></p>".
         "<p align = left>Email : <b>".$_POST['emp_email']."</b><br></p>".
         "<p align = left>Contact: <b>".$_POST['emp_contact']."</b><br></p>".
		 "<p align = left>Gender : <b>".$_POST['emp_gender']."</b><br></p>".
		 "<p align = left>Date of Birth : <b>".$_POST['emp_dob']."</b><br></p>".
		 "<p align = left>Status : <b>".$_POST['emp_status']."</b><br></p>";
		 
?>

<tr><td></td><td align="center"><input type="submit" value="Confirm"></td>
</form>

</DIV></center>
</body>
</html>