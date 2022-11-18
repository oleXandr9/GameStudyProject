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
        $kz = $_POST['kz'];
        $gr = $_POST['gr'];
        $pr = $_POST['pr'];

        $sql = "INSERT INTO `гра`(`Назва`, `Ксть_завантажень`, `Графіка`, `Ціна`) VALUES ('$name','$kz','$gr','$pr')";


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
        <a href="Гра.php"><button>Назад</button></a>
    </div>
</div>
