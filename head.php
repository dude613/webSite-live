<head>
    <meta charset="utf-8" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php 
	$host = $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'];
	 
	if($host == 'zoomshiur.com/'){
		echo '<title> ZoomShiur  </title>';
		echo '<meta name="Keywords" content="ZoomShiur" />';
		 echo '<meta name="description" content="ZoomShiur is the resource you need to ensure your shiur is un-interrupted" />';
	}
	if($host == 'zoomshiur.com/about'){
		echo '<title> About ZoomShiur </title>';
		echo '<meta name="Keywords" content="ZoomShiur" />';
		 echo '<meta name="description" content="ZoomShiur was built to enable zooming fast shiur & torah classes." />';
	}
	?>
   
    <meta content="Robotic Process Automation" name="FlexBot" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Magnific -->
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!-- Global site tag (gtag.js) - Google Analytics 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150962890-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-150962890-1');
    </script>-->

</head>