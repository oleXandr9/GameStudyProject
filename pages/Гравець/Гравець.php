<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../style/style.css">
	<title>Гравець</title>
</head>
<body>
	<div class="mainbox">
		<div class="content">
			<?php
				$mysqli = new mysqli('localhost', 'root', '', 'mydb');
				$mysqli->set_charset("utf8");
				if (mysqli_connect_errno()) {
	   			 printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
	    			exit;
	    		}
	    		if($result = $mysqli->query('SELECT * FROM Гравець')) {
	    		 	printf("Гравці, які є в грі: <br><br>");
	    		 	printf("<table><tr><th>ID гравця</th><th>Логін</th><th>Пароль</th><th>Адреса електронної пошти</th><th>Країна</th></tr>");
	    		 	while( $row = $result->fetch_assoc() ){ 
	            	printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id Гравця'], $row['Логін'], $row['Пароль'], $row['Адреса електронної пошти'], $row['Країна']); 
	        	};
	        	printf("</table>");
	       	 	/*Звільняємо пам'ять*/
	        	$result->close();
	        }
	        	$mysqli->close();
			?>
			<br><br><br>

			<tr><a href="insertForm.php"><button class="buttonp">Додати рядок</button></a></tr><br><br>
			<tr><a href="updateForm.php"><button class="buttonp">Змінити рядок</button></a></tr><br><br>
			<tr><a href="deleteForm.php"><button class="buttonp">Видалити рядок</button></a></tr><br><br>
			<tr><a href="../../index.html"><button class="buttonp">На головну</button></a></tr><br><br>

		</div>
	</div>
</body>
</html>