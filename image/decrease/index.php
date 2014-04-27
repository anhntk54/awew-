<<<<<<< HEAD
<?php 
	function compress($source, $destination, $quality) {

		$info = getimagesize($source);
		var_dump($info,filesize($source));
		// if ($info['mime'] == 'image/jpeg') 
		// 	$image = imagecreatefromjpeg($source);

		// elseif ($info['mime'] == 'image/gif') 
		// 	$image = imagecreatefromgif($source);

		// elseif ($info['mime'] == 'image/png') 
		// 	$image = imagecreatefrompng($source);

		// imagejpeg($image, $destination, $quality);

		// return $destination;
	}

	$source_img = 'image.jpg';
	$destination_img = 'destination .jpg';

	$d = compress($source_img, $destination_img, 50);
	// echo phpinfo();
=======
<?php 
	function compress($source, $destination, $quality) {

		$info = getimagesize($source);
		var_dump($info,filesize($source));
		// if ($info['mime'] == 'image/jpeg') 
		// 	$image = imagecreatefromjpeg($source);

		// elseif ($info['mime'] == 'image/gif') 
		// 	$image = imagecreatefromgif($source);

		// elseif ($info['mime'] == 'image/png') 
		// 	$image = imagecreatefrompng($source);

		// imagejpeg($image, $destination, $quality);

		// return $destination;
	}

	$source_img = 'image.jpg';
	$destination_img = 'destination .jpg';

	$d = compress($source_img, $destination_img, 50);
	// echo phpinfo();
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
 ?>