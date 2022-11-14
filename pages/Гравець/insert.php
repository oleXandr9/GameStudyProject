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

        $log = $_POST['log'];
        $ps = $_POST['ps'];
        $email = $_POST['email'];
        $cou = $_POST['cou'];

        $sql = "INSERT INTO `гравець`(`Логін`, `Пароль`, `Адреса електронної пошти`, `Країна`) VALUES ('$log','$ps','$email','$cou')";


        if($mysqli->query($sql)){
            echo "Рядок вставлено успішно";
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
