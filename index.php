<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
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
    <div class="wrapper">
      <div class="main-content">
        <h1>Photo Gallery</h1>
        <section class="upload">
          <form action="includes/upload-gallery.inc.php" method="post" enctype="multipart/form-data" class="form__upload">
            <input type="file" class="input-file" name="fileToUpload" accept=".jpeg,.png,.jpg,.gif" id="file">
            <label class="button" for="file">Seleziona imagine...</label>
            <input type="submit" class="button" value="Upload Image" name="submit">
          </form>
          <form action="includes/show-image.inc.php" method="get" enctype="multipart/form-data" class="form__view">
            <input type="number" class="file_id" name="file_id">
            <input type="submit" class="button" value="Show Image" name="submit">
          </form>
        </section>
        <section class="gallery">
          <?php include_once 'includes/show-gallery.inc.php';?>
        </section>
      </div>

      <footer class="main-footer">Copyright &copy; <?php echo date("Y"); ?></footer>
    </div>
  </body>
</html>