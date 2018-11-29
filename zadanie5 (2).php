<html>
	<head>
		<title>Tестируем PHP</title>
	</head>
	<body>
		<?php
			echo "Пятое задание<br>";
			$mas=array(-96,45,1,8,6,5,4,7,-47,6,5,8);
			echo "Изначальный массив<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			$first_otr=0;
			$second_otr=0;
			$index_first_otr=0;
			$index_second_otr=0;
			for($i=0;$i<sizeof($mas);$i++){
				if ($mas[$i]<0) {
					$first_otr=$mas[$i];
					$index_first_otr=$i;
					
				}
			if ($first_otr<0) break;
			}
			for($i=$index_first_otr+1;$i<sizeof($mas);$i++){
				if ($mas[$i]<0) {
					$second_otr=$mas[$i];
					$index_second_otr=$i;
				}
			if ($second_otr<0) break;
			}
			if (($first_otr==0)&&($second_otr==0)) echo "<br>Отрицательных чисел нет!<br>";
			else
			if ($second_otr==0) echo "<br>Нет второго отрицательного числа!<br>";
			else {
				echo "<br>First = {$first_otr}";
				echo "<br>Second = {$second_otr}<br>";
				$mas2=array();
				echo "Вывод чисел между первым и вторым отрицательными числами<br>";
				for($i=$index_first_otr+1;$i<$index_second_otr;$i++){
					echo "{$mas[$i]}  ";
				}
			}
		?>
		<form name="form1" method="post">
		<input type="text" name="num" placeholder="элементы" size="50">
		<input type="submit" name="go" value="ОК">
		<?php
			if ((isset($_POST['go']))&&(!empty($_POST['num']))){
			$mas3=explode(",", $_POST['num']);
			};
			foreach ($mas3 as $value) {
				echo "$value ";
			};
			/*for($i=$index_first_otr+1;$i<sizeof($mas3);$i++){
				for($j=$i;$j<sizeof($mas);$j++)
				$mas[$j]=$mas[$j+1];
			}*/
				
			echo "<br>Mассив<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
			
		?>
	</form>
	</body>
</html>
			
			
			