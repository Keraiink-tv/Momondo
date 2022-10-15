<?php
  $_title = 'UPLOAD';
  require_once __DIR__.'/comp_header.php';
  $data = file_get_contents('dictionary.json');
  $data = json_decode($data, true); 
  ?>

<form id="upload_form" action="upload.php" method="post" enctype="multipart/form-data">
  <h1>Upload dit bedste ferie billede</h1>
  vælg en fil:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>