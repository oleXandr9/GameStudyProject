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
	    		if($result = $mysqli->query('SELECT Назва_студії, Досвід, Назва FROM Розробник INNER JOIN Видавець ON Розробник.Видавець_Назва = Видавець.Назва')) {
	    		 	printf("Дані про видавця: <br><br>");
	    		 	printf("<table><tr><th>Назва студії</th><th>Досвід студії</th><th>Назва видавця</th></tr>");
	    		 	while( $row = $result->fetch_assoc() ){ 
	            	printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['Назва_студії'], $row['Досвід'], $row['Назва']); 
	        	};
	        	printf("</table>");
	        	$result->close();
	        }
	        $mysqli->close();
			?>
			<br><br><br>


			<tr><a href="../../index.html"><button class="buttonp">На головну</button></a></tr><br><br>

		</div>
	</div>

</body>
</html>