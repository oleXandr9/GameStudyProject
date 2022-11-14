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


        $sql = "DELETE FROM `сервер` WHERE `Позиція` = '$pos'";


        if($mysqli->query($sql)){
            echo "Рядок видалено успішно";
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
