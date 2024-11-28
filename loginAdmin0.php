<?php
session_start();
/* include db connection file */
include("dbconn.php");
if(isset($_POST['Submit'])){
	/* capture values from HTML form */
	$username=$_POST['Emp_Username'];
    $password=$_POST['Emp_Pass'];
	
	if($username=="admin" && $password=="admin"){
		header("location:employee.php");
	}
	else{
		echo "<script>
window.location.href='loginAdmin.php';
alert('Invalid Username And Password');
</script>";
	}

}
mysqli_close($connect);
?>