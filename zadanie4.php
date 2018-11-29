<html>
	<head>
		<title>Tестируем PHP</title>
	</head>
	<body>
		<?php
			echo "Четвёртое задание<br>";
			$people=array("Aleksandr","Georgy","aleksandr","Oleg","stanislav");
			echo "Изначальный массив<br>";
			foreach ($people as $human){
				echo $human;
				echo " "; 
			}
			echo "<br>";
			/*$s2=strtolower($people);
			$people=$s2;
			sort($people);*/
			natcasesort($people);
			echo "Изменённый массив<br>";
			foreach ($people as $human){
				echo $human;
				echo " "; 
			}
			
		?>
	</body>
</html>