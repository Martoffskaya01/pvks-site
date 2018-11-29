<html>
	<head>
		<title>Форма3</title>
	</head>
	<body>
		<form name="form1" method="post">
		<input type="text" name="name" placeholder="Введите Ваше имя" size="50">
		<br><br>
		<input type="text" name="last_name" placeholder="Введите Вашу фамилию" size="50">
		<br><br>
		<input type="text" name="patronymic" placeholder="Введите Ваше отчество" size="50">
		<br><br>
		<input type="text" name="age" placeholder="Введите год Вашего рождения" size="50">
		<br><br>
		<input type="submit" name="go" value="Вывод">
	</form>
	<?php
		if (isset($_POST["go"])){
			$name=$_POST["name"];
		};
		
		if (isset($_POST["go"])){
			$last_name=$_POST["last_name"];
		};		
		if (isset($_POST["go"])){
			$patronymic=$_POST["patronymic"];
		};
		if (isset($_POST["go"])){
			$age=$_POST["age"];
		};
		if (($name!="")&&($last_name!="")&&($patronymic!="")&&($age!="")) {
			$current_year=date('Y');
			$age1=$current_year-$age;
			echo "Здравствуйте, {$last_name} {$name} {$patronymic}. Вам {$age1} лет.";
		}
		else
			echo "Есть пустое поле";
		
	?>
	
	</body>
</html>