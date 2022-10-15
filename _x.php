<?php

define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

// ##############################
function _validate_email(){
  $error_message = 'email missing or invalid';
  if( ! isset($_POST['email']) ){ _respond($error_message, 400); }
  $_POST['email'] = trim($_POST['email']);
  if( ! preg_match(_REGEX_EMAIL, $_POST['email']) ){ _respond($error_message, 400); }
  return $_POST['email'];
}

function _validate_user_psw(){
  $error_message = 'password missing or invalid';
  if( ! isset($_POST['user_psw']) ){ _respond($error_message, 400); }
  $_POST['user_psw'] = trim($_POST['user_psw']);
  return $_POST['user_psw'];
}

//Ved success
function _respond( $message = '', $http_response_code = 200){
    header('Content-Type: application/json');
    http_response_code($http_response_code);
    $response = is_array($message) ? $message : ['info'=>$message];
    exit();

}

// ##############################
function _validate_item_image(){
  if($_FILES['item_image']['error'] === UPLOAD_ERR_INI_SIZE) {
    _respond('item_image too large', 400);
  }
  
  $item_image_temp_name = $_FILES["item_image"]["tmp_name"]; // C:\xampp\tmp\php791.tmp || C:\xampp\tmp\php5245.tmp
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["img"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // just reads the extension of the file
  $image_mime = mime_content_type($_FILES["img"]["tmp_name"]); // reads the mime inside the file
  $accepted_image_formats = ['image/png', 'image/jpeg'];
  if( ! in_array($image_mime, $accepted_image_formats) ){
    http_response_code(400);
    echo 'image not allowed';
    exit();
  }
  $random_image_name = bin2hex(random_bytes(16));
  switch($image_mime){
    case 'image/png':
      $random_image_name .= '.png';
    break;
    case 'image/jpeg':
      $random_image_name .= '.jpeg';
    break;
  }

  if(move_uploaded_file($_FILES["img"]["tmp_name"], 'images/2.png')){
    echo 'ok';
    exit();
  }  
}