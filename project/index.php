<!DOCTYPE html>
<html lang="en">
<head>
    <title>HMS Home Page</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <style>
        /* Add your custom styles here */
        .button-container {
            position: relative; /* Position parent relatively */
        }
        .apply-now-btn {
            position: absolute;
            top: 245px; /* Moves the button down by 100 pixels */
            left: 50%; /* Optional: center horizontally if needed */
            transform: translateX(-50%); /* Optional: center horizontally */
        }
        body {
            background: #f4f4f9; /* Light gray background for the entire page */
        }
        .marquee-container {
            background-color: transparent;
            padding: 10px;
            overflow: hidden;
            position: relative;
        }
        .marquee-content {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 10s linear infinite;
            color: #007bff;
        }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .flash-msg {
            margin-top: 20px;
        }
        .flash-msg .alert {
            margin-bottom: 0;
        }
        .container {
            margin-top: 60px;
        }
        .carousel-item img {
            height:100vh;
            width:300%; /* Set height to 50% of the viewport height */
            object-fit: cover; /* Ensure images cover the area without stretching */
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
            width: 100%;
            bottom: 0;
        }
        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .contact-location-btns {
            position: absolute;
            top: 100px; /* Adjusted top position to move buttons down slightly */
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .contact-location-btns a {
            display: block;
            width: 50px;
            height: 50px;
            background-color: white;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            color: white;
            text-decoration: none;
        }
        .contact-location-btns .contact-btn {
            background-color: #007bff;
        }
        .contact-location-btns .location-btn {
            background-color: #dc3545;
        }
        .contact-location-btns .doctor-btn {
            background-color: #28a745;
        }
        .contact-location-btns .contact-btn:hover,
        .contact-location-btns .location-btn:hover,
        .contact-location-btns .doctor-btn:hover {
            opacity: 0.8;
        }
        .social-media-btns {
            position: absolute;
            top: 280px; /* Adjusted top position to move buttons down slightly */
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .social-media-btns a {
            display: block;
            width: 50px;
            height: 50px;
            background-color: #ffffff;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            color: #333;
            text-decoration: none;
        }
        .social-media-btns .twitter-btn {
            background-color: #1da1f2;
            color: white;
        }
        .social-media-btns .instagram-btn {
            background-color: #e4405f;
            color: white;
        }
        .social-media-btns a:hover {
            opacity: 0.8;
        }
        .about-us {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .event-section {
            margin-top: 40px;
        }
        .event-section img {
            width: 100%;
            height: auto;
            cursor: pointer;
        }
        .login-section {
            margin-top: 40px;
        }
        .login-section img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

    <?php include("include/header.php"); ?>

    <!-- Contact and Location Buttons -->
    <div class="contact-location-btns">
        <a href="location.php" class="contact-btn" title="Contact Us">
            <i class="fas fa-envelope"></i>
        </a>
        <a href="location.php" class="location-btn" title="Find Us">
            <i class="fas fa-map-marker-alt"></i>
        </a>
        <a href="drlist.php" class="doctor-btn" title="Doctors">
            <i class="fas fa-user-md"></i>
        </a>
    </div>

    <!-- Social Media Buttons -->
    <div class="social-media-btns">
        <a href="https://facebook.com" target="_blank" class="facebook-btn" title="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="twitter-btn" title="Twitter">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="instagram-btn" title="Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    <!-- Running Flash Message -->
    <div class="marquee-container">
        <div class="marquee-content">
            Patients Registered Today in General & Special OPDs: 4571 Emergency OPD: 93 [Bed Availability:500]
        </div>
    </div>

    <div class="container">
        <!-- Bootstrap Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="2000">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://theranch100.com/wp-content/uploads/2023/05/CROP-SMMH-Patient-Room-Rendering-.jpg" class="d-block w-100" alt="First slide">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="img/hosp2.jpg" class="d-block w-100" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/originals/67/b0/1d/67b01d02953d7a0c0829e9afcfcfa224.jpg" class="d-block w-100" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- Sections for More Information, Apply Now, and Create Account -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 mx-1 shadow">
                <img src

="img/info.png" alt="" style="width: 100%; height: 190px">
                <h5 class="text-center">Click here for more information</h5>
                <a href="info.php">
                    <button class="btn my-3" style="background-color: #41b2cf; border: none; color: white; margin-left: 30%">Click Here..!!</button>

                </a>
            </div>

            <div class="col-md-3 mx-1 shadow">
                <img src="img/patient.jpeg" alt="" style="width: 100%; height: 190px">
                <h5 class="text-center">Create Account so that we can take good care of you</h5>
                <a href="patientaccount.php">
                    <button class="btn my-3" style="background-color: #41b2cf; border: none; color: white; margin-left: 30%">Click Here..!!</button>

                </a>
            </div>

            <div class="col-md-3 mx-1 shadow button-container">
                <img src="img/hospital.jpeg" alt="" style="width: 100%; height: 190px">
                <h5 class="text-center">We are looking for Doctors Apply soon!!</h5>
                <a href="apply.php">
                    <button class="btn my-3" style="background-color: #41b2cf; border: none; color: white; margin-left: 30%">Click Here..!!</button>

                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <!----logins---->
        <h2 class="text-center">Logins</h2>
        <br>

        <div class="row d-flex justify-content-center">
            <div class="col-md-3 mx-1 shadow">
                <img src

="img/new-user.jpg" alt="" style="width: 100%; height: 190px">
<br>
                <h5 class="text-center">Patient Login</h5>
                <a href="patientlogin.php">
                    <button class="btn my-3" style="background-color: #41b2cf; border: none; color: white; margin-left: 30%">Click Here..!!</button>

                </a>
            </div>

            <div class="col-md-3 mx-1 shadow">
                <img src="img/doctor.jpg" alt="" style="width: 100%; height: 190px">
                <h5 class="text-center">Doctor Login</h5>
                <a href="doctorlogin.php">
                    <button class="btn my-3" style="background-color: #41b2cf; border: none; color: white; margin-left: 30%">Click Here..!!</button>

                </a>
            </div>

            <div class="col-md-3 mx-1 shadow">
                <img src="img/a1.jpg" alt="" style="width: 100%; height: 190px">
                <h5 class="text-center">Admin Login</h5>
                <a href="adminlogin.php">
                   <button class="btn my-3" style="background-color: #41b2cf; border: none; color: white; margin-left: 30%">Click Here..!!</button>

                </a>
            </div>
        </div>
        <br>
        <br>

           <!-- ################# Our Departments Starts Here#######################--->

                <section id="services" class="key-features department">
                    <div class="container">
                        <div class="inner-title">
                            <h2 class= "text-center"> Our Key Features</h2>
                            <p class= "text-center">Explore some of our key features below</p>
                        </div>
                        <br>

                        <div class="row">
                            <!-- Existing key features -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                    <i class="fas fa-heart" style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5>Cardiology</h5>
                                    <p>Specialized care for heart-related issues.</p>
                                    <br>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                    <i class="fas fa-bone " style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5>Orthopaedic</h5>
                                    <p>Comprehensive orthopedic services for bone health.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                   <i class="fas fa-brain" style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5>Neurology</h5>
                                    <p>Expert care for neurological disorders.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
    <div class="single-key">
        <i class="fas fa-pills" style="font-size: 36px; color: #41b2cf;"></i>
        <h5>Pharma Pipeline</h5>
        <p>Innovative pharmaceutical developments.</p>
    </div>
</div>


                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                    <i class="fas fa-user-md" style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5>Pharma Team</h5>
                                    <p>Collaborative team dedicated to pharmaceutical advancements.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                    <i class="fas fa-medkit" style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5 class="High-Quality Treatments"></h5>
                                    <p>Providing top-notch medical treatments for your well-being.</p>
                                </div>
                            </div>

                            <!-- Additional key features -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                    <i class="fas fa-dna" style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5>Genetics</h5>
                                    <p>Exploring genetic solutions for personalized healthcare.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                    <i class="fas fa-tooth" style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5><br>Dentistry</h5>
                                    <p>Comprehensive dental care for a healthy smile.</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="single-key">
                                   <i class="fas fa-microscope" style="font-size: 36px; color: #41b2cf;"></i>
                                    <h5>Research & Development</h5>
                                    <p>Advancing healthcare through cutting-edge research.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




        <!-- Event Section -->
        <div class="event-section">
            <h2 class="text-center">Events</h2><br><br>
            <div class="row">
                <div class="col-md-3">
                    <img src="img/event4.jpg" alt="Event 4" class="img-fluid" data-toggle="modal" data-target="#eventModal1">
                </div>
                <div class="col-md-3">
                    <img src="img/event2.jpg" alt="Event 2" class="img-fluid" data-toggle="modal" data-target="#eventModal2">
                </div>
                <div class="col-md-3">
                    <img src="img/event3.jpg" alt="Event 3" class="img-fluid" data-toggle="modal" data-target="#eventModal3">
                </div>
                <div class="col-md-3">
                    <img src="img/event4.jpg" alt="Event 4" class="img-fluid" data-toggle="modal" data-target="#eventModal4">
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
    <br>
    <br>

    <!-- Modal for Event 1 -->
    <div class="modal fade" id="eventModal1" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel1">Event 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="event4.jpg" class="img-fluid" alt="Event 4">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Event 2 -->
    <div class="modal fade" id="eventModal2" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel2">Event 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/event2.jpg" class="img-fluid" alt="Event 2">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Event 3 -->
    <div class="modal fade" id="eventModal3" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel3" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel3">Event 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/event3.jpg" class="img-fluid" alt="Event 3">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Event 4 -->
    <div class="modal fade" id="eventModal4" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel4" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel4">Event 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/event4.jpg" class="img-fluid" alt="Event 4">
                </div>
            </div>
        </div>
    </div>

    <!-- About Us, Our Mission, and What Sets Us Apart Sections -->
    <div class="row">
        <!-- About Us Section -->
        <div class="col-md-4 text-center">
            <h2>About Us</h2>
            <p>We are a healthcare organization dedicated to providing quality medical services and care. Our mission is to improve the health and well-being of our community through compassionate and effective healthcare solutions.</p>
            <p>At BG Groups & Hospitals, we are dedicated to delivering exceptional healthcare services that prioritize the well-being of our patients. Founded with the vision of providing comprehensive and compassionate care, our hospital has become a cornerstone of health and wellness in the community.</p>
        </div>

        <!-- Our Mission Section -->
        <div class="col-md-4 text-center">
            <h2>Our Mission</h2>
            <p>Our mission is to deliver high-quality healthcare services with a focus on compassion, innovation, and excellence. We strive to enhance the quality of life for our patients and their families through advanced medical practices and a dedicated team of healthcare professionals.</p>
        </div>

        <!-- What Sets Us Apart Section -->
        <div class="col-md-4">
            <h2>What Sets Us Apart</h2>
            <ul>
                <li>State-of-the-art medical facilities and technology.</li>
                <li>A team of experienced and compassionate healthcare professionals.</li>
                <li>Comprehensive and personalized patient care.</li>
                <li>Commitment to continuous improvement and patient safety.</li>
                <li>Community outreach and health education programs.</li>
            </ul>
        </div>
    </div>
    <br>
    <br>

    <!-- Footer with Address Bar and Clickable Links -->
    <footer class="footer">
        <p>No:378 BG Groups, Chennai, Tamil Nadu, India 602024 (Ph:044 4040 4040)</p>
        <p>
            <a href="location.php">Contact Us</a> | 
            <a href="location.php">Location</a> | 
            <a href="location.php">Mail</a> | 
            <a href="drlist.php">Doctors</a> | 
            <a href="info.php">Founder</a>
        </p>
        <p>&copy; 2024 BG Groups & Hospitals. All rights reserved.</p>
    </footer>

    <!-- Add Bootstrap JS and

 dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>