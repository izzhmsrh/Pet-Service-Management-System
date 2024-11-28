<?php   
 include("dbconn.php");  
 if (isset($_GET['v'])) {  
      $id = $_GET['v'];  
      $query = "DELETE FROM service WHERE SERVICE_ID = $id";  
      $run = mysqli_query($connect,$query);  
      if ($run) {  
           echo  "<script>
window.location.href='service.php';
alert('Service has been deleted');
</script>";
      }else{  
           echo "Error: ".mysqli_error($connect);  
      }  
 }  
 ?>