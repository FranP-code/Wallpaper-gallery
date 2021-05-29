<?php

use function PHPSTORM_META\type;

require './mySqlConnect.php';

function subirIMG($temp_name_file) {
    $route = 'img/' . $_FILES['file']['name'];
    move_uploaded_file($temp_name_file, $route);
}

$type = $_FILES['file']['type'];

if ($type === 'image/png' || $type === 'image/jpg' || $type === 'image/jpeg' || $type === 'image/webp') {
    subirIMG($_FILES['file']['tmp_name']);
}


?>