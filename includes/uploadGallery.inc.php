<?php
ini_set('display_errors',1);
$target_dir = "../img/gallery/";
$target_thumbs_dir = "../img/gallery/thumbs/";
$fileName = $_FILES['fileToUpload']['name'];
$dimW = 450;
$dimH = 300;
$target_file = $target_dir.basename($fileName);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$target_thumb = $target_thumbs_dir.basename($fileName);
$fileTempName = $_FILES['fileToUpload']['tmp_name'];
$size = getimagesize($fileTempName);
$ratio = $size[0]/$size[1];
$uploadOk = 1;

// calculate ratio of thumbnail
if ($ratio>1) {
	$width = $dimW;
	$height = $dimW/$ratio;
}
else {
	$width = $dimH*$ratio;
	$height = $dimH;
}

//

if (isset($_POST['submit'])){
	//v	ar_dump($_FILES);
	$check = $size;
	if($check !== false){
		echo "File is an image - " .$check['mime']. ".";
		$uploadOk = 1;
	}
	else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
	
	// 	check if file exists
	
	if(file_exists($target_file)){
		echo "Sorry, file already exists.";
		$uploadOk=0;
	}
	
	// 	Check file size
	
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	
	// 	Allow certain file formats
	
	if ($imageFileType != 'jpg' && $imageFileType != "png" && $imageFileType!="jpeg" && $imageFileType!='gif'){
		echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
	}
	
	// 	check if uploadOk
	
	if($uploadOk ==0){
		echo "Sorry, your file was not uploaded.";
	}
	else {
		// 		create thumb
		
		$src = imagecreatefromstring(file_get_contents($fileTempName));
		$dst = imagecreatetruecolor($width, $height);
		imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
		imagedestroy($src);
		imagejpeg($dst,$target_thumb);
		imagedestroy($dst);
		if(move_uploaded_file($fileTempName, $target_file)){
			
			echo "The file ".basename($_FILES['fileToUpload']['name'])." has been uploaded.";
		}
		else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	
}
