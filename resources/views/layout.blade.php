<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sudagoras Integrated Soulation Co.Ltd</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->


        <!-- favicon icon -->
        <link rel="shortcut icon" type="image/png" href="favicon.ico" />

        <link rel="shortcut icon" type="image/png" href="{{URL('favicon.ico')}}"/>
        <style>
        @import url('https://fonts.googleapis.com/css?family=El+Messiri&display=swap');
        </style>
        <link href="https://fonts.googleapis.com/css?family=El+Messiri&display=swap" rel="stylesheet">
        <!-- all css here -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/headline.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/Pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
        <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        <header class="">
            <!-- header-top-area-start -->
            <div class="header-top-area blue-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 site-branding col-xs-12">
                            <div class="header-logo">
                                <a href="index.html"><img width="130" height="45" src="{{URL('frontend/img/logo/logo.png')}}" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-9 hidden-xs">
                            <div class="header-left">
                                <div class="header-text">
                                    <div class="header-icon">
                                        <i class="fa fa-phone"></i>
                                        <i class="paint-roller"></i>
                                    </div>
                                    <div class="header-info">
                                        <span class="phone">+249-1300-262</span>
                                        <span class="gmail">info@sudagoras.com</span>
                                    </div>
                                </div>
                                <div class="header-text">
                                    <div class="header-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="header-info">
                                        <span class="phone">2020 Willshire Glen,</span>
                                        <span class="gmail">Sudan, Khartoum,SUD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 hidden-sm col-xs-12">
                            <div class="header-left-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- main-menu-area-start -->
            <div id="header-sticky" class="main-menu-area gray-bg ">
                <div class="container">
                    <div class="row">
                        <div class=" col-lg-10 col-md-8  col-xs-7">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="/">home</a></li>
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/service">service</a></li>
                                        <li><a href="/project">projects</a></li>
                                        <li><a href="/blog">blog</a></li>
                                        <li><a href="/contact">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=" col-lg-2 col-md-4 col-xs-12">
                            <div class="make-appointment">
                                <img src="{{URL('frontend/img/logo/2.png')}}" alt="" />
                                <a href="#">make appointment</a>
                            </div>
                        </div>
                        <div class="col-xs-12"><div class="mobile-menu"></div></div>
                    </div>
                </div>
            </div>
            <!-- main-menu-area-end -->


        </header>
        <!-- header-top-area-start -->

<!-- ############################################################## -->


        @yield('body')


<!-- ############################################################## -->
        <footer>
            <!-- footer-top-area-start -->
            <div class="footer-top-area gray-bg pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 pr-0">
                            <div class="footer-wrapper mb-30">
                                <h2 class="footer-section">about us</h2>
                                <div class="footer-text">
                                    <p>SudaGoras is a Software Development company in Sudan khartoum, that provides its customers with full-spectrum of software services with a focus on Web Development, Web Design, Mobile App Development and Software Testing. SudaGoras serves small and medium Enterprises SMEs and acts as an outsourcing destination for large software firms all over the world. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-2 col-sm-4">
                            <div class="footer-wrapper mb-30">
                                <h2 class="footer-section">SUPPORT</h2>
                                <ul class="footer-menu">
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Forums</a></li>
                                    <li><a href="#">Language Packs</a></li>
                                    <li><a href="#">Release Status</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-2 hidden-sm">
                            <div class="footer-wrapper mb-30">
                                <h2 class="footer-section">link</h2>
                                <ul class="footer-menu">
                                    <li><a href="#">Our Company</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Recent Work</a></li>
                                    <li><a href="#">Latest News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-wrapper mb-30">
                                <h2 class="footer-section">address</h2>
                                <ul class="footer-link">
                                    <li><i class="fa fa-phone"></i>1st floor Sudan Khartoum</li>
                                    <li><i class="fa fa-envelope-open"></i>(249) 1300 - 262</li>
                                    <li><i class="fa fa-envelope-open"></i>info@sudagoras.com</li>
                                    <li><i class="fa fa-clock-o"></i>Sat - Fry: 9:00 am- 5:00pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-top-area-end -->
            <!-- footer-bottom-area-start -->
            <div class="footer-bottom-area gray-bg-1 ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="copyright">
                                <p>Copyright © 2017 <a href="https://sudagoras.com/">SudaGoras</a> All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="footer-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                                <a href="#"><i class="fa fa-tumblr"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom-area-end -->
        </footer>
        <!-- all js here -->
        <script src="{{asset('frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/headline.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('frontend/js/ajax-mail.js')}}"></script>
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>

        <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBe_JBPIX1lStjzqyrWNox1aLpoqFbkFzU"></script>
		<script>
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(15.5687621,32.5777243), // New York

                    // How you would like to style the map.
                    // This is where you would paste any style found on Snazzy Maps.
					styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(15.5687621,32.5777243),
                    map: map,
                    title: 'SudaGoras Integrated Soulation Co.Ltd!'
                });
            }
		</script>
        <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>
