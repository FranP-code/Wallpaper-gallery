<?php

require './mySqlConnect.php';

error_reporting(0);

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


for ($i = 1; $i <= $cantPages; $i++) {

    if ($i !== 1  && !file_exists("./pages/page-$i.php")) {
        $template = file('./template.txt');
        //print_r($template);

        $template[25] = '$actualPage = '. $i.';';
        $template[51] = '$actualPage = '. $i.';';

        file_put_contents("./page-$i.php", $template);
    }
}

?>