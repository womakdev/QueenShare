

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>QueenShare</title>


  <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
  <link href="../assets/css/styles.css" rel="stylesheet" />
  <link rel='stylesheet' href='https://unpkg.com/file-upload-with-preview@4.0.2/dist/file-upload-with-preview.min.css'>
  <link rel="stylesheet" href="../assets/css/next.css">

</head>
<body>
<style>
body {
  background-image: url('../assets/wallpaper.png');
}
</style>
<br>
<center>
  <img src="../assets/logo.png">
  <br><br>
  <br><br>
  <h1>LIEN :</h1>
</center>
<div class="card">
  <div class="card-body">
<?php

$url = "https://localhost/test";

$image = $_FILES["image"];

if (!is_dir('../uploads')) {

    mkdir('../uploads', 0777, true);

}

$extension = pathinfo($image["name"], PATHINFO_EXTENSION);


$fileName = time() . ".$extension";

if (!move_uploaded_file($image["tmp_name"], "../uploads/" . $fileName)) {

    die('Error upload file');

}

echo $url."/uploads/".$fileName;
?>
</div>
</div>



<!-- SCRIPT PARTIAL -->
  <script src='https://unpkg.com/file-upload-with-preview@4.0.8/dist/file-upload-with-preview.min.js'></script><script  src="../assets/js/next.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/scripts.js"></script>

</body>
</html>

