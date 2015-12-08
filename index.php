<?php
	//inisiasi citra masukan
	$image = ImageCreateFromJpeg("adf.jpg");
	//get value high dan width dari citra masukan
	$imgw = imagesx($image);
	$imgh = imagesy($image);
	echo "Citra masukkan memiliki dimensi ".$imgw." x ".$imgh;
	echo "</br> ";
	for ($x = 0; $x < $imgw; $x++) {
		for ($y = 0; $y < $imgh; $y++) {
			$color = ImageColorsForIndex($image, ImageColorAt($image, $x, $y));
			echo "Nilai komponen warna R (Red) pada citra masukkan dengan index ( ".$x.",".$y." ) adalah   ".$color['red']."</br>";
			echo "Nilai komponen warna G (Green) pada citra masukkan adalah index ( ".$x.",".$y." ) adalah   ".$color['green']."</br>";
			echo "Nilai komponen warna B (Blue) pada citra masukkan adalah  index ( ".$x.",".$y." ) adalah   ".$color['blue']."</br>";
			
								
		}
	}
									/*		   ______________________________________
									  ________|										 |_______
									  \       |       © Copyleft Diijey Mixdad      |      /
									   \      |                                      |     /
									   /      |______________________________________|     \
									  /__________)                                (_________\

									*/
?>