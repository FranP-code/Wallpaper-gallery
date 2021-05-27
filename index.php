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

        $actualPage = 1;

        require 'galleryLogic.php';

        $i = 0;

        do {
            $selection = $arrayPhotos[$i * $actualPage]['ruta'];
            $title = $arrayPhotos[$i * $actualPage]['titulo'];

            echo "<div><img class='img' src='$selection'><h2>$title</h2></div>";
            $i++;

        } while ($i < 6);

        ?>
    </div>
    <ul>
            <?php

            $actualPage = 1;


            require 'galleryLogic.php';

            if ($actualPage == 1) {
                echo '<li class="disabled"><-</li>';
            } else {
                echo '<li><-</li>';
            }

            $i = 0;

            do {
                $i++;

                if ($i == $actualPage) {
                    echo '<li class="disabled">'. $i .'</li>';
                } else {
                    echo '<li>'. $i .'</li>';
                }
            } while ($i < $cantPages);

            ?>
        <li>-></li>
    </ul>
</body>
</html>