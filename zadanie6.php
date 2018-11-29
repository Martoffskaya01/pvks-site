<html>
	<head>
		<title>Tестируем PHP</title>
	</head>
	<body>
		<?php
			echo "Шестое задание<br>";
			$mas=array(1,2,3,4,5,6);
			echo "Изначальный массив<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			$mas[2]=13;
			$mas[3]=14;
			$mas[4]=15;
			echo "<br>";
			echo "Изменённый массив<br>";
			foreach ($mas as $mas1){
				echo $mas1 . " ";
				//echo " "; 
			}
		?>
	</body>
</html>