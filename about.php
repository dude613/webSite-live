
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
        <section class="bg-half bg-light">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <div class="page-next-level">
                                    <h4 class="title"> About us </h4>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                        <li>
                                            <span class="text-uppercase text-primary font-weight-bold">About</span> 
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

        <!-- About Start -->
        <section class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="position-relative">
                            <img src="https://www.educationnext.org/files/ednext_XIX_4_wecker_img01.png" class="rounded img-fluid mx-auto d-block" alt="">
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ml-lg-4">
                            <h4 class="title mb-4">Our Story</h4>
                            <p class="text-muted"><span class="text-primary font-weight-bold">ZoomShiur</span> was created as a response to the massive surge of online torah distribution. We aim to make it easier for people to be part of live shiurim and ensure the constant flow of torah.</p>
                            <a href="add" class="btn btn-primary mt-3">Add Shiur <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- About End -->

        <?php
        include("footer.php");
        ?>

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
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>
</html>