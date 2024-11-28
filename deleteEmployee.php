<?php
include("dbconn.php");
if (isset($_GET['v'])) {
     $id = $_GET['v'];
     $query = "DELETE FROM employee WHERE EMP_ID = $id";
     $run = mysqli_query($connect,$query);
     if ($run) {
          echo "<script>
window.location.href='employee.php';
alert('Employee has been deleted');
</script>";
     }
     else{
          echo "Error: ".mysqli_error($connect);
     }
}
?>