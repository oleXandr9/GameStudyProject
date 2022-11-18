  <link rel="stylesheet" href="../../style/style.css">
<div class="mainbox">  
    <div class="content">
        <?php

        $mysqli = new mysqli('localhost', 'root', '', 'mydb'); 
        $mysqli->set_charset("utf8"); 

        if (mysqli_connect_errno()) {
            printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
            exit;
        }

        $pos = $_POST['pos'];
        $ping = $_POST['ping'];


        $sql = "INSERT INTO `сервер`(`Позиція`, `Пінг`) VALUES ('$pos','$ping')";


        if($mysqli->query($sql)){
            echo "Рядок вставлено успішно";
            }
        else
            {
                echo "Error" . $sql . "<br/>" . $mysqli->error;
            }


        $mysqli->close();
        ?>
        <br><br>
        <a href="Сервер.php"><button>Назад</button></a>
    </div>
</div>
