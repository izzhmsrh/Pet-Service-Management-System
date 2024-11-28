<?php
include("dbconn.php");
if (isset($_GET['v'])) {
     $id = $_GET['v'];
     $query = "DELETE FROM booking WHERE BOOKING_ID = $id";
     $run = mysqli_query($connect,$query);
     if ($run) {
       echo  "<script>
window.location.href='phpSearch.php';
alert('Your Booking has been Canceled');
</script>";
     }
     else{
          echo "Error: ".mysqli_error($connect);
     }
}
?>