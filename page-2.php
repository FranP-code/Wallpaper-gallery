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
    <header><a href="./index.php">Galería.com.<span class="ar">ar</span></a></header>
    <div class="sub-header">
        <a>
            Galería
        </a>
        <a href="./upload.html" class="available"> 
            Subir fotos
        </a>
    </div>

    <div class="gallery-container">
        <?php

$actualPage = 2;
        require 'galleryLogic.php';

        $i = 0;

        do {
            $selection = $arrayPhotos[$i]['ruta'];
            $title = $arrayPhotos[$i]['titulo'];

            if (isset($selection) && isset($title)) {
                echo "<div><img class='img' src='$selection'><h2>$title</h2></div>";

             } else {
                echo "<div><img class='img' src='./img/default.jpg'><h2>-X-</h2></div>";
             }

            $i++;
        } while ($i < 6);

        ?>

    </div>
    <ul>
            <?php

$actualPage = 2;
            if ($actualPage == 1) {
                echo '<li class="disabled"><-</li>';
            } else {
                echo '<a href="page-'. $actualPage - 1 . '.php"><li><-</li>';
            }

            $i = 0;

            do {
                $i++;

                if ($i == $actualPage) {
                    echo '<li class="disabled">'. $i .'</li>';
                } else {
                    echo '<a href="page-'. $i . '.php"><li>'. $i .'</li></a>';
                }
            } while ($i < $cantPages);

            if ($actualPage == $cantPages) {
                echo '<li class="disabled">-></li>';
            } else {
                echo '<a href="page-' . $actualPage + 1 . '.php"><li>-></li></a>';
            }

            ?>
    </ul>
</body>
</html>