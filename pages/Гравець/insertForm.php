<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>
    <body>
        <div class="mainbox">
            <div class="content">
                <form action="insert.php" method="post">
                        <label>Логін</label><input name="log" type="text"><br>
                        <label>Пароль</label><input name="ps" type="text"><br>
                        <label>Email</label><input name="email" type="text"><br>
                        <label>Країна</label><input name="cou" type="text"><br>
                        <label>Гра</label><input name="game" type="text"><br><br>
                        <button type="submit" class="buttonp">Вставити рядок</button>
                </form>
                <a href="Гравець.php"><button>Назад</button></a>
            </div>
        </div>
        <br>
        

    </body>
</html>