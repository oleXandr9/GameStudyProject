<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../style/style.css">
	<title>Видавець</title>
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
	    		if($result = $mysqli->query('SELECT * FROM Видавець')) {
	    		 	printf("Дані про видавця: <br><br>");
	    		 	printf("<table><tr><th>Назва</th><th>К-сть випущених ігор</th><th>Популярність</th><th>Країна</th></tr>");
	    		 	while( $row = $result->fetch_assoc() ){ 
	            	printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['Назва'], $row['К-сть випущених ігор'], $row['Популярність'], $row['Країна']); 
	        	};
	        	printf("</table>");
	        	$result->close();
	        }
	        $mysqli->close();
			?>
			<br><br><br>

			<tr><a href="insertForm.php"><button>Додати рядок</button></a></tr><br><br>
			<tr><a href="updateForm.php"><button>Змінити рядок</button></a></tr><br><br>
			<tr><a href="deleteForm.php"><button>Видалити рядок</button></a></tr><br><br>
			<tr><a href="../../index.html"><button>На головну</button></a></tr><br><br>

		</div>
	</div>

</body>
</html>