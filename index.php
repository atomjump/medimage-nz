<?php
    function client_platform() {
		 if ((isset($_SERVER['HTTP_USER_AGENT'])) && (preg_match('/windows/i', $_SERVER['HTTP_USER_AGENT']))) {
			return 'windows';
			/* Note: this will miss < Win95 - they would not support 64-bit apps anyway */
		 }
		 if ((isset($_SERVER['HTTP_USER_AGENT'])) && (preg_match('/android/i', $_SERVER['HTTP_USER_AGENT']))) {
		 	return 'android';
		 }
 
 
   		if ((isset($_SERVER['HTTP_USER_AGENT'])) && (preg_match('/iphone/i', $_SERVER['HTTP_USER_AGENT']))) {
		 	return 'ios';
		 }
		 
   		if ((isset($_SERVER['HTTP_USER_AGENT'])) && (preg_match('/ipad/i', $_SERVER['HTTP_USER_AGENT']))) {
		 	return 'ios';
		}
		return 'other';
    }


	//Ensure no caching
	header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header("Pragma: no-cache"); // HTTP/1.0
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MedImage App - send photos directly from your phone camera to your PC</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	
	<!-- AtomJump Feedback CSS -->
	<link rel="StyleSheet" href="css/comments-0.1.css">

	<!-- Bootstrap HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->


    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendor/device-mockups/device-mockups.min.css">

    <!-- Theme CSS -->
    <link href="css/new-age.css" rel="stylesheet">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


	<!-- Include your version of jQuery here.  This is version 1.9.1 which is tested with AtomJump Feedback. -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<!-- Took from here 15 May 2014: http://ajax.googleapis.com/ajax/libs/jquery/1.9.1 -->

    <script>
		var ajFeedback = {
					"uniqueFeedbackId" : "ajps_medimage",
					"myMachineUser" : "111.69.60.34:8",

					"server": "https://atomjump.com/api"				}
	</script>
	<script type="text/javascript" src="js/chat.js"></script>


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">MedImage</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="https://atomjump.com/public_product/MedImageInstaller.exe">PC Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Features</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Photograph and catalogue your patient's health issues with your phone, and send them directly to your PC.</h1>
                            <a href="#download" class="btn btn-outline btn-xl page-scroll">Get the app</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="images/medimage-screen.png" class="img-responsive" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">“This is simply amazing. I have been looking for something like this for years.” </h2>
                    <p>Rob Seddon-Smith, New Zealand GP</p>
                    <p>Our app is available on any mobile device. Download now to get started!</p>
                    <div class="badges">
                        <a class="badge-link" href="https://play.google.com/store/apps/details?id=com.phonegap.medimage"><img src="images/google-play-badge.svg" width="135" height="40" alt=""></a>
                        <a class="badge-link" href="https://itunes.apple.com/us/app/atomjump-medimage/id1087679463?ls=1&mt=8"><img src="images/app-store-badge.svg" width="135" height="40" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Transfer your photos quickly</h2>
                        <p class="text-muted">Spend a few minutes setting up your phone and PC, and then:</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="images/medimage-screen.png" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-note text-primary"></i>
                                    <h3>1. Give the image a title</h3>
                                    <p class="text-muted">Use your own patient ID for the filename, or a '#' hash tag for a folder name</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-camera text-primary"></i>
                                    <h3>2. Snap a photo</h3>
                                    <p class="text-muted">Take one or several photos of the patient's body</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-rocket text-primary"></i>
                                    <h3>3. Send the photos directly to your PC</h3>
                                    <p class="text-muted">Background transfer time varies from one second on Wifi, up to around 10 seconds on 3G</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-cloud-upload text-primary"></i>
                                    <h3>4. Upload the photos to your medical system</h3>
                                    <p class="text-muted">You'll find the image files already named sensibly and ready to upload from your PC</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-md-8">
                        	</div>
                            <div class="col-md-4">
                            	
                        			<a href="guide.php" class="btn btn-outline btn-xl page-scroll btn-against-white">Learn more</a>
                        		
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop stalling.<br>Be smart.</h2>
                <a href="guide.php" class="btn btn-outline btn-xl page-scroll">Learn more</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>Live message us</h2>
            <ul class="list-inline list-social">
                <li class="">
                    <a class="comment-open" title="Message live" id="this-comment-open" href="javascript:" data-uniquefeedbackid="ajps_medimage" data-mymachineuser="111.69.60.34:8"  >
<img src="images/medimage-logo-blank.svg" width="80" height="80"></a>
                    
                </li>
                <li class="social-facebook">
                	
                    <SCRIPT TYPE="text/javascript">
  emailE=('medimage@' + 'atomjump.com')	
  document.write(
    '<A href="mailto:' + emailE + '"><i class="fa fa-envelope"></i></a>'
  )
</SCRIPT>
                </li>
                
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> AtomJump Ltd. New Zealand. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="guide.php#privacy">Privacy</a>
                </li>
                <li>
                    <a href="https://www.binpress.com/license/view/l/a84bbfba8bde4e2da7644e10c6143c45">Terms</a>
                </li>
                <li>
                    <a href="guide.php">Learn More</a>
                </li>
            </ul>
        </div>
    </footer>
    
    <div id="comment-holder"></div><!-- holds the popup comments. Can be anywhere between the <body> tags -->


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>
    
    <!-- Piwik -->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
		var u="//atomjump.com/analytics/piwik/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', 1]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<noscript><p><img src="//atomjump.com/analytics/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
	<!-- End Piwik Code -->

</body>

</html>
