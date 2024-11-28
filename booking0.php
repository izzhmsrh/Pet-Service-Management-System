<html>

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <meta charset="utf-8">
    <title>PetLover - Pet Care Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
<script type="text/javascript" src="registerCustomer.js"></script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</HEAD>
    <body>
        <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">FURRY</span>CAT</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Opening Hours</h6>
                        <p class="m-0">9.00AM - 6.00PM</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Email Us</h6>
                        <p class="m-0">furrycat@gmail.com</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Call Us</h6>
                        <p class="m-0">+012 3312144</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
 
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="customerHome.php" class="nav-item nav-link">Home</a>
                    <a href="customerHome.php#aboutUs" class="nav-item nav-link">About</a>
                    <a href="customerHome.php#services" class="nav-item nav-link">Services</a>
                    <a href="booking.php" class="nav-item nav-link active">Booking</a>
                    
                       <div class="nav-item dropdown">
                        <a href="#" class="nav-link  dropdown-toggle" data-toggle="dropdown">Account</a>
                        <div class="dropdown-menu rounded-0 m-0">
                             <a href="profileCustomer.php" class="dropdown-item">My Booking</a>
                            <a href="loginCustomer.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                    
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->
</head>
<body>

<?php
session_start();
    include("dbconn.php");

    if(isset($_POST['submit']))
    {
        
        $custid=$_POST['CUST_ID'];
        $serviceid=$_POST['SERVICE_ID'];
        $date=$_POST['BOOK_DATE'];
        $time=$_POST['BOOK_TIME']; 
        $nocat=$_POST['NO_OF_CATS'];
      
       
        $sql= "SELECT * FROM booking WHERE BOOK_DATE= '$date' AND BOOK_TIME='$time'";
        $query = mysqli_query($connect, $sql) or die("Error: " . mysqli_error($connect));

        $row = mysqli_num_rows($query);
        if($row == 0)
        {

           $sql2="INSERT INTO booking(CUST_ID,SERVICE_ID,BOOK_DATE,BOOK_TIME,NO_OF_CATS) VALUES ('".$custid."','".$serviceid."','".$date."','".$time."','".$nocat."')" ; 

            mysqli_query($connect,$sql2) or die ("Error:".mysqli_error($connect));
             
        echo "  <br>"; 

        $sql3="SELECT SERVICE_COST FROM service WHERE SERVICE_ID='$serviceid'";

        $query2 = mysqli_query($connect, $sql3) or die("Error: " . mysqli_error($connect));
        $a=mysqli_num_rows($query2);
        $result = mysqli_fetch_assoc($query2);
        

               
          ?>


            <center> 
        <table class="table" style="width:50%;">

         <?php echo "<script>
alert('Booking Sucessfully');
</script>" ?>
            <label style="font-size:50px;"><br>FurryCat : Official Receipt</label>
            <tr>
            <th><h5>Service ID</h5></td>
            <th><h5>Book date</h5></td>
            <th><h5>Book Time</h5></td>
            <th><h5>No Of Cat</h5></td>
            <th><h5>Price Service</h5></td>
              

            </tr>
              
                <td> <?php echo $serviceid?> </td>
                <td> <?php echo $date ?> </td>
                <td> <?php echo $time ?> </td>
                <td> <?php echo $nocat?> </td>
                <td> <?php echo "RM ".$result['SERVICE_COST'] ?> </td>
               
               <h2>Total Price:RM <?php echo $nocat*$result['SERVICE_COST'] ?></h2>
               
                <button onClick="window.print()">Print<br></button>
<?php        

 /*$data=mysqli_query($connect,"select * from booking");
                while($result=mysqli_fetch_array($data)){
                echo $result["Cust_ID"];
                echo "";  <--!<h2>Booking ID: <?php echo $bookid ?></h2>
                echo $result['Service_ID'];
                echo "";}*/
          }
        else
        {
            echo "<script>
window.location.href='booking.php';
alert('Choose Another Date and Time');
</script>";

         }

      
    }
mysqli_close($connect);
?>

</body>
</html>