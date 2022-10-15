<?php
require_once __DIR__.'/_x.php';

_validate_email();
_validate_user_psw();

$user = [
    'user_psw' => $_POST['user_psw'],
    'user_email' => $_POST['email']
];
_respond($user);
exit(); 
  
  
 