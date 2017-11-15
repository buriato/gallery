
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
      <?php include_once 'includes/show-gallery.inc.php'; ?>
    </section>
  </body>
</html>