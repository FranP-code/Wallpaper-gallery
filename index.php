<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 
</head>
<body>
    <header><a href="./index.php">Galería.com.ar</a></header>
    <div class="sub-header">
        <a>
            Galería
        </a>
        <a href="./upload.html">
            Subir fotos
        </a>
    </div>

    <div class="gallery-container">
        <?php

        $i = 0;

        do {
            echo '<img class="img" src="./img/img-test.jpg">';
            $i++;
        } while ($i < 6);

        ?>
    </div>
</body>
</html>