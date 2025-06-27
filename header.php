<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Job Listing</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!--
         CSS
         ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <!-- <div class=" align-items-center justify-content-between d-flex"> -->
                <div id="logo">
                    <a href="index.php"><img src="img/pages/stock-photo (2).png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="category.php">Job</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="nav-buttons">
                    <ul class="nav-menu">
                        <li><label for="toggle-login" class="ticker-btn-login" id="cta" style="cursor: pointer;">Driver</label></li>
                        <li> <label for="toggle-login" class="ticker-btn-login  btn-thinker"><a class="text-white" href="#customerModal">Customer</a></label></li>
                        <li><label for="toggle-login-otp" class="ticker-btn-login btn-thinker"><a class="text-white" href="#customerModalal">Login / Sign Up</a></label></li>
                    </ul>
                </div>
                <!-- </div> -->
            </div>
        </div>


        <!-- login -->
        <input type="checkbox" id="toggle-login" hidden>
        <!-- Login Form Modal -->
        <div id="login-form">
            <label for="toggle-login" class="close-btn">&times;</label>
            <div class="form-content ">
                <div class=" mt-5">
                    <div class="card  border-0 rounded-4">
                        <div class="card-header bg-gradient text-white text-center rounded-top-4" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">
                            <h4 class="mb-0">🚗 Driver Registration Form</h4>
                        </div>
                        <div class="card-body p-4">
                            <form action="submit_driver.php" method="POST" >
                                <div class="mb-3 text-left">
                                    <label for="fullname" class="form-label text-black">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" id="fullname" name="fullname" required placeholder="Enter your full name">
                                </div>

                                <div class="mb-3 text-left">
                                    <label for="license" class="form-label text-black">License Number</label>
                                    <input type="text" class="form-control form-control-lg" id="license" name="license" required placeholder="Enter your license number">
                                </div>

                                <div class="mb-3 text-left">
                                    <label for="phone" class="form-label text-black">Phone Number</label>
                                    <input type="tel" class="form-control form-control-lg" id="phone" name="phone" required placeholder="Enter your phone number">
                                </div>

                                <div class="mb-4 text-left">
                                    <label for="vehicle" class="form-label text-black">Vehicle Type</label>
                                    <select class="form-select select-fm form-select-lg" id="vehicle" name="vehicle" required>
                                        <option value="" disabled selected>Select vehicle type</option>
                                        <option value="bike">Bike</option>
                                        <option value="car">Car</option>
                                        <option value="van">Van</option>
                                        <option value="truck">Truck</option>
                                    </select>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-muted text-center small">
                            We'll never share your info with anyone.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Form Modal -->
        <div id="customerModal" class="modal">
            <div class="modal-box">
                <a href="#" class="close-btn">&times;</a>
                <h2>Customer Details Form</h2>
                <form action="submit_customer.php" method="POST">
                    <label for="customerName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="customerName" name="customerName" required>

                    <label for="customerEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="customerEmail" name="customerEmail" required>

                    <label for="customerPhone" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="customerPhone" name="customerPhone" required>

                    <label for="customerAddress" class="form-label">Address</label>
                    <textarea class="form-control" id="customerAddress" name="customerAddress" rows="3"></textarea>

                    <button type="submit" class="btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- 🔘 Toggle control -->
        <div id="customerModalal" class="modal">
            <div class="modal-box">
                <a href="#" class="close-btn">&times;</a>
                <div class="form-content">
                    <div class="card-header">🔐 Login / Sign Up</div>
                    <form action="submit_login.php" method="POST">
                        <label class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" name="mobile" pattern="[0-9]{10}" required placeholder="Enter 10-digit mobile number">

                        <label class="form-label">OTP</label>
                        <input type="text" class="form-control" name="otp" pattern="[0-9]{4,6}" required placeholder="Enter OTP">

                        <button type="submit" class="btn-primary">Verify & Login</button>
                    </form>
                </div>
            </div>
        </div>




            <!-- Bootstrap Bundle JS -->
            <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

    </header>
    