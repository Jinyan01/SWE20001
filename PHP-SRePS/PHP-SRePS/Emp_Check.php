<?php
session_start();

$_SESSION['epl_email']=$_POST['emp_email'];
$_SESSION['epl_password']=$_POST['emp_password'];

// Connect to MYSQL database and run select query to check useraneme and password.
$con=mysqli_connect('localhost', 'root', '');
mysqli_select_db($con,'php_sreps');
$qry="select * from employee_information where email='".$_SESSION['epl_email']."' and password='".$_SESSION['epl_password']."' ";
$result=mysqli_query($con, $qry);
if(mysqli_num_rows($result)!=0) {

	mysqli_close($con);
	header("location: Drop.html");
	
	$update = "Update employee_information set status = 'Active' ";
	$updateresult = mysqli_query($con, $update);
}
else { 
	//echo "Invalid password / username";
	mysqli_close($con); 
	unset($_SESSION); session_destroy(); 
	header("location: index.html");	
}

?>