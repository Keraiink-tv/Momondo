<?php
session_start();
session_destroy();
header('Location: /'); // HUSK - grunden til den er sat til / er fordi index er top i .htacess
exit();