<?php
$value = $_GET['val'];
function LoadPNG($imgname)
{
// Create the image
$im = imagecreatetruecolor(84, 26);
$font_size = 18;

$im = imagecreatetruecolor(84*6, 26*6);
$font_size = 15*7;

$angle = 0;
imageantialias($im, true);
// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
$bgc = imagecolortransparent($im, $bgc);
imagefilledrectangle($im, 0, 0, 84, 26, $bgc);
imagefilledrectangle($im, 0, 0, 168, 52, $bgc);
// The text to draw
$text = $imgname;
// Replace path by your own font path
$font = 'css/fonts/Roslyn.ttf';


// Get image Width and Height
$image_width = imagesx($im);  
$image_height = imagesy($im);

// Get Bounding Box Size
$text_box = imagettfbbox($font_size,$angle,$font,$text);

// Get your Text Width and Height
$text_width = $text_box[2]-$text_box[0];
$text_height = $text_box[3]-$text_box[1];

// Calculate coordinates of the text
$x = ($image_width/2) - ($text_width/2);
$y = ($image_height/2) - ($text_height/2);
// Add some shadow to the text
//@imagettftext($im, $font_size, 0, 5, 20, $grey, $font, $text);

// Add the text
@imagettftext($im, $font_size, $angle, $x, $y+52, $white, $font, $text);
    return $im;
}

header('Content-Type: image/png');

$img = LoadPNG($value);

imagepng($img);
imagedestroy($img);
?>
