<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <img src="logo.svg" alt="logo">
            <h2>Лабораторная работа №1</h2>
        </div>
    </header>
    <main>
        <div class="block">
            <?php
                $img = array("img/1.avif", "img/2.avif", "img/3.avif", "img/4.avif");
                for ($i = 0; $i < 4; $i++) {
                    echo "<img src=\"$img[$i]\" width="100">"
                }
            ?>
        </div>
    </main>
    <footer>
        <p>Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг.</p>
    </footer>
</body>
</html>