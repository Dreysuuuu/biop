<!DOCTYPE html>
<html lang="en">
    <head>
        <title>BIOP</title>
        <?php include 'includes/common/head.php'; ?>
    </head>
    <body>
        <div class="wrapper d-flex flex-column min-vh-100">
            <header class="header header-sticky p-0 px-5 shadow-sm bg-danger">
                <a class="header-brand" href="#">
                    <img src="media/images/logo-white.png" alt="" width="109" height="45" class="d-inline-block align-top" alt="BIOP Logo">
                </a>
                <ul class="header-nav">
                    <li class="nav-item active">
                        <a class="nav-link fw-bold text-light" href="#HOME">HOME <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-light" href="#EVENTS">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-light" href="#SERVICES">SERVICES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fw-bold text-light dropdown-toggle" href="#" role="button" data-coreui-toggle="dropdown" aria-expanded="false">
                            TRACK
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="px-3">
                                    <form method="post" action="">
                                        <label for="TrackingNumber" class="form-label">Tracking No.</label>
                                        <input type="text" class="form-control" placeholder="######" name="TrackingNumber" id="TrackingNumber" />
                                        <button type="submit" class="btn btn-sm btn-danger text-light my-2">Track my Request</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold text-light" href="#ABOUT">ABOUT</a>
                    </li>

                </ul>
            </header>
            <div id="HOME" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="bd-placeholder-img" width="100%" height="100%" src="media/images/cover.png" alt="BIOP Cover Photo">
                    </div>
                </div>
                <div class="container px-5 pt-2">
                    
                    <h1 class="text-danger fw-bold">Barangay Integrated Online Portal</h1>
                    <p>
                        Welcome to Barangay Integrated Online Portal (BIOP)<br/>
                        – the exclusive digital gateway for residents of Barangay San Bartolome. Seamlessly request certificates, clearances, and business permits from the 
                        comfort of your home. Stay updated with the latest community news, events, and activities, all at your fingertips. Designed to make your life easier, 
                        BIOP is here to streamline your interactions with the barangay, reducing queues, saving time, and enhancing your connection to the community. 
                        Experience convenience and efficiency like never before, with services tailored just for you.
                    </p>
                </div>
            </div>
            <div id="EVENTS" class="container mt-5">
                <h1 class="display-4 text-center text-danger fw-normal">EVENTS</h1>
                <hr/>
                <div id="EventsCarousel" class="carousel slide" data-coreui-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-coreui-target="#EventsCarousel" data-coreui-slide-to="0" class="active" aria-current="true" aria-label="Event 1"></button>
                        <button type="button" data-coreui-target="#EventsCarousel" data-coreui-slide-to="1" aria-label="Event 2"></button>
                        <button type="button" data-coreui-target="#EventsCarousel" data-coreui-slide-to="2" aria-label="Event 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-7">
                                        <img src="media/images/events/event-01.png" style="width: 100%; height: 500px; object-fit: cover" class="img-fluid rounded-start"/>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title text-danger display-6">Search for Mr. and Ms. San Bartolome!</h5>
                                            <p class="card-text">Are you between 18 to 24 years old and a resident of Barangay San Bartolome, Sto. Tomas, Batangas? Step into the spotlight and showcase your charisma!</p>
                                            <br/>
                                            <p><strong>📅 Screening Date:</strong> May 04, 2024</p>
                                            <p><strong>⏰ Time:</strong> 9:00 AM to 3:00 PM</p>
                                            <p><strong>📍 Venue:</strong> Multipurpose Hall, Barangay San Bartolome</p>
                                            <p>Don't miss your chance to shine and represent your community! Mark your calendars and get ready to dazzle! ✨👑</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-7">
                                        <img src="media/images/events/event-02.png" style="width: 100%; height: 500px; object-fit: cover" class="img-fluid rounded-start"/>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title text-danger display-6">Inter-Barangay Basketball Tournament</h5>
                                            <p class="card-text">Get ready for an exciting day of basketball! Join us for the matches:</p>
                                            <br/>
                                            <p><strong>8:00 AM LIVE:</strong> Darasa VS Banjo East</p>
                                            <p><strong>1:30 PM LIVE:</strong> Darasa VS Poblacion 5</p>
                                            <p><strong>Date:</strong> September 01, 2024</p>
                                            <p><strong>Venue:</strong> Covered Court of Barangay Darasa</p>
                                            <p>Don’t miss the action! Come and support your favorite teams!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-7">
                                        <img src="media/images/events/event-03.png" style="width: 100%; height: 500px; object-fit: cover" class="img-fluid rounded-start"/>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <h5 class="card-title text-danger display-6">Barangay San Bartolome Blood Donation</h5>
                                            <p class="card-text">Donors must be healthy and in good condition.</p>
                                            <p class="card-text">Your donation will help patients at Sto. Tomas General Hospital.</p>
                                            <br/>
                                            <p><strong>Date:</strong> May 08, 2024</p>
                                            <p><strong>Time:</strong> 7:00 AM to 11:00 AM</p>
                                            <p><strong>Venue:</strong> Health Center of Barangay San Bartolome</p>
                                            <p>Join us in making a difference! Your blood donation can save lives.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-coreui-target="#EventsCarousel" data-coreui-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-coreui-target="#EventsCarousel" data-coreui-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
            <div id="SERVICES" class="container mt-5">
                <h1 class="display-4 text-center text-danger fw-normal">SERVICES</h1>
                <hr/>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="media/images/services/service-01.png" />
                            <div class="card-body">
                                <h6 class="text-danger">Certificate of Residency</h6>
                                <small class="card-text">
                                    Acquire your Certificate of Residency quickly and conveniently through BIOP. Skip the lines and handle everything online, right from your home.
                                </small>
                                <div class="card-footer mt-3">
                                    <button type="button" class="btn btn-danger text-light float-end">Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="media/images/services/service-02.png" />
                            <div class="card-body">
                                <h6 class="text-danger">Business Permit</h6>
                                <small class="card-text">
                                    Secure your Business Permit effortlessly with BIOP. Complete the process online, avoiding lengthy waits and paperwork. Get your permit swiftly from the comfort of your home.
                                </small>
                                <div class="card-footer mt-3">
                                    <button type="button" class="btn btn-danger text-light float-end">Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="media/images/services/service-03.png" />
                            <div class="card-body">
                                <h6 class="text-danger">Barangay Clearance</h6>
                                <small class="card-text">
                                    Obtain your Barangay Clearance hassle-free with BIOP. Our online system simplifies the application, letting you get your clearance quickly and conveniently without leaving your home.
                                </small>
                                <div class="card-footer mt-3">
                                    <button type="button" class="btn btn-danger text-light float-end">Request</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="footer mt-5 px-5 py-4">
            <div>
                <span class="text-danger fw-bold">Barangay Integrated Online Portal</span>
            </div>
            <div class="text-muted">
                <span>&copy; Copyright 2024. All rights reserved. Dreysuu.</span>
            </div>
        </footer>
        <?php include 'includes/common/scripts.php'; ?>
    </body>
</html>
