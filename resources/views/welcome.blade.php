@extends('layout')

@section('content')

    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                <a class="navbar-brand page-scroll" href="#page-top">Acquolina
                </a></div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
                    <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
                    <li><a href="#team" class="page-scroll">Chefs</a></li>
                    <li><a href="#call-reservation" class="page-scroll">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <div class="col-xs-12 col-md-6 ">
                                <div class="about-img"><img src="img/logo.png" class="img-logo img" alt=""></div>
                            </div>
                            <p>Ristorante - Pizzeria</p>
                            <a href="#about" class="btn btn-custom btn-lg page-scroll">La nostra storia</a></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Il nostro ristorante</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                            diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec
                            ornare diam commodo nibh.</p>
                        <h3>I nostri Chefs</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                            diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec
                            ornare.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurant Menu Section -->
    <div id="restaurant-menu">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>Menu</h2>
                <hr>
                <p>Lascia che il cibo sia la tua medicina e la medicina sia il tuo cibo.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">

                @include('menu')

            </div>


        </div>
    </div>
    <!-- Portfolio Section -->
    <div id="portfolio">
    @include('gallery')
    </div>

    <!-- Team Section -->
    <div id="team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 section-title">
                    <h2>Meet Our Chefs</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
                </div>
                <div id="row">
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="img/team/01.jpg" alt="..."></div>
                            <div class="caption">
                                <h3>Mike Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="img/team/02.jpg" alt="..."></div>
                            <div class="caption">
                                <h3>Chris Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="img/team/03.jpg" alt="..."></div>
                            <div class="caption">
                                <h3>Ethan Doe</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call Reservation Section -->
    <div id="call-reservation" class="text-center">
        <div class="container">
            <h2>Want to make a reservation? Call <strong>999999999</strong></h2>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="map-responsive">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12238.795054742244!2d9.703215!3d39.925757!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23ef6725d6344a9a!2sRistorante%20Pizzeria%20Acquolina!5e0!3m2!1sit!2sit!4v1604091234162!5m2!1sit!2sit"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">

        </iframe>
        </div>
    </div>
    <div id="footer">
        <div class="container text-center">
            <div class="col-md-4">
                <h3>Address</h3>
                <div class="contact-item">
                    <p>08048 Tortolì</p>
                    <p>Viale Europa, 08048 Tortolì NU</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Opening Hours</h3>
                <div class="contact-item">
                    <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
                    <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
                </div>
            </div>
            <div class="col-md-4">
                <h3>Contact Info</h3>
                <div class="contact-item">
                    <p>Phone: +1 123 456 1234</p>
                    <p>Email: info@company.com</p>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center copyrights">
            <div class="col-md-8 col-md-offset-2">
                <div class="social">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
@endsection
