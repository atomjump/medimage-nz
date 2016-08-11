<!DOCTYPE html>
<html lang="en">
  <head>
  	    <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, user-scalable=no">
		 <title>MedImage - Guide</title>

		 <meta name="description" content="This app allows the medical professional to upload a photo and ID from their phone of a patient’s case e.g. a mole, and transfer the image directly to the patient's file on their PC.</p>
.">

		 <meta name="keywords" content="Medical photo, photo tag, Phone camera to PC">

			  <!-- Bootstrap core CSS -->
			<link rel="StyleSheet" href="https://atomjump.com/css/bootstrap.min.css" rel="stylesheet">

			<!-- AtomJump Feedback CSS -->
			<link rel="StyleSheet" href="https://atomjump.com/css/comments-0.1.css?ver=1">

			<!-- Bootstrap HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->

			<!-- Include your version of jQuery here.  This is version 1.9.1 which is tested with AtomJump Feedback. -->
			<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
			<!-- Took from here 15 May 2014: http://ajax.googleapis.com/ajax/libs/jquery/1.9.1 -->

			<script>
				var ajFeedback = {
					"uniqueFeedbackId" : "aj_medimage_beta",
					"myMachineUser" : "92.27.10.17:8"
				}
			</script>
			<script type="text/javascript" src="https://atomjump.com/js/chat.js"></script> <!-- TODO - keep path as js/chat.js -->

			<style>
				h2 {
					text-align: center;
				}

				textarea:focus, input:focus, img:focus {
					outline: 0;
				}





				.looplogo {
					position: relative;
					width: 800px;
					margin-left: auto;
					margin-right: auto;
				}

				.smart-image {
					position: relative;
					width: 373px;
					margin-left: auto;
					margin-right: auto;

				}

				.subs {

					position: fixed;
					bottom: 10px;
					float: left;
					margin-left: 20px;
				}

				.cpy {
					position: fixed;
					right: 10px;
					bottom: 10px;
					float: right;
					margin-right: 20px;
				}

				@media screen and (max-width: 480px) {

					.looplogo {
						width: 373px;
						height:288px;


					}

					.smart-image {
						width: 373px;

					}


				}

				@media screen and (-webkit-min-device-pixel-ratio: 3.0) and (max-width: 1080px) {
					.looplogo {
						width: 320px;
						height:192px;


					}

					.smart-image {
						width: 290px;

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

				.h2 {
					text-align: left !important;
				}

				.greyed {

					background-color: #F5F5F5 !important;
					padding-top: 15px;
					padding-bottom: 15px;

				}




				.looplogo-second:hover {
					position: relative;
					height: 300px;
					width: 300px;
					margin-left: auto;
					margin-right: auto;
					padding-top: 0px;
				}

				.looplogo-second {
					position: relative;
					width: 300px;
					height:300px;
					margin-left: auto;
					margin-right: auto;
				}






				/* iphone and other phones */
				@media screen and (max-width: 480px) {

					.looplogo-second {
						width: 300px;
						height:300px;


					}

					.looplogo-second:hover {
						height: 300px;
						width: 300px;
					}

					.smart-image {
						width: 260px;

					}

					.subs {

						position: relative;
						margin-top: 10px;
						float: left;
						margin-left: 20px;
					}

					.cpy {
						position: relative;
						margin-top: 10px;
						margin-right: 20px;
					}
				}

				/* Samsung S4 */
				@media screen and (-webkit-min-device-pixel-ratio: 3.0) and (max-width: 1080px) {
					.looplogo-second {
						width: 300px;
						height:300px;


					}

					.looplogo-second:hover {
						height: 300px;
						width: 300px;
					}

					.smart-image {
						width: 290px;

					}

					.subs {

						position: relative;
						bottom: 10px;
						float: left;
						margin-left: 20px;
					}

					.cpy {
						position: relative;
						right: 10px;
						bottom: 10px;
						float: right;
						margin-right: 20px;
					}
				}



			</style>

	</head>

	<body>
		<script>
				$(document).ready(function(){


				});
		</script>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">

				</br>
				</br>


				<span style="float: left;">
					<a href="index.php"><img  src="images/logo80.png" title="AtomJump Loop"></a>&nbsp;&nbsp;
				</span>


				<span style="float: left;">
					<h1>Using <span style="color: #563cc5 !important">MedImage</span>&nbsp;</h1>
				</span>


				<div style="height: 90px; clear: both;">
				</div>






					<div class="row greyed">

						<div class="col-md-6">
							<a href="https://play.google.com/store/apps/details?id=com.phonegap.medimage"><img border="0" class="smart-image img-responsive" src="images/medimage-phone.jpg"></a>
						</div>
						<div class="col-md-6">
							<h3>The App</h3>
							<p>This app allows the medical professional to upload a photo and ID from their phone of a patient’s case e.g. a mole, and transfer the image directly to the patient's file on their PC. The app is currently available for <a href="https://play.google.com/store/apps/details?id=com.phonegap.medimage">Android</a>, and iOS <a href="https://itunes.apple.com/us/app/atomjump-medimage/id1087679463?ls=1&mt=8">iPhone/iPad</a>. Each doctor will need an app for their own phone.</p>
						</div>

					</div>


					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    					<li class="divider"></li>
    				</ul>


					<div class="row">
						<div class="col-md-6">
							<h3>The PC Server</h3>
							<p>In order for you to receive the photos from your phone, you need to <a href="https://atomjump.com/public_product/MedImageInstaller.exe">download</a> a companion server to your PC.  This server has a straightforward installer ready for Windows 64-bit machines.  You can test this out directly, without any technical knowledge, if you have a Wifi connection shared between your PC and your phone. If you wish to use the internet only, you can choose an easy 4 digit pairing option via AtomJump's own servers. Some medical institutions require a private 'proxy' server to be set up, however. If your system admins have already set this up, and have given you an address for the 'MedImage Proxy Server', follow this <a href="SetupInstructionsforMedImage.pdf">Installation Guide.</a></p>
						</div>
						<div class="col-md-6">
							<a href="https://atomjump.com/public_product/MedImageInstaller.exe"><img border="0" class="smart-image img-responsive" src="images/medimage-pc.jpg"></a>
						</div>
					</div>

					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    					<li class="divider"></li>
    	</ul>


					<div id="proxy" class="row greyed">

						<div class="col-md-6">
							<img class="smart-image img-responsive" src="images/medimage-proxy.png">
						</div>
						<div class="col-md-6">
							<h3>The Proxy Server [Optional]</h3>
							<p>Note: this section requires technical and system administration knowledge.</p>
							<p><b>What you will need:</b> a linux (or Windows) web server with an incoming and outgoing internet connection. Any number of client Windows PCs potentially in different physical premises.</p>
							<p><b>The setup:</b> your server will receive photos over 3G or 4G wireless from your doctor's mobile phones. The client Windows PCs are associated uniquely with each different mobile phone (via a code generated for each PC). A photo will stay on the proxy server for a few seconds before being downloaded to the doctor's unique Windows machine, and then being removed from the proxy server.</p>
							<p><a href="javascript:" onclick="$('#technical').slideToggle();">Expand</a></p>
						</div>

					</div>

					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    					<li class="divider"></li>
    				</ul>

			<div id="technical" style="display: none;">

    				<div class="row">

						<div class="col-md-12">
							<h3>Proxy Setup</h3>
							<p>On your internet server, first install <a href="https://nodejs.org">NodeJS</a> and <a href="https://www.npmjs.com/">npm</a>. See these <a href="https://github.com/nodesource/distributions#installation-instructions">install scripts</a>, under the section 'Node.js v4.x', but there are multiple ways to do this depending on your platform e.g. MacOSX may vary slightly. Note, Windows server users can install the same <a href="https://atomjump.com/public_product/MedImageInstaller.exe">Windows 64-bit installer</a> that client PCs use and do not need to follow the steps in this section below.</p>

							<p>
							Then
							<pre>
sudo npm install pm2@latest -g
sudo npm install medimage -g
pm2 start "$(npm prefix -global)/lib/node_modules/medimage/medimage-server.sh"
pm2 save
pm2 startup     	#and run the command it outputs, to get autostart at boot-up.</pre>
							</p>

							<p>					
							Then open the firewall to port 5566 for reading and writing eg.
							<pre>
sudo ufw allow 5566/tcp</pre>
							See more details on a Ubuntu firewall setup in this <a href="https://www.digitalocean.com/community/tutorials/how-to-setup-a-firewall-with-ufw-on-an-ubuntu-and-debian-cloud-server">article</a>.
							</p>
							
							<p>
								To track logs: 
								<pre>
pm2 logs</pre>
								For further details about starting and stopping the server see <a href="http://pm2.keymetrics.io">PM2</a> and the MedImage <a href="https://www.npmjs.com/package/medimage">technical README</a>.
							</p>
						</div>


					</div>


					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    					<li class="divider"></li>
    </ul>



    <div class="row">


						  <div class="col-md-12">
							    <h3>Windows client machine setup</h3>
							    <p>Download and run the installable <a href="https://atomjump.com/public_product/MedImageInstaller.exe">MedImageInstaller.exe</a> on each client. Note: you will likely need to do this as an Administrator.</p>
			
			        <p>If you have installed your own proxy, enter the URL of your proxy server eg. 'http://myproxy.mycompany.com:5566'</p>
								</div>

					</div>




					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    					<li class="divider"></li>
    					</ul>



					<div class="row">

						<div class="col-md-12">
							 <h3>Phone setup</h3>

					        <p>Run the app and click the large circle. After 5 seconds it will mention that you can enter you 4 digit pairing code.</p>

					        <p>Enter the patient id in the box at the top, specific to each photo. Note: #tags will allocate a folder (this will create another folder inside your photos folder). eg.<pre>#moles John123</pre>
					        </p>
					        <p>Click the large icon to start taking photos, and they will appear after a few seconds on your PC. The default folder is C:\MedImage\photos, but it will also be copied to C:\mt32\attachments (particularly for MedTech users)</p>



						</div>


					</div>

					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    					<li class="divider"></li>
    					</ul>


    					<div class="row">


						<div class="col-md-12">
							<h3>Further options</h3>
							<ul>
							    <li>

							        <p>You can back-up the photos as they arrive on any MedImage server to other drives or folders on the same drive. Edit the config.json file in the server's directory.</p>
							        <p><pre>"backupTo": [
                    "C:/your/folder",
                    "D:/your/second/drive",
                    "/linux/directory
              ],
							        </pre>Note the forward-slashes are needed on Windows and linux, rather than back-slashes</p>
							    </li>
							    <li>
							    	<p>You can use a secure https server with <pre>
"httpsKey": "path/to/key/pem/file"
"httpsCert": "path/to/certificate/perm/file"</pre></p>
							    	
							    </li>
							    <li>
							        <p>
							        You can edit the 'onStartBackupDriveDetect' parameter to be true. This will auto-detect other drives on starting the script, and start backing up to a MedImage/photos folder at the top of the drive.
							        <pre>"onStartBackupDriveDetect": true,</pre>
							        </p>


							    </li>
							    <li>
							        <p><p>Tip: <a href="http://jsonlint.com/">JSONLint</a> is a great tool for confirming you have a valid .json file.
							        </p>
							    </li>
							</ul>
						</div>

					</div>


			</div>	 <!-- End of technical -->
					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    						<li class="divider"></li>
    					</ul>

					<div class="row greyed" id="purchase">
						<div class="col-md-6">
							<h3>Data Transfers</h3>
							
							<p>You have three options for transferring data via your phone to your PC</p>
							<ul>
								<li style="padding: 4px;">
									<b>Via Wifi</b>  This option is free, and very fast, but for security purposes many doctors' practices do not have a local wifi network set up. The other limitation is that you must be within the vicinity of the network for the transfer to happen.
								</li>
								<li style="padding: 4px;">
									<b>Via AtomJump.com's Secure Servers</b>  This option is easy to set up, and we provide 5GB of initial free transfer. You can purchase unlimited data transfer at a later date, at $US 10 per month (or $NZ 15/month).<br/>
									<a style="margin: 8px;" href="#" onclick="$('#pay').slideToggle(); return false;" class="btn btn-info">Purchase Bandwidth</a>
									<div id="pay" style="padding: 8px; display: none;">
										<b>$NZ 15/month Unlimited</b><br/>
										<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="YR8BC3F4MG694">
		<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
		</form>
									</div>
								</li>
								<li style="padding: 4px;">
									<b>Via your own Servers</b>  This option takes a little technical expertise, and is free, although you will have standard bandwidth charges from your hosting providers.  You have full control over the security of the servers, using http or https.
								</li>
							</ul>
							
							
						</div>
						<div class="col-md-6">
							<img style="margin-top: 30px;" class="smart-image img-responsive" src="images/get_started.jpg">
						</div>

					</div>

					

<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    						<li class="divider"></li>
    					</ul>

					<div class="row" id="privacy">
						<div class="col-md-6">
							<img style="margin-top: 50px;" class="smart-image img-responsive" src="images/worry_free.jpg">
						</div>
						
						<div class="col-md-6">
							<h3>Privacy Policy</h3>
							
							<p>Medimage take your privacy and that of your clients very seriously.</p>  
						
							<p>Our system is designed from the ground-up to assure security:</p>
							<ul>
								<li>Images can be sent securely by Wifi connection directly to your computer.</li>
								<li>Images are deleted from your phone once they are received at your computer.</li>
								<li>Web services delete images as soon as receipt is confirmed.</li>
								<li>No image is stored for longer than is required for onward transmission</li>
								<li>Images are transmitted using 256 bit AES encryption.</li>
							</ul>
							
							<p>Our system will not compromise your server:</p>
							<ul>
								<li>Medimage Server will only access computers you specify.</li>
								<li>We do not collect any information from your computer.</li>
								<li>We do not access any medical software on your computer.</li>
							</ul>
							
							<p>How we use your personal information</p>
							<ul>
								<li>We only collect the information we need to manage your account and contact you if we need</li>
							to.
								<li>Any information we collect is stored in an encrypted archive.</li>
								<li>We will never share your information with any third party.</li>
								<li>You may ask for a copy of any information we hold about you at any time and you have the right to 
							ask us to correct any mistakes.</li>
								<li>If you need to contact us about this policy, please email privacy@atomjump.com</li>
							</ul>
							
							
							
							
						</div>
						
					</div>




					<br/><br/><br/><br/><br/><br/>
					<ul class="nav nav-list">
    						<li class="divider"></li>
    					</ul>

					<div class="row greyed" id="license">
						<div class="col-md-6">
							<h3>Software License</h3>
							
							<p>Please read our current license <a href="https://www.binpress.com/license/view/l/a84bbfba8bde4e2da7644e10c6143c45">here</a>, which applies to the server, and the app.</p>
							
							
						</div>
						<div class="col-md-6">
							<img style="margin-top: 30px;" class="smart-image img-responsive" src="images/action.jpg">
						</div>

					</div>

					





				<!--<img class="looplogo" src="images/sunrise.jpg">-->
				<br/>
				<br/>
				</div>
				<div class="col-md-2">
				</div>

				<!-- TODO: link for referral scheme from digitalocean https://www.digitalocean.com/?refcode=7ce149b336e8 -->

			</div>
		</div>



			<div class="cpy">
			<p align="right"><small>&copy; <?php echo date('Y'); ?> AtomJump.com</small></p>
		</div>

		<div id="comment-holder"></div><!-- holds the popup comments. Can be anywhere between the <body> tags -->



		<div id="comment-holder"></div><!-- holds the popup comments. Can be anywhere between the <body> tags -->

		<?php require_once("components/piwik.php"); ?>

	</body>

</html>