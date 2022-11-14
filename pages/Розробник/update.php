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
        $dsd = $_POST['dsd'];
        $cou = $_POST['cou'];

        $sql = "UPDATE `розробник` SET `Назва студії`='$name2',`Досвід`='$dsd',`Країна`='$cou' WHERE `Назва студії` = '$name1'";


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
        <a href="Розробник.php"><button>Назад</button></a>
    </div>
</div>
