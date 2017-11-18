<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include_once 'sqlconn.inc.php';

$image_id = $_GET['file_id'];
var_dump($_GET);
$output = '';

$sql       = "SELECT * FROM images WHERE `image_id` = '$image_id'";
$result    = mysqli_query($conn, $sql);
$sqlViewed = "UPDATE images SET `image_viewed`=`image_viewed`+1 WHERE `image_id`=";
if (mysqli_num_rows($result)) {
  $sqlAddViewed = mysqli_query($conn, $sqlViewed . $image_id);
  $row          = mysqli_fetch_assoc($result);
  $imageName    = $row['image_name'];
  $imagePath    = $row['image_path'];
  $imageSize    = $row['image_size'];
  $imageViewed  = $row['image_viewed'] + 1;
  $output .= "
 <div class='info'>" . $imageName . ", size: " . $imageSize . " kB, viewed: " . $imageViewed . " <a class='button' href='http://localhost/dynamic/geek/gallery'>Go back</a></div>
 <img src='" . $imagePath . $imageName . "'>
";
  echo $output;
} else {
  echo " error";
}
