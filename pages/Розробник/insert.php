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
        $dsd = $_POST['dsd'];
        $cou = $_POST['cou'];

        $sql = "INSERT INTO `розробник`(`Назва студії`, `Досвід`, `Країна`) VALUES ('$name','$dsd','$cou')";


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
        <a href="Розробник.php"><button>Назад</button></a>
    </div>
</div>
