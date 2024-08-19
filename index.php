<?php
    include 'controllers/index-controller.php';
    include_once 'functions/timestamp.php';

    $Events = GetActiveEvents();
    $PageTitle = '';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'modules/common/head.php'; ?>
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        <link href="assets/css/landing.css" rel="stylesheet" />
    </head>
    <body class="index-page">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid container-xl position-relative d-flex align-items-center">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <img src="assets/img/logo-dark.png" alt="BIOP Logo">
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a href="#events">Events</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <?php
                            if (ActiveSession())
                            {
                                echo
                                '
                                <li class="dropdown">
                                    <a><span>Track</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li>
                                            <div class="p-4">
                                                <form method="post" action="">
                                                    <p class="fw-medium text-danger">TRACK REQUEST</p>
                                                    <small class="text-muted">Tracking Number:</small>
                                                    <div class="input-group mb-3">
                                                        <input name="TrackingNumber" type="text" class="form-control focus-ring" aria-describedby="Track-Button" required />
                                                        <button class="btn btn-danger text-light" type="button" id="Track-Button"><i class="bi bi-arrow-right"></i></button>
                                                    </div>
                                                </form>
                                                <p class="my-2">Active Requests:</p>
                                                <div class="border p-2">
                                                    <p class="m-3 text-muted text-center">
                                                        <small>No active requests.</small>
                                                        <a href="#Services" class="btn btn-sm btn-danger text-light mt-2">Request Now!</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a><span>Account</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                    <ul>
                                        <li><a class="text-muted disabled">'.$_SESSION['User']['FullName'].'</a></li>
                                        <li><hr /></li>
                                        <li><a href="#">My Requests</a></li>
                                        <li><a href="#">Change Password</a></li>
                                        <li><hr /></li>
                                        <li><a href="#" class="text-danger">Logout</a></li>
                                    </ul>
                                </li>
                                ';
                            }
                        ?>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="btn-getstarted" href="#services">Get Started</a>
            </div>
        </header>

        <main class="main">
            <section id="home" class="hero section">
                <div class="hero-bg">
                    <img src="assets/img/cover-bg.webp" alt="" />
                </div>
                <div class="container text-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h1 data-aos="fade-up">Welcome to <img src="assets/img/logo-dark.png" class="img-fluid mb-2" width="100" /></h1>
                        <p data-aos="fade-up" data-aos-delay="100">Connecting you to Essential Documents — Quick, Easy, and Reliable Access at your convenience.<br /></p>
                        <img src="assets/img/cover-01.png" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="200" />
                    </div>
                </div>
            </section>
            <section class="clients section">
                <div class="container" data-aos="fade-up">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/logo-dark.png" class="img-fluid" alt="" />
                        </div>
                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/San-Bartolome-Logo.png" class="img-fluid" alt="" />
                        </div>
                        <div class="col-xl-2 col-md-3 col-6 client-logo">
                            <img src="assets/img/Sto-Tomas-Logo.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <section class="featured-services section light-background">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Instant Access</a></h4>
                                    <p class="description">Quick and easy access to essential documents without the need for in-person visits.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Effortless Processing</a></h4>
                                    <p class="description">Streamlined online management for all your permit needs, reducing wait times and simplifying the process.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                                <div>
                                    <h4 class="title"><a href="#" class="stretched-link">Reliable Clearances</a></h4>
                                    <p class="description">Convenient online application and receipt of necessary clearances, ensuring a hassle-free experience.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    </div>
                </div>
            </section>
            <section id="events" class="features section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Events & Announcements</h2>
                    <p>Stay in the Loop — Catch all the latest in Barangay San Bartolome right here!</p>
                </div>
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 d-flex align-items-center">
                            <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                                <?php
                                    for($i = 0; $i < count($Events); $i++)
                                    {
                                        echo 
                                        '
                                        <li class="nav-item">
                                            <a class="nav-link '.($i == 0 ? 'active show' : '').'" data-bs-toggle="tab" data-bs-target="#event-tab-'.($i + 1).'">
                                                <div>
                                                    <small class="text-muted">Posted '.time_ago(strtotime($Events[$i]['CreatedAt'])).'</small>
                                                    <h4 class="d-none d-lg-block text-danger">'.$Events[$i]['EventTitle'].'</h4>
                                                    <p>
                                                        '.$Events[$i]['EventDetails'].'
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        ';
                                    }
                                ?>
                            </ul>
                            <!-- End Tab Nav -->
                        </div>

                        <div class="col-lg-6">
                            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                                <?php
                                    for($i = 0; $i < count($Events); $i++)
                                    {
                                        echo 
                                        '
                                        <div class="tab-pane fade '.($i == 0 ? 'active show' : '').'" id="event-tab-'.($i + 1).'">
                                            <img src="assets/img/events/'.$Events[$i]['EventCover'].'" class="img-fluid" />
                                        </div>
                                        ';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="pricing section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Streamline your Requests — Access all essential services with Just a Click!</p>
                </div>
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pricing-item featured">
                                <h3>Barangay Clearance</h3>
                                <p class="description">Barangay Clearance certifies that you have good moral standing and no outstanding violations, often required for various purposes.</p>
                                <h4><sup>₱</sup>70.00</h4>
                                <a href="#" data-bs-toggle="modal" data-bs-target="<?php echo ActiveSession() ? '#Service-01' : '#Login-Register'; ?>" class="cta-btn">Request Now!</a>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Community Tax Certificate (Cedula)</span></li>
                                    <li><i class="bi bi-check"></i> <span>Processing Fee: ₱ 50.00</span></li>
                                    <li><i class="bi bi-check"></i> <span>Convenience Fee: ₱ 20.00</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pricing-item featured">
                                <h3>Certificate of Residency</h3>
                                <p class="description">Barangay Certificate of Residency confirms your address and residency status within the barangay, often needed for legal and administrative purposes.</p>
                                <h4><sup>₱</sup>100.00</h4>
                                <a href="#" data-bs-toggle="modal" data-bs-target="<?php echo ActiveSession() ? '#Service-02' : '#Login-Register'; ?>" class="cta-btn">Request Now!</a>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Community Tax Certificate (Cedula)</span></li>
                                    <li><i class="bi bi-check"></i> <span>Valid ID</span></li>
                                    <li><i class="bi bi-check"></i> <span>Barangay Clearance</span></li>
                                    <li><i class="bi bi-check"></i> <span>Processing Fee: ₱ 80.00</span></li>
                                    <li><i class="bi bi-check"></i> <span>Convenience Fee: ₱ 20.00</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pricing-item featured">
                                <h3>Business Permit</h3>
                                <p class="description">A Business Permit authorizes and legitimizes your business operations within the barangay, ensuring compliance with local regulations.</p>
                                <h4><sup>₱</sup>1,700.00</h4>
                                <a href="#" data-bs-toggle="modal" data-bs-target="<?php echo ActiveSession() ? '#Service-03' : '#Login-Register'; ?>" class="cta-btn">Request Now!</a>
                                <ul>
                                    <li><i class="bi bi-check"></i> <span>Community Tax Certificate (Cedula)</span></li>
                                    <li><i class="bi bi-check"></i> <span>Barangay Clearance</span></li>
                                    <li><i class="bi bi-check"></i> <span>DTI/SEC Registration</span></li>
                                    <li><i class="bi bi-check"></i> <span>Business Location (Sketch)</span></li>
                                    <li><i class="bi bi-check"></i> <span>Sanitary Permit (For Food/Beverage/Health Sectors) - Optional</span></li>
                                    <li><i class="bi bi-check"></i> <span>Processing Fee: ₱ 1,500.00</span></li>
                                    <li><i class="bi bi-check"></i> <span>Convenience Fee: ₱ 200.00</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="contact section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                </div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>4558+P78, Brgy. San Bartolome Road, Santo Tomas, Batangas 4234</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>sanbartolome.stotomas@email.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer" class="footer position-relative light-background">
            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename"><img src="assets/img/logo-black.png" /></span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>Brgy. San Bartolome Road</p>
                            <p>City of Sto. Tomas, Batangas 4234</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>sanbartolome.stotomas@email.com</span></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="<?php echo ActiveSession() ? '#Service-01' : '#Login-Register'; ?>">Barangay Clearance</a></li>
                            <li><a href="<?php echo ActiveSession() ? '#Service-02' : '#Login-Register'; ?>">Certificate of Residency</a></li>
                            <li><a href="<?php echo ActiveSession() ? '#Service-03' : '#Login-Register'; ?>">Business Permit</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-newsletter">
                        <h4>Track your Document Request</h4>
                        <p>Check the status of your requested document. Just input your Tracking Number.</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email" /><input type="submit" value="Track" /></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright <?php echo date('Y'); ?>.</span> <strong class="px-1 sitename">BIOP.</strong> <span>All Rights Reserved.</span></p>
                <div class="credits">
                    Developed by <a href="#">Dreysuu</a>
                </div>
            </div>
        </footer>
        <?php include 'views/index/modals/service-01.php'; ?>
        <?php include 'views/index/modals/service-02.php'; ?>
        <?php include 'views/index/modals/service-03.php'; ?>
        <?php include 'views/index/modals/login-register.php'; ?>
        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <?php include 'modules/common/scripts.php'; ?>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/js/landing.js"></script>
    </body>
</html>
