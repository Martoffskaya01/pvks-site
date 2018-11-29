<!DOCTYPE html>
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
	<form name="form" method="post">
		<input type="text" name="num" placeholder="Введите число" size="30">
		<input type="submit" name="go" value="отправить">
	</form>
	<?php
		$mas=array(1,2,3,4,5,664,5,87,12,45,62,584,654);
			echo "Изначальный массив<br>";
			foreach ($mas as $mas1){
				echo $mas1;
				echo " "; 
			}
		
		if ((isset($_POST['go']))&&(!empty($_POST['num']))){
			echo "<br>Измененный массив<br>";
			$number=$_POST['num'];
			$i=0;
			while($i<sizeof($mas)) {
				$temp=$mas[$i];
				do{
					$num=$temp%10;
					$temp=$temp/10;
					if ($num==5)
					{
						for ($j=(sizeof($mas)+1);$j>$i;$j--) {
							$mas[$j]=$mas[$j-1];
						}
						$mas[$i+1]=$number;
						$i++;
						break;
					}
				} while ($temp!=0);
					$i++;
				}
				for($i=0;$i<sizeof($mas);$i++){
					echo "$mas[$i] ";
				}
		}
	?>
</body>
</html>