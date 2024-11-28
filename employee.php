<?php   
 include("dbconn.php");
 $query = "SELECT EMP_ID, EMP_NAME, EMP_NO_PHONE FROM employee";  
 $run = mysqli_query($connect,$query);  
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employee | FURRYCAT</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    
    body {
        color: white;
        background-image: url(img/cat.jpeg);
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Open Sans', sans-serif;
	}
	.table-wrapper {
		width: 700px;
        margin-left: 32%;
        margin-top: 8%;
        padding: 20px;	
        background: rgba(0,0,0,.45);
        border-radius: 10px;
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
        border: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 18px;
        background-color: #5F9EA0;
    }
    table.table {
        table-layout: fixed;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }
    #btn, input[name="Submit"] {
        font-weight: bold;
        font-size: 12px;
        border: none;
        border-radius: 5px;
        background-color: #5F9EA0;
        padding: 8px 11.5px;
     }
     a:link {
        text-decoration: none;
     }
</style>

</script>
</head>
<body>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
        <h3 class="w3-bar-item">Admin</h3>
        <a href='employee.php' class="w3-bar-item w3-button">Employee</a>
        <a href='service.php' class="w3-bar-item w3-button">Service</a>
        <a href='loginAdmin.php' class="w3-bar-item w3-button">Logout</a>
    </div>



    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <form method="POST" action="createEmployee.php" class="btn btn-info add-new">
                    <p><a href="createEmployee.php" type="submit"><i class="fa fa-plus"></i>&nbsp;Add New</a></p>

               </form>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <tr class="heading">
               <th>Employee ID</th>
               <th>Employee Name</th>
               <th>Employee HP</th>
          </tr>

          <?php
          if ($num = mysqli_num_rows($run)>0) {
               while ($result = mysqli_fetch_assoc($run)) {
                    echo "
                    <tr class='data'>
                    <td>".$result['EMP_ID']."</td>
                    <td>".$result['EMP_NAME']."</td>
                    <td>".$result['EMP_NO_PHONE']."</td>

                    <td>
                    <a href='deleteEmployee.php?v=".$result['EMP_ID']."' id='btn'>Delete</a>
                    <a href='updateEmployee.php?v=".$result['EMP_ID']."' id='btn'>Update</a>
                    </td>
                    </tr>
                    ";
               }
          }
     ?>
     
 </table>
        </div>
    </div>     
</body>
</html>