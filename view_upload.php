<?php
  $_title = 'UPLOAD';
  require_once __DIR__.'/dictionary.php';
  require_once __DIR__.'/comp_header.php';
  $data = file_get_contents('dictionary.json');
  $data = json_decode($data, true); 
  ?>

<form id="upload_form" action="upload.php" method="post" enctype="multipart/form-data">
  <h1><?= $dictionary[$language.'_upload'] ?></h1>
  <?= $dictionary[$language.'_choice-file'] ?>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="<?=$dictionary[$language.'_upload-pic']?>" name="submit">
</form>