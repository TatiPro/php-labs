<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Lab_2</title>
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <img src="img/logo.svg" alt="logo">
            <h1>Лабораторная работа №2</h1>
        </div>
    </header>
    <main class="function">
        <textarea class="function_text" cols="50" rows="21">
            <?php
                print_r(get_headers('https://www.php.net/releases/8.2/en.php')) 
            ?>
        </textarea>
    </main>
    <footer class="footer">
        <div class="wrapper">
            <p>Собрать сайт из двух страниц.</p>
        </div>
    </footer>
</body>

</html>