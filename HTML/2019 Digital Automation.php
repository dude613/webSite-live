
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
                                    <h4 class="title"> 2019 Digital Automation </h4>
                                    <ul class="list-unstyled mt-4">
                                        <li class="list-inline-item h6 date text-muted"> <span class="text-dark">Added :</span> January 13th, 2020</li>
                                    </ul>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Research</a></li>
                                        <li>
                                            <span class="text-uppercase text-primary font-weight-bold"> 2019 Recap </span> 
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
        
        <!-- Start Main -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="p-4 shadow rounded border">
                            <h5>2019 Overview :</h5>
                            <h6>Yearly Recap of Process Automation + Digital Robotics </h6>
                            <p class="text-muted">Email Automation Handling of Invoices: User receives an invoice email with PDF attachment in a particular outlook email inbox. The robot reads an email and downloads the attachment (PDF file) in a local folder after saving.</p>
                            <p class="text-muted">Then it opens the downloaded PDF file, reads the details like Invoice No, Invoice Date, Invoice amount and PO no. The robot opens SAP application and searches the invoice detail based on PO No, Invoice No, Invoice Date or Amount. It fetches all required details, takes a screen shot and replies to sender along with details and screenshot</p>
                            
                            <h5>Key Operational Metric Improvements :</h5>
                            <ul class="list-unstyled feature-list text-muted">
                                <li><i class="mdi mdi-pan-right mdi-24px mr-2"></i>Time per Invoice Processed Cut By 80%</li>
                                <li><i class="mdi mdi-pan-right mdi-24px mr-2"></i>Increased Accuracy & Reduction in Manual Errors </li>
                                <li><i class="mdi mdi-pan-right mdi-24px mr-2"></i>End to End Process Automation</li>
                                <li><i class="mdi mdi-pan-right mdi-24px mr-2"></i>Accurate Visibility into Invoice Aging, Cash Flow and AP Productivity</li>
                                <li><i class="mdi mdi-pan-right mdi-24px mr-2"></i>Eliminate Offsite Document Storage</li>
                            </ul>

                            <a href="contact" class="btn btn-primary">Get Started</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Main -->

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
    <!-- SLIDER -->
    <script src="js/owl.carousel.min.js "></script>
    <script src="js/owl.init.js "></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific.init.js"></script> 
    <!-- Typed -->
    <script src="js/typed.js"></script>
    <script src="js/typed.init.js"></script>
    <!-- Counter -->
    <script src="js/counter.init.js"></script>
    <!-- Parallax -->
    <script src="js/parallax.js "></script>
</body>
</html>