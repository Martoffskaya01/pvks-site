<html>
	<head>
		<title>Файлы</title>
	</head>
	<body>
		<form name="form1" method="post">
			<input type="text" name="name" placeholder="Введите Ваше имя" size="50">
			<br><br>
			<input type="text" name="last_name" placeholder="Введите Вашу фамилию" size="50">
			<br><br>
			<input type="text" name="message" placeholder="Введите Ваше сообщение" size="50">
			<br><br>
			<input type="submit" name="go" value="Вывод">
		</form>
		<?php
			$check='message.txt';
			if (file_exists($check)) {
				if (isset($_POST["go"])){
					$name=$_POST["name"];
				};
				
				if (isset($_POST["go"])){
					$last_name=$_POST["last_name"];
				};		

				if (isset($_POST["go"])){
					$message=$_POST["message"];
				};
				if (($name!="")&&($last_name!="")&&($message!="")) {
					$name=$name;
					$last_name=$last_name;
					$message=$message;
					/*$file=file_put_contents("message.txt",$name.$last_name.$message,FILE_APPEND);*/
					$file=file_put_contents("message.txt",$name,FILE_APPEND);
					$file=file_put_contents("message.txt"," ",FILE_APPEND);
					$file=file_put_contents("message.txt",$last_name,FILE_APPEND);
					$file=file_put_contents("message.txt",", ",FILE_APPEND);
					$file=file_put_contents("message.txt",$message,FILE_APPEND);
					echo file_get_contents("message.txt");	
				}
				else echo "Есть пустое поле";
			}
			else echo "Нет файла";
		?>
	</form>