<html>
	<head>
		<title>Tестируем PHP</title>
	</head>
	<body>
		<?php
			$number1=7;
			$number2=87;
			$addition=$number1+$number2;
			echo "Сложение: {$number1} + {$number2} = {$addition}<br>";
			$subtraction=$number1-$number2;
			echo "Вычитание: {$number1} - {$number2} = {$subtraction}<br>";
			$multiplication=$number1*$number2;
			echo "Умножение: {$number1} * {$number2} = {$multiplication}<br>";
			if ($number2!=0) {
				$division=$number1/$number2;
				echo "Деление: {$number1} / {$number2} = {$division}<br>";
			}
			else echo "Деление: Деление невозможно. Делитель меньше нуля<br>";
			echo "Byka";
			
		?>
</html>