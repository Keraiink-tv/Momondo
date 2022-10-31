<?php
$languages_allowed = ['en', 'dk'];
$language = $_GET['language'] ?? 'en';
if( ! in_array($language, $languages_allowed) ){
$language = 'en';
};
$dictionary=[
//INDEX
'en_welcome'=>'Welcome! Find a flexible flight for your next trip.',
'dk_welcome'=>'Velkommen! Find en fleksibel flybillet til din næste rejse.',


//LOGIN
'en_login'=>'Login or create an account',
'dk_login'=>'Log ind eller opret en konto',
'en_login-info'=>'Track prices, organise travel plans and access member-only deals with your momondo account.',
'dk_login-info'=>'Følg priser, organiser rejseplaner, og få adgang til medlemstilbud med din momondo-konto.'

























];
