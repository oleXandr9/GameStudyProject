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

        $name1 = $_POST['name1'];

        $name2 = $_POST['name2'];
        $kvi = $_POST['kvi'];
        $pop = $_POST['pop'];
        $cou = $_POST['cou'];

        $sql = "UPDATE `видавець` SET `Назва`='$name2',`К-сть випущених ігор`='$kvi',`Популярність`='$pop',`Країна`='$cou' WHERE `Назва` = '$name1'";


        if($mysqli->query($sql)){
            echo "Рядок оновлено успішно";
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
