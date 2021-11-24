<?php

use function PHPSTORM_META\type;

require './mySqlConnect.php';

$form = $_POST;
$file = $_FILES['file'];
$type = $_FILES['file']['type'];
//print_r($form);
//print_r($file);

function subirIMG($temp_name_file) {
    $route = './img/' . $_FILES['file']['name'];
    move_uploaded_file($temp_name_file, $route);
    return $route;
}

function enviarABD($title, $route, $description, $author, $conexionConBD) {
    $a = $conexionConBD -> prepare('insert into imagenes (titulo, ruta, descripcion, autor) values (?, ?, ?, ?)');
    $a -> bindParam(1, $title, PDO::PARAM_STR);
    $a -> bindParam(2, $route, PDO::PARAM_STR);
    $a -> bindParam(3, $description, PDO::PARAM_STR);
    $a -> bindParam(4, $author, PDO::PARAM_STR);
    $a -> execute();
}

function error_page () {
    return header('Location: ./pages/error_page.html');
}

function success_page() {
    return header('Location: ./pages/success_page.html');
}

if ($type === 'image/png' || $type === 'image/jpg' || $type === 'image/jpeg' || $type === 'image/webp') {
    $resultado = subirIMG($_FILES['file']['tmp_name']);
    enviarABD($form['title'], $resultado, $form['description'], $form['author'], $connection);
    success_page();
} else {
    error_page();
}

?>