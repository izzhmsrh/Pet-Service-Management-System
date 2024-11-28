<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Service | FURRYCAT</title>

  <style>
    body {
      color: white;
      background-image: url(img/cat2.jpeg);
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      font-family: 'Open Sans', sans-serif;
      color: black;
  }
  form{
    width: 45%;
    margin: 50px auto;
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
  .input-group textarea{
    height: 50px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .addService input{
    text-decoration: none;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    height: 40px;
    width: 96.6%;
    padding: 5px 10px;
    border-radius: 5px;
  }
  </style>
</head>

<body>
  <form name="form" method="post" action="" enctype="multipart/form-data">
    <div class="input-group">
      <label>SERVICE ID:</label>
      <input name="servid" type="text" id="servid">
    </div>

    <div class="input-group">
      <label>Name:</label>
      <input name="name" type="text" id="name">
        </div>

        <div class="input-group">
          <label>Image:</label>
          <input type="file" name="image">
        </div>

        <div class="input-group">
          <label>Description:</label>
          <textarea id="descp" name="descp" placeholder="Say something about this image..."></textarea>
        </div>

        <div class="input-group">
          <label>Cost:</label>
          <input name="cost" type="text" id="cost">
        </div>

        <div class="input-group">
          <label>EmpID:</label>
          <input name="empid" type="text" id="empid">
        </div>

        <div class="addService">
          <input type="submit" name="add" value="Save">
        </div>
  </form>
  </body>
</html>

<?php
include("dbconn.php");
// If upload button is clicked ...
if (isset($_POST['add'])) {
  $Ser_id = $_POST['servid'];
  $name = $_POST['name'];
  $cost = $_POST['cost'];
  $empid = $_POST['empid'];
  $image = $_FILES['image']['name'];    // Get image name
  $descp = mysqli_real_escape_string($connect, $_POST['descp']);

  // image file directory
  $target = "images/".basename($image);

  $sql = "INSERT INTO service (SERVICE_ID, SERVICE_NAME,SERVICE_IMAGE,SERVICE_DESCRIPTION,SERVICE_COST,EMP_ID) VALUES ('$Ser_id','$name','$image', '$descp','$cost','$empid')";

  // execute query
  mysqli_query($connect, $sql);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "";
    echo  "<script>
window.location.href='service.php';
alert('Service has been Added');
</script>";
  }
  else{
    $msg = "Failed to upload image";
  }
}
?>
