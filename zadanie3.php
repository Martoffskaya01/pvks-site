<html>
	<head>
		<title>Tестируем PHP</title>
	</head>
	<body>
		<?php
			echo "Третье задание<br>";
			$mas=array(1,2,3,4,5,6,7,8,9,10);
			echo "Изначальный массив<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			array_unshift($mas,13,33,666);
			array_push($mas,333,999,6666);
			echo "<br>Изменённый массив после добавления элементов<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			array_shift($mas); /*Удаление 3-х первых элементов*/
			array_shift($mas);
			array_shift($mas);
			array_pop($mas);/*Удаление 3-х последних элементов*/
			array_pop($mas);
			array_pop($mas);
			echo "<br>Изменённый массив после удаления элементов<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			echo "<br>";
			$mas=array(1,2,3,4,4,4,5,6,7,8,9,9,10,11,11,12,45,45);
			echo "<br>Изначальный массив<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			$result=array_unique($mas);
			echo "<br>Изменённый массив различных элементов<br>";
			foreach ($result as $mas1){
				echo $mas1;
				echo " "; 
			}
			echo "<br>";
			$mas=array(1,2,3,4,5,6,7,8,9,10);
			echo "<br>Изначальный массив<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			$result=array_reverse($mas);
			echo "<br>Реверс массива<br>";
			foreach ($result as $mas1){
				echo $mas1;
				echo " "; 
			}
		?>
	</body>
</html>