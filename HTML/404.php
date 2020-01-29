
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
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="index.html" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- ERROR PAGE -->
        <section class="bg-home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12 text-center">
                                <img src="images/404.png" class="img-fluid" alt="">
                                <div class="text-uppercase mt-4 display-3">Oh ! no</div>
                                <div class="text-capitalize text-dark mb-4 error-page">Page Not Found</div>
                                <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary font-weight-bold">flexBot</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 text-center">  
                                <a href="index.html" class="btn btn-outline-primary mt-4">Go Back</a>
                                <a href="index.html" class="btn btn-primary mt-4 ml-2">Go To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ERROR PAGE -->

        <!-- javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>
</html>