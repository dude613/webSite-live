
<!DOCTYPE html>
<html lang="en">

    <?php
    include("head.php");
    ?>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <?php
    include("navbar.php");
    ?>
    
    <!-- Hero Start -->
    <section class="bg-half bg-light" style="background: url('images/contact-detail.jpg') center center;">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <div class="page-next-level">
                                <h4 class="title">Contact Us</h4>
                                <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                    <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                    <li>
                                        <span class="text-uppercase text-primary font-weight-bold">Contact us</span> 
                                    </li> 
                                </ul>
                            </div>
                        </div>  <!--end col-->
                    </div><!--end row-->
                </div> <!--end container-->
            </div>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- Start Contact -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6  mt-4 pt-2">
                    <div class="pt-5 pb-5 p-4 bg-white rounded shadow">
                        <h4>Get In Touch !</h4>
                        <div class="custom-form mt-4">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Name <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-account ml-3 icons"></i>
                                            <input name="name" id="name" type="text" class="form-control pl-5" placeholder="First Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <i class="mdi mdi-email ml-3 icons"></i>
                                            <input name="email" id="email" type="email" class="form-control pl-5" placeholder="Your email :">
                                        </div> 
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group position-relative">
                                            <label>Message</label>
                                            <i class="mdi mdi-comment-text-outline ml-3 icons"></i>
                                            <textarea name="comments" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end custom-form-->
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 pl-md-3 pr-md-3 mt-4 pt-2">
                    <div class="map map-height-two rounded map-gray">
                        <iframe src="https://maps.google.com/maps?q=368%209th%20Ave%2C%20New%20York%2C%20NY%2010001&t=&z=13&ie=UTF8&iwloc=&output=embed" style="border:0" class="rounded" allowfullscreen=""></iframe>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        
        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-detail text-center">
                        <div class="icon">
                            <img src="images/icon/call.svg" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Phone</h4>
                            <p class="text-muted">Start working with FlexBot that can provide everything</p>
                            <a href="tel:+16464946771" class="text-primary">+1 646 494 6771</a>
                        </div>  
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="contact-detail text-center">
                        <div class="icon">
                            <img src="images/icon/Email.svg" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Email</h4>
                            <p class="text-muted">Start working with FlexBot that can provide everything</p>
                            <a href="mailto:info@bflexd.com" class="text-primary">info@bflexd.com</a>
                        </div>  
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="contact-detail text-center">
                        <div class="icon">
                            <img src="images/icon/location.svg" alt="">
                        </div>
                        <div class="content mt-3">
                            <h4 class="title font-weight-bold">Location</h4>
                            <p class="text-muted">368 9th Ave, <br>New York, NY 10001</p>
                            <a href="https://maps.google.com/maps?q=368%209th%20Ave%2C%20New%20York%2C%20NY%2010001&t=&z=13&ie=UTF8&iwloc=&output=embed" class="video-play-icon h6 text-primary">View on Google map</a>
                        </div>  
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End contact -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a class="logo-footer" href="#">FlexBot<span class="text-primary">.</span></a>
                    <p class="mt-4">Start working with FlexBot that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                    </ul><!--end icon-->
                </div><!--end col-->
                
                <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Company</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> About us</a></li>
                        <li><a href="page-services.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Services</a></li>
                        <li><a href="page-team.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Team</a></li>
                        <li><a href="page-pricing.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Pricing</a></li>
                        <li><a href="page-work.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                        <li><a href="page-jobs.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Careers</a></li>
                        <li><a href="page-blog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                        <li><a href="page-cover-login.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Login</a></li>
                    </ul>
                </div><!--end col-->
                
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Usefull Links</h4>
                    <ul class="list-unstyled footer-list mt-4">
                        <li><a href="page-terms.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Terms of Services</a></li>
                        <li><a href="page-privacy.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Privacy Policy</a></li>
                        <li><a href="documentation.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Documentation</a></li>
                        <li><a href="changelog.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Changelog</a></li>
                        <li><a href="components.html" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Components</a></li>
                    </ul>
                </div><!--end col-->

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h4 class="text-light footer-head">Newletter</h4>
                    <p class="mt-4">Sign up and receive the latest tips via email.</p>
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="foot-subscribe form-group position-relative">
                                    <label>Write your email <span class="text-danger">*</span></label>
                                    <i class="mdi mdi-email ml-3 icons"></i>
                                    <input type="email" name="email" id="emailsubscribe" class="form-control pl-5 rounded" placeholder="Your email : " required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" id="submitsubscribe" name="send" class="btn btn-primary w-100" value="Subscribe">
                            </div>
                        </div>
                    </form>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </footer><!--end footer-->
    <hr>
    <footer class="footer footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-left">
                        <p class="mb-0">© 2019-20 FlexBot. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in/" target="_blank" class="text-success">Shreethemes</a>.</p>
                    </div>
                </div>

                <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <ul class="list-unstyled payment-cards text-sm-right mb-0">
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/american-ex.png" title="American Express" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/discover.png" title="Discover" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/master-card.png" title="Master Card" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/paypal.png" title="Paypal" alt=""></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><img src="images/payments/visa.png" title="Visa" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific.init.js"></script>
    <!-- Contact -->
    <script src="js/contact.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>
</html>