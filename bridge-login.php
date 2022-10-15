<?php
// Man skal skrive den rigtige email for den kan sende en videre til admin siden
$correct_email = 'a@a.com';
$correct_password = 'password';

// Denne validere den
if( ! filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ){
  header('Location: login');
  exit();
}
// Checker hvis ens bruger passer med den rigtige email
if( $_POST['email']  != $correct_email ){
// Header tilbage til den lokation den startede med, hvis emailen ikke matcher til den rigtige
  header('Location: login'); 
  exit();
}

if( $correct_password != $_POST['password']  ){
  header('Location: login');
  exit();
}



// Success
session_start();
$_SESSION['user_name'] = 'Monica';
header('Location: admin');