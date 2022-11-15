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

        $pos1 = $_POST['pos1'];

        $pos2 = $_POST['pos2'];
        $ping = $_POST['ping'];

        $sql = "UPDATE `сервер` SET `Позиція`='$pos2',`Пінг`='$ping' WHERE `Позиція` = '$pos1'";


        if($mysqli->query($sql)){
            echo "Рядок оновлено успішно";
            }
        else
            {
                echo "Error" . $sql . "<br/>" . $mysqli->error;
            }


        $mysqli->close();
        ?>
        <br>
        <a href="Сервер.php"><button>Назад</button></a>
    </div>
</div>
