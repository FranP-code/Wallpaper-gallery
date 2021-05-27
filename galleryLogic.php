<?php

require './mySqlConnect.php';

$desdeN = null;
$hastaN = null;

if ($actualPage == 1) {
    $desdeN = 0;
    $hastaN = 6;
} else {
    $hastaN = (6 * $actualPage) - 1;
    $desdeN = $hastaN - 5;
}

$photos = $connection -> query("select * from imagenes limit $desdeN, $hastaN");

$arrayPhotos = $photos -> fetchAll();

$cantPages = ($connection -> query("select * from imagenes")) -> fetchAll();
$cantPages = count($cantPages) / 6;
$cantPages = ceil($cantPages);

?>