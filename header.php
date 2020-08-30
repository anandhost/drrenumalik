<link rel="stylesheet" href="css/bootstrap.min.css">
        <!--All css plugin here-->
        <link rel="stylesheet" href="css/include.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">       
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

  <header class="header-area header-sticky">
                <div class="header-area-inner">
                    <div class="header-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="logo">
                                        <a href="index.html"><img src="img/logo/stain-logo1.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    
                                    <div class="main-menu navbar-collapse hidden-sm hidden-xs">
                                        <ul class="nav">
                                            <li class="active smoth-scroll"><a href="index2.php">Home</a></li>
                                            <li class="smoth-scroll"><a href="about.php">About</a></li>
                                            <li class="smoth-scroll"><a href="#service">Experience</a></li>
                                            <li class="smoth-scroll"><a href="portfolio.php">Portfolio</a></li>
                                            <li class="smoth-scroll"><a href="#reviews">reviews</a></li>
                                            <li class="smoth-scroll"><a href="http://drrenumalik.com/blog/" target="_blank">Blog</a></li>
                                            <li class="smoth-scroll"><a href="#contact">Contact</a></li>
                                        </ul>
									</div>
									<div class="hire-me-btn hidden-sm hidden-xs">
                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#hireModal">BOOK AN APPOINTMENT</a>
                                    </div>
                                    <div class="hire-me-btn hidden-lg hidden-md">
                                        <a href="#" class="modal-view" data-toggle="modal" data-target="#hireModal"><i class="fa fa-user-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile menu start -->
                    <div class="mobile-menu-area hidden-lg hidden-md">
                        <div class="container">
                            <div class="col-md-12">
                                <nav id="dropdown">
                                    <ul class="nav">
                                        <li class="active smoth-scroll"><a href="#home">Home</a></li>
                                        <li class="smoth-scroll"><a href="about.php">About</a></li>
                                        <li class="smoth-scroll"><a href="#service">Experience</a></li>
                                        <li class="smoth-scroll"><a href="portfolio.php">Portfolio</a></li>
                                        <li class="smoth-scroll"><a href="#reviews">Reviews</a></li>
                                        <li class="smoth-scroll"><a href="http://drrenumalik.com/blog/" target="_blank">Blog</a></li>
                                        <li class="smoth-scroll"><a href="#contact">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile menu end -->
                </div>
            </header>

                  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script>
            function initialize() {
              var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(28.635299,77.288185)
              };
              var map = new google.maps.Map(document.getElementById('googleMap'),
                  mapOptions);
              var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation:google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <!-- all js here -->        
        <script src="js/vendor/jquery-1.11.3.min.js"></script>      
        <script src="js/bootstrap.min.js"></script>         
        <script src="js/jquery.meanmenu.js"></script>       
        <script src="js/owl.carousel.min.js"></script>  
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- mail js -->
        <script src="js/email.js"></script>
        <!-- plugins JS -->     
        <script src="js/plugins.js"></script>
        <!-- main JS -->        
        <script src="js/main.js"></script>
    
