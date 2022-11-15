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
                        <label>Назва гри</label><input name="name" type="text"><br>
                        <label>К-сть завантажень</label><input name="kz" type="text"><br>
                        <label>Графіка</label><input name="gr" type="text"><br>
                        <label>Ціна</label><input name="pr" type="text"><br>
                        <button type="submit" class="buttonp">Вставити рядок</button>
                </form>
                <a href="Гра.php"><button>Назад</button></a>
            </div>
        </div>
        <br>
        

    </body>
</html>