 <?php include'header.php'; ?>

 <div id="about" class="about-area ">
                <div class="container" style="padding: 60px;">
                    <div class="row">
                        <div class="col-sm-5 col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="about-image">
                                <img src="img/DrRenu1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8 wow fadeInRight" data-wow-delay="0.2s">
                            <div class="about-info">
                                <h2>About me!</h2>
                                <p>Dr. Renu Malik, passed MBBS, MD (Obst. & Gynecology) from Maulana Azad Medical College, Delhi. There after worked in Deptt of Gynecology in Safdarjung Hospital from 1991-93.</p>
                                <p class="about-p">She is one of the leading Gynecologists of Delhi, practicing for last 30 years dealing with all kinds of gynaecological problems like prolapsed uterus, fibroid, menstrual abnormalities, inferitility, abortions, ectopic pregnancy etc. She has conducted more than 40,000 deliveries till now. She is famous for conducting painless and complicated deliveries. She has performed a variety of gyanecological surgeries such as hysterectomy, cancer surgery, cryosurgery, tubal surgeries, ovarian surgeries, etc.</p>
                                <div class="socile-icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/renumalik/" target="_blank"><i class="fa fa-instagram"></i></a>
                                   <!-- <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a> -->
                                    <a href="https://www.youtube.com/channel/UC5vxKxFoasx56ioIEXJjKhQ/featured"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <div class="resume-btn">
                                    <!--<a href="#" class="theme-btn-c"><i class="fa fa-download"></i> download resume</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<div class="container">
            <div class="col-md-8 col-md-offset-2">
                           <div class="header-title text-center white-c">
                               <h2>Education</h2>
                               <!--<p>One of the leading Gynecologists of Delhi practicing for last 25 years dealing with all kinds of gynaecological problems like prolapsed uterus, fibroid, menstrual abnormalities, inferitility, abortions, ectopic pregnancy etc.</p>-->
                           </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="single-service text-center">
                                <div class="service-icon">
                                    <i class="fa fa-institution"></i>
                                </div>
                                <h3>Maulana Azad Medical College, Delhi</h3>
                                <p>MD ,OBSTETRICS & GYNAECOLOGY <br>1989-1991</p>
                                <p>This institute is ranked 3rd in the country by India Today & Times of India. It is spread over a campus in 122 acres. The college made a humble beginning in 1958 with the erstwhile Irwin hospital (now the Lok Nayak Hospital). The college is named after a great patriot and educationist, Maulana Abdul Kalam Azad.It stands as an epitome of medical excellence.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="single-service text-center">
                                <div class="service-icon">
                                    <i class="fa fa-joomla"></i>
                                </div>
                                <h3>Maulana Azad Medical College, Delhi</h3>
                                <p>MBBS<br>1982-1987</p>
                                <p>This institute is ranked 3rd in the country by India Today & Times of India. It is spread over a campus in 122 acres. The college made a humble beginning in 1958 with the erstwhile Irwin hospital (now the Lok Nayak Hospital). The college is named after a great patriot and educationist, Maulana Abdul Kalam Azad.It stands as an epitome of medical excellence.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="single-service text-center">
                                <div class="service-icon">
                                    <i class="fa fa-shield"></i>
                                </div>
                                <h3>KENDRIYA VIDYALAYA <br>NMR</h3>
                                <br><br>
                                <p>Presently known as KV, NMR established in 1972 at IIT, New Delhi and shifted to its present location in 1983 and since then it is known as KV NMR, JNU campus, New Delhi. Kendriya Vidyalaya NMR is till class XII with 4 branches. It is regarded as one of the finest educational brands catering to primary , secondary & higher secondary schooling.</p>
                            </div>
                        </div>
                    </div>
           


<?php include'footer.php';?>

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
 