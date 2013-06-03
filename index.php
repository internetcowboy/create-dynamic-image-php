<?php


createCar("wheels/WHEELS_WHL_WD3_17_HyperBlack.0073.png","color/BLUE-STREAK-PEARL.png","bumper.png","headlights.png","door_handles/black.png","grill.png","fog-lights.png","chrome.png","side_mirror/side-mirror-repeater.png","side_mirror/side-mirror.png","baller-car");



function createCar($wheels,$color,$bumper,$headlights,$doorhandle,$grill,$foglights,$chrome,$mirror_repeater,$side_mirror,$filename){

	
	$iOut = imagecreatetruecolor ("870","398"); //set up container
	$iOutPng = imagecreatetruecolor ("870","398"); //set up container
	
	//make the background transparent (no background)
	setTransparency($iOutPng,$iOutPng);
	
	//background image
	$background_image = imagecreatefromjpeg( "image-stitch-assets/background.jpg" ); //"870","398"
	$background_width = imagesx($background_image);
	$background_height = imagesy($background_image);
	
	//base image
	$base_image = imagecreatefrompng ( "image-stitch-assets/car-base.png" ); //"870","398"
	$base_image_no_shadow = imagecreatefrompng ( "image-stitch-assets/car-base-no-shadow.png" ); //"870","398"

	//shadow
	$shadow_image = imagecreatefrompng ( "image-stitch-assets/car-shadow.png" ); //"870","398"
	
	//wheel image
	if ($wheels!=""){
		$wheel_image = imagecreatefrompng ( "image-stitch-assets/".$wheels ); //"555","182"
	}
	
	//color image
	if ($color!=""){
		$color_image = imagecreatefrompng ( "image-stitch-assets/".$color ); //"581","306"
	}
	
	//bumper image
	if ($bumper!=""){
		$bumper_image = imagecreatefrompng ( "image-stitch-assets/".$bumper ); //"290","78"
	}
	
	//headlights image
	if ($headlights!=""){
		$headlights_image = imagecreatefrompng ( "image-stitch-assets/".$headlights ); //"404","127"
	}
	
	//door-handle image
	if ($doorhandle!=""){
		$doorhandle_image = imagecreatefrompng ( "image-stitch-assets/".$doorhandle ); //"43","27"
	}
	
	//grill image
	if ($grill!=""){
		$grill_image = imagecreatefrompng ( "image-stitch-assets/".$grill ); //"226","30"
	}
	
	//fog-lights image
	if ($foglights!=""){
		$foglights_image = imagecreatefrompng ( "image-stitch-assets/".$foglights ); //"383","43"
	}
	
	//chrome image
	if ($chrome!=""){
		$chrome_image = imagecreatefrompng ( "image-stitch-assets/".$chrome ); //"83","98"
	}
	
	//side mirror repeater image
	if ($mirror_repeater!=""){
		$mirror_repeater_image = imagecreatefrompng ( "image-stitch-assets/".$mirror_repeater ); //"28","9"
	}
	
	//side mirror image
	if ($side_mirror!=""){
		$side_mirror_image = imagecreatefrompng ( "image-stitch-assets/".$side_mirror ); //"440","57"
	}
	
	
	
	//add background to our container
	imagecopyresized($iOut, $background_image, 0, 0, 0, 0, $background_width, $background_height, $background_width, $background_height);
	
	

	//add shadow image to png
	//imagecopymerge_alpha($iOutPng, $shadow_image, 0, 258, 0, 0, 870, 139, 100);

	//add base image to our container
	imagecopyresized($iOut, $base_image, 0, 0, 0, 0, $background_width, $background_height, $background_width, $background_height);
	imagecopyresized($iOutPng, $base_image_no_shadow, 0, -93, 0, 0, $background_width, $background_height, $background_width, $background_height);

	//add the color to this container
	if ($color!=""){
		imagecopymerge_alpha($iOut, $color_image, 156, 18, 0, 0, 580, 306, 100);
		imagecopymerge_alpha($iOutPng, $color_image, 156, 18, 0, 0, 580, 306, 100);
	}

	//add the wheel to this container
	if ($wheels!=""){
		imagecopymerge_alpha($iOut, $wheel_image, 177, 174, 0, 0, 556, 180, 100);
		imagecopymerge_alpha($iOutPng, $wheel_image, 177, 174, 0, 0, 556, 180, 100);
	}
	//add the bumper to this container
	if ($bumper!=""){
		imagecopymerge_alpha($iOut, $bumper_image, 188, 187, 0, 0, 290, 78, 100);
		imagecopymerge_alpha($iOutPng, $bumper_image, 188, 187, 0, 0, 290, 78, 100);
	}
	//add the headlight to this container
	if ($headlights!=""){
		imagecopymerge_alpha($iOut, $headlights_image, 175, 151, 0, 0, 404, 127, 100);
		imagecopymerge_alpha($iOutPng, $headlights_image, 175, 151, 0, 0, 404, 127, 100);
	}
	//add the doorhandle to this container
	if ($doorhandle!=""){
		imagecopymerge_alpha($iOut, $doorhandle_image, 672, 115, 0, 0, 43, 27, 100);
		imagecopymerge_alpha($iOutPng, $doorhandle_image, 672, 115, 0, 0, 43, 27, 100);
	}
	//add the grill to this container
	if ($grill!=""){
		imagecopymerge_alpha($iOut, $grill_image, 213, 195, 0, 0, 226, 30, 100);
		imagecopymerge_alpha($iOutPng, $grill_image, 213, 195, 0, 0, 226, 30, 100);
	}
	//add the foglights to this container
	if ($foglights!=""){
		imagecopymerge_alpha($iOut, $foglights_image, 160, 261, 0, 0, 383, 43, 100);
		imagecopymerge_alpha($iOutPng, $foglights_image, 160, 261, 0, 0, 383, 43, 100);
	}
	
	//add the chrome to this container
	if ($chrome!=""){
		imagecopymerge_alpha($iOut, $chrome_image, 614, 27, 0, 0, 83, 98, 100);
		imagecopymerge_alpha($iOutPng, $chrome_image, 614, 27, 0, 0, 83, 98, 100);
	}
	
	//add the side mirror to this container
	if ($side_mirror_image!=""){
		imagecopymerge_alpha($iOut, $side_mirror_image, 250, 63, 0, 0, 440, 57, 100);
		imagecopymerge_alpha($iOutPng, $side_mirror_image, 250, 63, 0, 0, 440, 57, 100);
	}
	
	//add the side mirror repeater to this container
	if ($mirror_repeater_image!=""){
		imagecopymerge_alpha($iOut, $mirror_repeater_image, 656, 105, 0, 0, 28, 9, 100);
		imagecopymerge_alpha($iOutPng, $mirror_repeater_image, 656, 105, 0, 0, 28, 9, 100);
	}
	
	
	
	
	
	//save jpg to disk
	imagejpeg($iOut, $filename.".jpg");
	
	
	////save png to disk
	imagepng($iOutPng, $filename.".png");

	//output to screen
	header( "Content-type: image/png" );
	imagejpeg($iOutPng);
	
	//destory
	imagedestroy($iOutPng);
	imagedestroy($iOut);
	
	
}
function setTransparency($new_image,$image_source) { 
        
            $transparencyIndex = imagecolortransparent($image_source); 
            $transparencyColor = array('red' => 255, 'green' => 255, 'blue' => 255); 
             
            if ($transparencyIndex >= 0) { 
                $transparencyColor    = imagecolorsforindex($image_source, $transparencyIndex);    
            } 
            
            $transparencyIndex    = imagecolorallocate($new_image, $transparencyColor['red'], $transparencyColor['green'], $transparencyColor['blue']); 
            imagefill($new_image, 0, 0, $transparencyIndex); 
             imagecolortransparent($new_image, $transparencyIndex); 
        
    } 
function imagecopymerge_alpha($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct, $trans = NULL){
  $dst_w = imagesx($dst_im);
  $dst_h = imagesy($dst_im);

  // bounds checking
  $src_x = max($src_x, 0);
  $src_y = max($src_y, 0);
  $dst_x = max($dst_x, 0);
  $dst_y = max($dst_y, 0);
  if ($dst_x + $src_w > $dst_w)
    $src_w = $dst_w - $dst_x;
  if ($dst_y + $src_h > $dst_h)
    $src_h = $dst_h - $dst_y;

  for($x_offset = 0; $x_offset < $src_w; $x_offset++)
    for($y_offset = 0; $y_offset < $src_h; $y_offset++)
    {
      // get source & dest color
      $srccolor = imagecolorsforindex($src_im, imagecolorat($src_im, $src_x + $x_offset, $src_y + $y_offset));
      $dstcolor = imagecolorsforindex($dst_im, imagecolorat($dst_im, $dst_x + $x_offset, $dst_y + $y_offset));

      // apply transparency
      if (is_null($trans) || ($srccolor !== $trans))
      {
        $src_a = $srccolor['alpha'] * $pct / 100;
        // blend
        $src_a = 127 - $src_a;
        $dst_a = 127 - $dstcolor['alpha'];
        $dst_r = ($srccolor['red'] * $src_a + $dstcolor['red'] * $dst_a * (127 - $src_a) / 127) / 127;
        $dst_g = ($srccolor['green'] * $src_a + $dstcolor['green'] * $dst_a * (127 - $src_a) / 127) / 127;
        $dst_b = ($srccolor['blue'] * $src_a + $dstcolor['blue'] * $dst_a * (127 - $src_a) / 127) / 127;
        $dst_a = 127 - ($src_a + $dst_a * (127 - $src_a) / 127);
        $color = imagecolorallocatealpha($dst_im, $dst_r, $dst_g, $dst_b, $dst_a);
        // paint
        if (!imagesetpixel($dst_im, $dst_x + $x_offset, $dst_y + $y_offset, $color))
          return false;
        imagecolordeallocate($dst_im, $color);
      }
    }
  return true;
}
?>