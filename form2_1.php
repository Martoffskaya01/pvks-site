<html>
	<head>
		<title>Форма2</title>
	</head>
	<body>
		<form name="form2" method="post">	
			<p><input type="radio" name="fruits" value="яблоки">Яблоко</p>
			<p><input type="radio" name="fruits" value="бананы">Банан</p>
			<p><input type="radio" name="fruits" value="арбузы">Арбуз</p>
			<p><input type="radio" name="fruits" value="малину">Малина</p>
			<p><input type="submit" name="go" value="Вывод"></p>
		</form>
		<?php
			if (isset($_POST["go"])){
			$apple=$_POST["fruits"];
			
			echo "Вы любите {$apple}";
			};

				?>
	</body>
</html>