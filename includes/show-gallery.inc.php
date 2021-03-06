<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include_once 'sqlconn.inc.php';
$images = [];
$sql    = "SELECT * FROM images";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $images[] = $row;
}

//var_dump($images);

foreach ($images as $image) {
  //var_dump($image);
  echo '<div class="gallery-item">
        <a href="includes/show-image.inc.php?file_id=' . $image['image_id'] . '" class="image-container" target="_blank">
        <img src="' . str_replace('../', '', $image['thumb_path']) . $image['image_name'] . '" class="image">
        </a>
        <div class="desc"><strong>' . $image['image_name'] . '</strong> <em>' . $image['image_size'] . 'kB ' . $image['image_upload_time'] . '</em></div>
      </div>';
}
