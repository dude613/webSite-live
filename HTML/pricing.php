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
                                    <h4 class="title">Pricing</h4>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="index.html" class="text-uppercase font-weight-bold text-dark">Home</a></li>
                                            <span class="text-uppercase text-primary font-weight-bold">Pricing</span> 
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

        <!-- Price Start -->
        <section class="section">
            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4"><span class="text-primary font-weight-bold">FlexBot </span>Pricing</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with <span class="text-primary font-weight-bold">FlexBot</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row align-items-center">
                    <div class="col-12 mt-4 pt-2">
                        <div class="text-center">
                            <ul class="nav nav-pills rounded-pill justify-content-center d-inline-block border py-1 px-2" id="pills-tab" role="tablist">
                                <li class="nav-item d-inline-block">
                                    <a class="nav-link px-3 rounded-pill active monthly" id="Monthly" data-toggle="pill" href="#Month" role="tab" aria-controls="Month" aria-selected="true">Monthly</a>
                                </li>
                                <li class="nav-item d-inline-block">
                                    <a class="nav-link px-3 rounded-pill yearly" id="Yearly" data-toggle="pill" href="#Year" role="tab" aria-controls="Year" aria-selected="false">Yearly <span class="badge badge-success rounded">Discounted </span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="Month" role="tabpanel" aria-labelledby="Monthly">    
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-light p-4 rounded">
                                            <h2 class="title text-uppercase mb-4">Free</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 mb-0 mt-2">$</span>
                                                <span class="price h1 mb-0">0</span>
                                                <span class="h4 align-self-end mb-1">/mo</span>
                                            </div>
                                            
                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>1 Robot</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Minimum Support</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                        </div>
                                    </div><!--end col-->
                
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-white p-4 rounded">
                                            <h2 class="title text-uppercase text-primary mb-4">Startup</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 mb-0 mt-2">from</span>
                                                <span class="price h1 mb-0">$200</span>
                                                <span class="h4 align-self-end mb-1">/mo</span>
                                            </div>
                
                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Up to 5 Bots</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>9-5 EST Support</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Updates & Management</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                        </div>
                                    </div><!--end col-->
                
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-light p-4 rounded">
                                            <h2 class="title text-uppercase mb-4">Small Business</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 mb-0 mt-2">from</span>
                                                <span class="price h1 mb-0">$800</span>
                                                <span class="h4 align-self-end mb-1">/mo</span>
                                            </div>
                                            
                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Up to 20 Bots</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>24/7 Support</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Online Bot Management</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Hardware Provided</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                        </div>
                                    </div><!--end col-->
                
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-light p-4 rounded">
                                            <h2 class="title text-uppercase mb-4">Enterprise</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 align-self-end mb-1">Contact Sales</span>
                                            </div>
                                            
                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Unlimited Bots</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>24/7 Onsite Support</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Online Bot Management</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Online KPI Tracker</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Hardware Provided</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Contact Sales</a>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
    
                            <div class="tab-pane fade" id="Year" role="tabpanel" aria-labelledby="Yearly">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-light p-4 rounded">
                                            <h2 class="title text-uppercase mb-4">Free</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 mb-0 mt-2">$</span>
                                                <span class="price h1 mb-0">0</span>
                                                <span class="h4 align-self-end mb-1">/mo</span>
                                            </div>
                                            
                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>1 Robot</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Minimum Support</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Buy Now</a>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-white p-4 rounded">
                                            <h2 class="title text-uppercase text-primary mb-4">Startup</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 mb-0 mt-2">from</span>
                                                <span class="price h1 mb-0">$175</span>
                                                <span class="h4 align-self-end mb-1">/mo</span>
                                            </div>

                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Up to 5 Bots</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>9-5 EST Support</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Updates & Management</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Get Started</a>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-light p-4 rounded">
                                            <h2 class="title text-uppercase mb-4">Small Business</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 mb-0 mt-2">from</span>
                                                <span class="price h1 mb-0">$600</span>
                                                <span class="h4 align-self-end mb-1">/mo</span>
                                            </div>
                                            
                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Up to 20 Bots</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>24/7 Support</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Online Bot Management</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Hardware Provided</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Try It Now</a>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                                        <div class="pricing-rates business-rate shadow bg-light p-4 rounded">
                                            <h2 class="title text-uppercase mb-4">Enterprise</h2>
                                            <div class="d-flex mb-4">
                                                <span class="h4 align-self-end mb-1">Contact Sales</span>
                                            </div>
                                            
                                            <ul class="feature list-unstyled pl-0">
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Unlimited Bots</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>24/7 Onsite Support</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Online Bot Management</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Online KPI Tracker</li>
                                                <li class="feature-list"><i class="mdi mdi-check text-success h5 mr-1"></i>Hardware Provided</li>
                                            </ul>
                                            <a href="javascript:void(0)" class="btn btn-primary mt-4">Contact Sales</a>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>    
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- Price End -->

        <!-- FAQ n Contact Start -->
        <section class="section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="faq-container">
                            <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> How does <span class="text-primary">FlexBot</span> work ?</h4>
                            <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">At our core, our software builds & deploys digital robots aimed at drastically improving an organization's business process.</p>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="faq-container">
                            <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> How long is the deployment process ?</h4>
                            <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">It depends on the complexity of the process & the quantity of robots, however it is usually anywhere between 1 week to 1 month.</p>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="faq-container">
                            <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Is my information & data secure ?</h4>
                            <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">All of FlexBot's digital robots are run locally on your systems & are only connected to networks that you authorize.</p>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-6 col-12 mt-4 pt-2">
                        <div class="faq-container">
                            <h4 class="question"><i class="mdi mdi-help-circle text-primary mr-2 h4"></i> Is <span class="text-primary">FlexBot</span> compatible with our existing software ?</h4>
                            <p class="answer text-muted ml-lg-4 pl-lg-3 mb-0">Flexbot was built with your digital transformation journey in mind & will work with almost all softwares, online & offline.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row mt-md-5 pt-md-3 mt-4 pt-2 mt-sm-0 pt-sm-0 justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h4 class="title mb-4">Your business should be running with maximum effeciency.</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Implementing <span class="text-primary font-weight-bold">FlexBot</span> and robotic process automation can propel your business to the next level.</p>
                            <div class="mt-3">
                                <a href="register.php" class="btn btn-primary mt-2 mr-2">Sign Up</a>
                                <a href="mailto:info@bflexd.com" class="btn btn-outline-primary mt-2">Contact Sales</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- FAQ n Contact End -->

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