<html>
	<head>
		<title>Форма2</title>
	</head>
	<body>
		<form name="form2" method="post">
			<p><select name="fruits" size="4" mutiple>
				<option disabled>Выберите фрукт</option>
				<option selected value="Яблоко">Яблоко</option>
				<option value="Банан">Банан</option>
				<option value="Арбуз">Арбуз</option>
				<option value="Малина">Малина</option>
			</select></p>
			<p><input type="submit" name="go" value="Вывод"></p>
		</form>
		<?php
			if (isset($_POST["go"])){
			$apple=$_POST["fruits"];
			};
			if ($apple=="Яблоко") echo "Вы любите яблоки";
			if ($apple=="Банан") echo "Вы любите бананы";
			if ($apple=="Арбуз") echo "Вы любите арбузы";
			if ($apple=="Малина") echo "Вы любите малину";
		?>
	</body>
</html>