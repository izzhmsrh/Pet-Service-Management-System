<!DOCTYPE html>
<html lang="en">
<HEAD>
<meta charset="utf-8">
    <title>Booking | FURRYCAT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="de<scription">
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
                        <p class="m-0">+03 345 6789</p>
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
                    <a href="customerHome.php" class="nav-item nav-link ">Home</a>
                    <a href="customerHome#aboutUs" class="nav-item nav-link">About</a>
                    <a href="serviceCustomer.php" class="nav-item nav-link ">Services</a>
                    <a href="booking.php" class="nav-item nav-link active">Booking</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                        <div class="dropdown-menu rounded-0 m-0">
                             <a href="BookingInfo.php" class="dropdown-item">My Booking</a>
                            <a href="loginCustomer.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>

                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->

        <p>
            <h1 align="center">MAKE AN APPOINTMENT WITH US</h1></p>

    <div class="container-fluid">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="bg-primary py-5 px-4 px-sm-5">
        <form name=appointment method=post action="booking0.php">
            <div class="form-group">
            Customer ID : <input type="text" placeholder="Your ID Number" name=CUST_ID class="form-control border-0 p-4" required >
               <div class="form-group " required>
                Service Name :<br>
<select name="SERVICE_ID"   >
    <option value="1">Soft Tissue</option>
    <option value="2">Pet Consultation</option>
    <option value="3">Pet Grooming</option>
    <option value="4">Pet Treatment</option>
    <option value="5">Pet Dentistry</option>
    <option value="6">Pet Surgery</option>
</select>
</div> 
               <div class="form-group">  Date : <input type="date" name=BOOK_DATE class="form-control border-0 p-4" required></div>
               <div class="form-group">Time : <input type="time" name=BOOK_TIME class="form-control border-0 p-4" required> 

                
               </div>
               <div class="form-group">No of Cat : <input type="text" name=NO_OF_CATS placeholder="0" class="form-control border-0 p-4" required></div>
              
              <input type=submit name="submit" value="Book Now" class="btn btn-dark btn-block border-0 py-3" onclick="return check()">
            </div>       
  <script type="text/javascript">
        function check(){

    var booktime=document.form.BOOK_TIME.value;
    

    if(booktime>= 18:00:00 || booktime<= 08:59:59 ){
        alert("Closed Operation");
        document.form.BOOK_TIME.focus();
        return false;
    }
  
}
    </script>
    

        </form> 
    </div>
                </div>
                <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                    <h4 class="text-secondary mb-3">Going for a vacation?</h4>
                    <h1 class="display-4 mb-4">Book For <span class="text-primary">Your Pet</span></h1>
                    <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-house font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Soft Tissues</h5>
                                </div>
                                <p>RM 50</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-food font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Consultation</h5>
                                </div>
                                <p>RM 30</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Grooming</h5>
                                </div>
                                <p class="m-0">RM 40</p>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Treatment</h5>
                                </div>
                                <p class="m-0">RM 50</p>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-grooming font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Dentistry</h5>
                                </div>
                                <p class="m-0">RM 40</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-2">
                                    <h1 class="flaticon-toy font-weight-normal text-secondary m-0 mr-3"></h1>
                                    <h5 class="text-truncate m-0">Pet Surgery</h5>
                                </div>
                                <p class="m-0">RM 60</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

</body>
</html>