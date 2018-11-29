<html>
	`<head>
		<title>Горшок</title>
	</head>
	<body>
		<?php	
			require_once "AbsPlant.php";
			require_once "Rose.php";
			require_once "Sunflower.php";
			require_once "Amaryllis.php";
			require_once "Lily.php";
			
			$rose = new Rose();
			$sunflower = new Sunflower();
			$amaryllis = new Amaryllis();
			$lily = new Lily();
			
			$rose->setName("Роза");
			$rose->setKol_petals("32");
			
			$sunflower->setName("Подсолнух");
			$sunflower->setKol_seeds("2000");
			
			$amaryllis->setName("Амариллис");
			$amaryllis->setColor_petals("Ярко-красный");
			
			$lily->setName("Лилия");
			$lily->setValue("Невинность и непорочность");
			
			echo "Горшок под названием Фауна <br><br>";
			$rose->conclusion();
			echo "<br><br>";
			$sunflower->conclusion();
			echo "<br><br>";
			$amaryllis->conclusion();
			echo "<br><br>";
			$lily->conclusion();
			
		?>
		
	</body>
</html>