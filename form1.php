<html>
	<head>
		<title>Форма1</title>
	</head>
	<body>
		<form name="form1" method="post">
		<input type="text" name="name" placeholder="Введите Ваше имя" size="50">
		<br><br>
		<input type="text" name="last_name" placeholder="Введите Вашу фамилию" size="50">
		<br><br>
		<input type="text" name="patronymic" placeholder="Введите Ваше отчество" size="50">
		<br><br>
		<input type="text" name="age" placeholder="Введите Ваш возраст" size="50">
		<br><br>
		<input type="submit" name="go" value="Вывод">
	</form>
	<?php
		if (isset($_POST["go"])){
			$name1=$_POST["name"];
		};
		
		if (isset($_POST["go"])){
			$last_name1=$_POST["last_name"];
		};		
		if (isset($_POST["go"])){
			$patronymic1=$_POST["patronymic"];
		};
		if (isset($_POST["go"])){
			$age1=$_POST["age"];
		};
		if (($name1!="")&&($last_name1!="")&&($patronymic1!="")&&($age1!=""))
			echo "Здравствуйте, {$last_name1} {$name1} {$patronymic1}. Вам {$age1} лет.";
		else
			echo "Есть пустое поле";
		
	?>
	
	</body>
</html>