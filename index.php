<?ini_set('display_errors',1);?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gallery</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<h1>Photo Gallery</h1>
<section class="upload">
  <form action="includes/uploadGallery.inc.php" method="post" enctype="multipart/form-data">
    <input type="file" class="file" name="fileToUpload" accept=".jpeg,.png,.jpg,.gif">
    <input type="submit" value="Upload Image" name="submit">
  </form>
</section>
<section class="gallery">
  <div class="gallery-item">
    <a href="img/gallery/1.jpg" class="image-container" target="_blank"><img src="img/gallery/thumbs/1.jpg" alt="Image 1" class="image"></a>
    <div class="desc"></div>
  </div>
  <div class="gallery-item">
    <a href="img/gallery/2.jpg" class="image-container" target="_blank"><img src="img/gallery/thumbs/2.jpg" alt="Image 2" class="image"></a>
    <div class="desc"></div>
  </div>
  <div class="gallery-item">
    <a href="img/gallery/3.jpg" class="image-container" target="_blank"><img src="img/gallery/thumbs/3.jpg" alt="Image 3" class="image"></a>
    <div class="desc"></div>
  </div>
  <div class="gallery-item">
    <a href="img/gallery/4.jpg" class="image-container" target="_blank"><img src="img/gallery/thumbs/4.jpg" alt="Image 4" class="image"></a>
    <div class="desc"></div>
  </div>
  <div class="gallery-item">
    <a href="img/gallery/5.jpg" class="image-container" target="_blank"><img src="img/gallery/thumbs/5.jpg" alt="Image 5" class="image"></a>
    <div class="desc"></div>
  </div>
  <div class="gallery-item">
    <a href="img/gallery/6.jpg" class="image-container" target="_blank"><img src="img/gallery/thumbs/6.jpg" alt="Image 6" class="image"></a>
    <div class="desc"></div>
  </div>
  <div class="gallery-item">
    <a href="img/gallery/7.jpg" class="image-container" target="_blank"><img src="img/gallery/thumbs/7.jpg" alt="Image 7" class="image"></a>
    <div class="desc"></div>
  </div>
</section>
</body>
</html>