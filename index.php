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
<html lang="en" id="fullscreen">
  <head>
  	    <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, user-scalable=no">
		 <title>MedImage App - send photos directly from your phone camera to your PC</title>
		 <meta name="description" content="Photograph and catalogue your patient's health issues with your phone, and send them directly to your PC.">

		 <meta name="keywords" content="Instant Messaging, Live Chat, Customer Chat, Open Source Messaging, Open Messaging">

			  <!-- Bootstrap core CSS -->
			<link rel="StyleSheet" href="css/bootstrap.min.css" rel="stylesheet">

			<!-- AtomJump Feedback CSS -->
			<link rel="StyleSheet" href="css/comments-0.1.css">

			<!-- Bootstrap HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			  <style>
			  .looplogo:hover {
					position: relative;
					background: url(images/logo640.png)  no-repeat;
					height: 640px;
					width: 640px;
					margin-left: auto;
					margin-right: auto;
					padding-top: 0px;
			 	}

				.looplogo {
					background: url(images/logo640.png)  no-repeat;
					position: relative;
					width: 640px;
					height:640px;
					margin-left: auto;
					margin-right: auto;
				}
			  </style>
			<![endif]-->

			<!-- Include your version of jQuery here.  This is version 1.9.1 which is tested with AtomJump Feedback. -->
			<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
			<!-- Took from here 15 May 2014: http://ajax.googleapis.com/ajax/libs/jquery/1.9.1 -->

			<!-- For the dropdown autocomplete -->
			<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
			<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


			<script>
				var ajFeedback = {
					"uniqueFeedbackId" : "ajps_medimage",
					"myMachineUser" : "111.69.60.34:8",

					"server": "https://atomjump.com/api"				}
			</script>
			<script type="text/javascript" src="js/chat-1.0.js"></script>



			<style>
				h2 {
					text-align: center;
				}

				textarea:focus, input:focus, img:focus {
					outline: 0;
				}





				.looplogo:hover {
					position: relative;
					height: 640px;
					width: 640px;
					margin-left: auto;
					margin-right: auto;
					padding-top: 0px;
				}

				.looplogo {
					position: relative;
					width: 600px;
					height:600px;
					margin-left: auto;
					margin-right: auto;
					z-index: 10;
				}


				.overimage {
					position: relative;
					top: 0px;
					z-index: 1;
				}

				


        		.darkoverlay {
        			position: absolute;
        			top: 800px;
        			width: 100%;
        			background-color: black;
        			opacity: 0.9;
    				   filter: alpha(opacity=90); /* For IE8 and earlier */


        		}




				       .subs {

				        	position: fixed;
					        bottom: 10px;
					        float: left;
					        margin-left: 20px;
					        z-index: 20;
				       }

				       .share {

					        position: fixed;
				        	top: 10px;
				        	float: left;
				        	margin-left: 20px;
				        	z-index: 20;
			       	}

				      .cpy {
					        position: fixed;
					        right: 10px;
				        	bottom: 10px;
					        float: right;
					        margin-right: 20px;

			       	}

									.cpy a:link, a:visited {
						color: #888;
					}

				

				/* iphone and other phones */
				@media screen and (max-width: 480px) {

					.looplogo {
						width: 320px;
						height:320px;


					}

					.looplogo:hover {
						height: 320px;
						width: 320px;
					}

					.subs {

						position: relative;
						margin-top: 10px;
						float: left;
						margin-left: 20px;
						z-index: 0;
					}

					.cpy {
						position: relative;
						margin-top: 10px;
						margin-right: 20px;
					}

									}


				/* ipad */
				@media screen and (max-device-width: 1024px) and (min-device-width: 768px) {

				.cpy {
					position: fixed;
					right: 10px;
					bottom: 10px;
					float: right;
					margin-right: 20px;
					z-index: 20;

				}

				 					}

				/* Samsung S4 */
				@media screen and (-webkit-min-device-pixel-ratio: 3.0) and (max-width: 1080px) {
					.looplogo {
						width: 320px;
						height:320px;


					}

					.looplogo:hover {
						height: 320px;
						width: 320px;
					}

					.subs {

						position: fixed;
						bottom: 10px;
						float: left;
						margin-left: 20px;
						z-index: 0;
					}

					.cpy {
						position: fixed;
						right: 10px;
						bottom: 10px;
						float: right;
						margin-right: 20px;
					}


									}

				#bg {
					position:relative;
					top:0;
					left:0;
					width:100%;
					height:100%;
					z-index: -1;
				}
				
				.videoWrapper {
					position: relative;
					padding-bottom: 56.25%; /* 16:9 */
					padding-top: 25px;
					height: 0;
				}
				.videoWrapper iframe {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
				}





			</style>


			<script>
    		var ie8 = false;
			</script>





							<script id="sumo" src="//load.sumome.com/" data-sumo-site-id="91888ccca450632c1e4d0b15524a9d3d5c3af4efcfa8683124fa7e29ca461fa8" async="async"></script>
			
			<!--[if IE 8]>
				<script>
					ie8 = true;
					document.getElementById('sumo').src = "";	//blank out this on IE8
				</script>
			<![endif]-->

	</head>

	<body    onscroll="$('#download-tip').hide();">
		

		
		<script>


				function openPopup(possibleUser, check)
				{
						var screenWidth = $(window).width();
						var screenHeight = $(window).height();
						$('#comment-popup-container').width(Math.floor(screenWidth) + "px");
						$('#comment-popup-container').height(Math.floor(screenHeight) + "px");



						$("#comment-in-here").html('');


						$('#comment-popup-container').fadeIn(400,function(){



							var wid = ($("#comment-in-here").width() - 5);		//5 is to ensure scroll bar always accounted for
							var hei = ($("#comment-popup-text-container").height() - 10);


							$("#comment-in-here").html('<iframe id="comment-iframe" src="' + ssshoutServer + '/search-secure.php?width=' + wid + '&height=' + hei + '&uniqueFeedbackId=' + commentLayer + '&myMachineUser=' + whisperOften + '&possible_user=' + possibleUser + '&check=' + check + '&clientremoteurl=' + encodeURIComponent(myUrl) + '" frameBorder="0" scrolling="no" width="' + wid + '" height="' + hei + '" onload="$(\'#comment-loading\').hide();"></iframe>');
						});
						//end duplicate
				}




				
				function newDomain(input) {

					origStr = document.getElementById(input).value;
					str = origStr.replace(/\s+/g, '');
					str = str.replace(/[^a-z0-9]/gi, '');


					if(str == origStr) {
						//Straightforward redirect
						window.location = 'http://' + str + '.atomjump.com';
					} else {
						window.location = 'http://' + str + '.atomjump.com/?orig_query=' + encodeURIComponent(origStr);


					}

					return false;



				}

				function getHiRes()
				{
					if($('html').css('background-image') != "none") {
						//Yes we are probably a mobile device
						$('html').css('background-image', "url('images/property/medimage_OWN_HI.jpg')");
					} else {
						$('.wrapper').css('background-image', "url('images/property/medimage_OWN_HI.jpg')");

					}


					$('.screensave').css('background-image', "url('images/property/medimage_OWN_HI.jpg')");		//This is usually carried out in the background

				}

				$(document).ready(function(){

				 	//http://stackoverflow.com/questions/24944925/background-image-jumps-when-address-bar-hides-ios-android-mobile-chrome
				 	var bg = jQuery("html");

					$(window).resize(function() { resizeBackground(); });

					function resizeBackground() {
								bg.height(screen.height);
					}
					resizeBackground();



				 $( "#doma" ).autocomplete({
						source: "search-suggest.php",
						minLength: 1,//search after one characters
						select: function(event,ui){
							//do something
							$('#doma').val(ui.item.value);
							newDomain("doma");
						}
					});

					$( "#srch" ).autocomplete({
						source: "search-suggest.php",
						minLength: 1,//search after one characters
						select: function(event,ui){
							//do something
							$('#srch').val(ui.item.value);
							newDomain("srch");
						}
					});

					



				});
		</script>

				<div style="display: none;">
			<img src="images/property/medimage_OWN_HI.jpg" alt="" onload="getHiRes();"/>
		</div>
		
		
		<div style="">
			<a class="comment-open" id="this-comment-open" href="javascript:" data-uniquefeedbackid="ajps_medimage" data-mymachineuser="111.69.60.34:8"  >


			<div id="logo-wrapper" class="looplogo">
				<img class="saver-hideable" src="images/medimage-www-logo.svg" id="bg" alt="">
				<!-- Any link on the page can have the 'comment-open' class added and a blank 'href="javascript:"' --><br/>

			</div>
			</a>
		</div>







		
					<div class="subs">


			 <a href="<?php $platform = client_platform();
			 		switch($platform) {
			 			case 'windows':
			 				echo 'https://atomjump.com/public_product/MedImageInstaller.exe';
			 			break;
			 			case 'android':
			 				echo 'https://play.google.com/store/apps/details?id=com.phonegap.medimage';
			 			break;
			 			
			 			case 'ios':
			 			 echo 'https://itunes.apple.com/us/app/atomjump-medimage/id1087679463?ls=1&mt=8';
			 			break;
			 			default:
			 				echo 'guide.php';
			 			break;
			 	} ?>" title="Download Software"><img border="0" src="images/loopdownload.svg" width="80" height="80"><?php if($platform == 'windows') { ?><img id="download-tip" border="0" src="images/download-tip.png" width="261" height="150" style="position: relative; top: -70px"><?php } ?></a>
			</div>
		


    	<div class="container-fluid darkoverlay" id="mydarkoverlay">
   	  
  	  
			  <div class="row" style="padding-top: 30px">
 
    			<div class="col-md-2">
    			</div>
  			  
  			  <div class="col-md-8">
  	     	<h3 style="color: #CCC;">Photograph and catalogue your patient's health issues with your phone, and send them directly to your PC.</h3>
  		     <h4 style="color: #999;">Available on Android Play and the Apple Appstore. Companion software available for PC, Mac and Linux.</h4>
  		   	
  		   	<a href='https://play.google.com/store/apps/details?id=com.phonegap.medimage&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png' width="155" height="60" /></a>
  		   	<a href='https://itunes.apple.com/us/app/atomjump-medimage/id1087679463?ls=1&mt=8'><img alt='Get it on the Apple Appstore' src="images/applestore_135x40.svg" width="135" height="40" border="0"></a>
  		   	</div>
   			
    			<div class="col-md-2">
    			</div>
   			
    	</div>
    	
    	
    	   	     <div class="row">
 
    			<div class="col-md-3">
    			</div>
  			  
  			  <div class="col-md-6">
    		         	<br/>
    		         	<br/>
    		         	<br/>
    		         	<br/>
    		         	<br/>
    		         	<div class="videoWrapper">
    		         		<iframe width="560" height="315" src="https://www.youtube.com/embed/JyB_tDwAXwI" frameborder="0" allowfullscreen></iframe>
				</div>
  		   	</div>
   
  		   	<div class="col-md-3">
    			</div>
 			
    	</div>
    	
    	
     	<br/>
     	<br/>
     	<br/>
 	
     
     
     <div class="row">
 	
      	<div class="col-md-2"> 
      			</div>
  	 		  <div class="col-md-4">
      	   <h3>On your phone, enter a patient ID, then snap!...</h3> 			      
  
   		   	</div>
   			
    			  
  			  	<div class="col-md-4">
         <h3>...on your PC</h3>
 
    			</div>
   
  		   	<div class="col-md-2">
    			</div>
   

     </div>  	
    		 
	 
	 
	    <div class="row">
 
    			<div class="col-md-2">
    			</div>
  			  
  			  <div class="col-md-4">
    		     <input type="text" placeholder="" class="form-control" style="width:50%;">
  		   	</div>
   			
   			  
  			  	<div class="col-md-4">
  			  	    <h4 style="color: #999;">\ image-[timestamp].jpg</h4>
    			</div>
   
  		   	<div class="col-md-2">
    			</div>
 			
    	</div>
     
     <br/>
     
     <div class="row">
 
    			<div class="col-md-2">
    			</div>
  			  
  			  <div class="col-md-4">
    		     <input type="text" placeholder="patient01" class="form-control" style="width:50%;"  >
  		   	</div>
   			
     			  
  			  	<div class="col-md-4">
  			  	    <h4 style="color: #999;">\ patient01-[timestamp].jpg</h4>
    			</div>
   
  		   	<div class="col-md-2">
    			</div>
 			
    	</div>
    	
     <br/>
   	
     <div class="row">
 
    			<div class="col-md-2">
    			</div>
  			  
  			  <div class="col-md-4">
    		     <input type="text" placeholder="#patient02" class="form-control"  style="width:50%;">
  		   	</div>
   			
    			  
  			  	<div class="col-md-4">
  			  	    <h4 style="color: #999;">\ patient02 \ image-[timestamp].jpg</h4>
    			</div>
   
  		   	<div class="col-md-2">
    			</div>
 			
    	</div>
 
     <br/>
 
 
     <div class="row">
 
    			<div class="col-md-2">
    			</div>
  			  
  			  <div class="col-md-4">
    		     <input type="text" placeholder="#patient02 mole" class="form-control" style="width:50%;">
  		   	</div>
   			
  	  
  			  	<div class="col-md-4">
  			  	    <h4 style="color: #999;">\ patient02 \ mole-[timestamp].jpg</h4>
    			</div>
   
  		   	<div class="col-md-2">
    			</div>
 			
    	</div>
    	
 
    	

   			<br/><br/><br/><br/>

		</div>

					<div class="cpy saver-hideable">


				<p align="right"><a href="guide.php">Learn More</a></p>
				<p align="right"><a class="comment-open" data-uniquefeedbackid="ajp_credits" data-mymachineuser="92.27.10.17:8" href="javascript:">Credits</a></p>

				<p align="right"><small>&copy; <?php echo date('Y'); ?> AtomJump.com</small></p>
			</div>

    	
		<div id="comment-holder"></div><!-- holds the popup comments. Can be anywhere between the <body> tags -->

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
