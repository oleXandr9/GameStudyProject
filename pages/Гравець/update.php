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

        $id = $_POST['id'];

        $log = $_POST['log'];
        $ps = $_POST['ps'];
        $email = $_POST['email'];
        $cou = $_POST['cou'];

        $sql = "UPDATE `гравець` SET `Логін`='$log',`Пароль`='$ps',`Адреса електронної пошти`='$email',`Країна`='$cou' WHERE `id Гравця` = '$id'";


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
        <a href="Гравець.php"><button>Назад</button></a>
    </div>
</div>
