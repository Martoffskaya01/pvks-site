<html>
<head>
	<title>Продукт</title>
</head>
<body>
	<?php
		require_once"product.php";
		require_once"meat.php";
		require_once"banana.php";

		$meat=new Meat("Мясо",215,100500);
		echo "{$meat->getName()}<br>
		Стоимость: {$meat->getPrice()} рублей<br>
		Bес: {$meat->getWeight()} г<br>";
	?>
	<br>
	<?php
		$banana=new Banana("Банан",215,"5");
		echo "{$banana->getName()}<br>
		Cтоимость: {$banana->getPrice()} рублей<br>
		Количество в связке: {$banana->getKol()}";
	?>
</body>
</html>