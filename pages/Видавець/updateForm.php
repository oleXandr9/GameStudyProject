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
                <form action="update.php" method="post">
                        <p>Пошук</p><br>
                        <label>Назва компанії</label><input name="name1" type="text"><br>
                        <p>Дані для вставки</p><br>
                        <label>Назва компанії</label><input name="name2" type="text"><br>
                        <label>К-сть випущених ігор</label><input name="kvi" type="text"><br>
                        <label>Популярність</label><input name="pop" type="text"><br>
                        <label>Країна</label><input name="cou" type="text"><br><br>
                        <button type="submit" class="buttonp">Оновити рядок</button>
                </form>
                <a href="Видавець.php"><button>Назад</button></a>
            </div>
        </div>
        <br>
       

    </body>
</html>