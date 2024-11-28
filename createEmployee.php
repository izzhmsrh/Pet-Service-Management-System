<!DOCTYPE html>
<html>
<head>
	<title>Create Employee | FURRYCAT</title>
	<style>
		body{
			background-image: url(img/cat.jpeg);
	        background-attachment: fixed;
	        background-position: center;
	        background-repeat: no-repeat;
	        background-size: cover;
	        font-family: 'Open Sans', sans-serif;
		}			
		form{
			width: 30%;
		    margin: 143px auto;
		    text-align: left;
		    padding: 40px;
		    border: 1px solid #bbbbbb; 
		    border-radius: 5px;
		}
		.input-group{
			margin: 10px 0px 10px 0px;
		}
		.input-group label{
			color: white;
			display: block;
			text-align: left;
			margin: 3px;
		}
		.input-group input{
			height: 30px;
		    width: 93%;
		    padding: 5px 10px;
		    font-size: 16px;
		    border-radius: 5px;
		    border: 1px solid gray;
		}
		.addButton input{
			font-size: 15px;
		    color: white;
		    background: #5F9EA0;
		    border: none;
		    height: 40px;
		    width: 98%;
		    padding: 5px 10px;
		    border-radius: 5px;
		}
	</style>
</head>
<body>
	<form name="form" method="post" action="createEmployee.php">
		<div class="input-group">
			<label>Employee ID:</label>
			<input type="text" name="EMP_ID" value="">
		</div>
		<div class="input-group">
			<label>Employee Name:</label>
			<input type="text" name="EMP_NAME" value="">
		</div>
		<div class="input-group">
			<label>Employee HP:</label>
			<input type="text" name="EMP_NO_PHONE" value="">
		</div>
		<div class="addButton">
			<input type="submit" name="submit" value="Save">
		</div>
	</form>
</body>
</html>

<?php
include("dbconn.php");
if(isset($_POST['submit'])){
	$empID = $_POST['EMP_ID'];
	$name = $_POST['EMP_NAME'];
	$hp = $_POST['EMP_NO_PHONE'];

	$sql0 = "SELECT EMP_ID FROM employee WHERE EMP_ID= $empID";
	$query0 = mysqli_query($connect, $sql0) or die ("Error: " .mysqli_error($connect));
	$row0 = mysqli_num_rows($query0);

	if($row0 != 0){
		echo "Record is existed";
	}
	else{
		$sql2 = "INSERT INTO employee (EMP_ID, EMP_NAME, EMP_NO_PHONE)
		VALUES ('" . $empID . "', '" . $name . "', '" . $hp . "')";
			mysqli_query($connect, $sql2) or die ("Error: " .mysqli_error($connect));
		}
		 echo "<script>
window.location.href='employee.php';
alert('Employee has been added');
</script>";

	}
?>