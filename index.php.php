<?php
	$image = ImageCreateFromJpeg("adf.jpg");
	
	$imgw = imagesx($image);
	$imgh = imagesy($image);

	
	$total = $imgw*$imgh;
	for ($x = 0; $x < $imgw; $x++) {
		for ($y = 0; $y < $imgh; $y++) {
			$color = ImageColorsForIndex($image, ImageColorAt($image, $x, $y));
			echo "nilai komponen warna R (Red) pada gambar adalah   ".$color['red']."</br>";
			echo "nilai komponen warna G (Green) pada gambar adalah ".$color['green']."</br>";
			echo "nilai komponen warna B (Blue) pada gambar adalah  ".$color['blue']."</br>";
			
								
		}
	}

?>