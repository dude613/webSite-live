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
                                    <h4 class="title"> Compliance </h4>
                                    <ul class="page-next d-inline-block bg-white shadow p-2 pl-4 pr-4 rounded mb-0">
                                        <li><a href="index" class="text-uppercase font-weight-bold text-dark">Home</a></li> 
                                        <li><a href="#" class="text-uppercase font-weight-bold text-dark">Legal</a></li> 
                                        <li>
                                            <span class="text-uppercase text-primary font-weight-bold"> Compliance </span> 
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
        
        <!-- Start Terms & Conditions -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="p-4 shadow border rounded">
                            <h5>Overview :</h5>
                            <p class="text-muted">Enterprise organizations face a daunting challenge in complying with increasingly stringent regulatory compliance standards regarding oversight of third-party relationships. These regulatory struggles are applicable across every industry from healthcare to financial services</p>

                            <h5>Consider :</h5>
                            <p class="text-muted">Process Automation directly addresses some of the key imperatives of regulatory compliance. In contrast to a human worker, a process automation solution not only performs a process function exactly the same way every time, it provides a more <b class="text-danger"> detailed and sustainable audit log</b> of activity – an essential criterion of compliance readiness.</p>
                            <p class="text-muted">Process Automation solutions are software platforms that use “virtual robots” to manipulate existing application software in the same way that a person processes a transaction or completes a process. By performing rote and routine functions <b class="text-danger">faster, cheaper and more efficiently</b> than human workers, process automation tools offer the potential to drive significant cost savings.</p>
                            <p class="text-muted">Another advantage of process automation is that tools can be easily scaled as well as quickly reconfigured or <b class="text-danger"> “taught”</b> to perform a wide range of functions – ranging from invoice reconciliation to document review to data consolidation –without any need for training. </p>
                            <p class="text-muted">Finally, by altering the fundamental premise of labor arbitrage, process automation redefines how sourcing location decisions are reached. This makes onshoring increasingly viable from a cost standpoint – and gives organizations operating in high-risk offshore locations an additional<b class="text-danger"> lower-risk</b> sourcing option.</p>
                            
                            <h5>Frequently Asked Questions :</h5>
                            <div class="faq-content mt-4">
                                <div class="accordion" id="accordionExample">
                                    <div class="card border rounded shadow mb-2">
                                        <a data-toggle="collapse" href="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="card-header bg-light p-3" id="headingOne">
                                                <h4 class="title mb-0 faq-question"> How long is the deployment process ? </h4>
                                            </div>
                                        </a>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p class="text-muted mb-0 faq-ans">It is contingent on the complexity of the process & the quantity of robots, however it is usually anywhere between 1 week to 1 month.</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card border rounded shadow mb-2">
                                        <a data-toggle="collapse" href="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="card-header bg-light p-3" id="headingTwo">
                                                <h4 class="title mb-0 faq-question"> Is my information & data secure ? </h4>
                                            </div>
                                        </a>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p class="text-muted mb-0 faq-ans">Almost all of FlexBot's digital robots are run locally on your systems & are only connected to networks that you authorize.</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card border rounded shadow mb-2">
                                        <a data-toggle="collapse" href="#collapseThree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="card-header bg-light p-3" id="headingfive">
                                                <h4 class="title mb-0 faq-question"> Is FlexBot compatible with our existing software ? </h4>
                                            </div>
                                        </a>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <p class="text-muted mb-0 faq-ans">Flexbot was built with your digital transformation journey in mind & will work with almost all softwares, online & offline.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <?php
                                include("get_started.php")
                                ?>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Terms & Conditions -->

        <?php
        include("footer");
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
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>
</html>