<?php session_start();

class CaptchaSecurityImages {
 
 var $font ='REFSAN.ttf';    //'monofont.ttf';
 
   function generateCode($characters) {
      /* list all possible characters, similar looking characters and vowels have been removed */
      $possible = '23456789bcdfghjkmnpqrstvwxyz';
      $code = '';
      $i = 0;
      while ($i < $characters) { 
         $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
         $i++;
      }
      return $code;
   }
 
   function CaptchaSecurityImages($width='100',$height='40',$characters='6') {
      $code = $this->generateCode($characters);
	////////////  $_SESSION['security_code']=$code;
	/////  die($_SESSION['security_code']);
	 //$_SESSION['security_code'] = "dd";
	//// die($_SESSION['security_code']);
	 $_SESSION['chh']=$code;
      /* font size will be 75% of the image height */
      $font_size = $height * 0.58;
      $image = imagecreate($width, $height) or die('Cannot initialize new GD image stream');
      /* set the colours */
      $background_color = imagecolorallocate($image, 255, 255, 255);
      $text_color = imagecolorallocate($image, 0, 0, 0);
      $noise_color = imagecolorallocate($image, 100, 120, 180);
      /* generate random dots in background */
      for( $i=0; $i<($width*$height)/3; $i++ ) {
         imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
      }
      /* generate random lines in background */
      for( $i=0; $i<($width*$height)/150; $i++ ) {
         imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
      }
      /* create textbox and add text */
       $textbox = imagettfbbox($font_size, 0,'REFSAN.TTF', $code) or die('Error in imagettfbbox function');
      $x = ($width - $textbox[4])/2;
      $y = ($height - $textbox[5])/2;
      imagettftext($image, $font_size, 0, $x, $y, $text_color,'REFSAN.TTF' , $code) or die('Error in imagettftext function');
      /* output captcha image to browser */
      header('Content-Type: image/jpeg');
      imagejpeg($image);
      imagedestroy($image);
      
   }
 
}
 
 
 $width=100;
 $height=40;
 $characters=5;
///$width = isset($_GET['width']) && $_GET['width'] < 600 ? $_GET['width'] : '120';
//$height = isset($_GET['height']) && $_GET['height'] < 200 ? $_GET['height'] : '40';
//$characters = isset($_GET['characters']) && $_GET['characters'] > 2 ? $_GET['characters'] : '6';
 
 $captcha = new CaptchaSecurityImages(120,40,5); 
echo "CODE=".$captcha;
 
 
?>
 
 
 