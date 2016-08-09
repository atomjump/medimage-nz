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
    
?>
    
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
			 				echo 'medimage.php';
			 			break;
			 	} ?>" title="Download Software"><img  border="0" src="images/loopdownload.svg" width="80" height="80"><?php if($platform == 'windows') { ?><img id="download-tip" border="0" src="images/download-tip.png" width="261" height="150" style="position: relative; top: -70px"><?php } ?></a>
		
    
