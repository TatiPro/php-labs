<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_2</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <img src="img/logo.svg" alt="logo">
            <h2>Лабораторная работа №2</h2>
        </div>
    </header>
    <main>
        <div class="wrapper">
            <form action="https://httpbin.org/post" method="POST">
                <fieldset>
                    <legend>Form</legend>
                    <label for="name">Имя пользователя</label>
                    <input type="text" id="name" name="name" placeholder="Кретинина Татьяна">
                    <label for="email">Электронная почта</label>
                    <input type="text" id="email" name="email" placeholder="primer2211@gmail.com">
                    <label for="appeal">Тип обращения</label>
                    <select id="appeal" name="type">
                        <option value="complaint">Жалоба</option>
                        <option value="suggestion">Предложение</option>
                        <option value="gratitude">Благодарность</option>
                    </select>
                    <label for="sms">Вариант ответа:</label>
                    <div class="form__checkbox">
                        <label for="e-mail"></label>
                        <input type="checkbox" name="Reply by SMS" id="sms" checked><span>sms</span>
                        <input type="checkbox" name="Reply by e-mail" id="e-mail"><span>e-mail</span>
                    </div>
                    <button class="btn" type="submit">Отправить</button>
                </fieldset>
            </form>
        </div>
        <a class="btn nextBtn" href="./secondPage.php">Страница 2</a>
    </main>
    <footer class="footer">
        <div class="wrapper">
            <p>Собрать сайт из двух страниц.</p>
        </div>
    </footer>
</body>
</html>