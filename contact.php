<html>
<body>
  <div id="contact" class="contact-area wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="1.2s">
                <div class="container">
                    <div class="row">
                       <div class="col-md-8 col-md-offset-2">
                           <div class="header-title text-center white-c">
                               <h2>CONTACT</h2>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-form-area">
                            <div class="contact-info">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="contact-form">
                                        <div class="row">
                                            <form id="contact-form" action="vishwa.php" method="post">
                                                <div class="col-md-6 col-sm-6">
                                                    <input name="first_name" required="required" type="text" placeholder="FirstName">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <input name="last_name" required="required" type="text" placeholder="LastName">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <input name="email" required="required" type="text" placeholder="Email">
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <input name="subject" required="required" type="text" placeholder="Subject">
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <textarea  name="message" placeholder="Message"></textarea>
                                                    <button type="submit">Send request</button>
                                                </div>
                                            </form>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-sm-12">
                                    <div class="google-map-area">
                                        <!--  Map Section -->
                                        <div id="contacts" class="map-area">
                                            <div id="googleMap" style="width:100%;height:330px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info-area fix">
                        <div class="col-sm-4 col-md-4">
                            <div class="single-socal-contact">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-text">
                                    <p>+91 11 22520249</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="single-socal-contact">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <p>info@radixhealthcare.org</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="single-socal-contact">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-text">
                                    <p>C-218, Nirman Vihar, Vikas Marg,<br> New Delhi-110092</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



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
    </body>
</html>
