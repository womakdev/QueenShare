<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>QueenShare</title>


  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <link href="assets/css/styles.css" rel="stylesheet" />
  <link rel='stylesheet' href='https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.css'>
  <link rel="stylesheet" href="assets/css/next.css">

</head>
<body>
<style>
body {
  background-image: url('assets/wallpaper.png');
}
</style>
<br>
<center>
  <img src="assets/logo.png">
</center>
<!-- FORMS-->
<br>
<br>
  <div class="custom-file-container" data-upload-id="myUniqueUploadId">
    <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">Supprimer</a> </label>
    <label class="custom-file-container__custom-file" >
      <form method="post" action="core/upload.php" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <br>
        <button type="submit" class="btn btn-outline-light">Suivant</button>
        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="*" multiple aria-label="Choose File">
        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
        <span class="custom-file-container__custom-file__custom-file-control"></span>
    </label>
    <div class="custom-file-container__image-preview"></div>
</div>



<!-- SCRIPT PARTIAL -->
  <script src='https://unpkg.com/file-upload-with-preview@4.0.8/dist/file-upload-with-preview.min.js'></script><script  src="assets/js/next.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/scripts.js"></script>

</body>
</html>
