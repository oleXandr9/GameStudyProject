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

        $name = $_POST['name'];
        $kvi = $_POST['kvi'];
        $pop = $_POST['pop'];
        $cou = $_POST['cou'];

        $sql = "INSERT INTO `видавець`(`Назва`, `К-сть випущених ігор`, `Популярність`, `Країна`) VALUES ('$name','$kvi','$pop','$cou')";


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
        <a href="Видавець.php"><button>Назад</button></a>
    </div>
</div>
