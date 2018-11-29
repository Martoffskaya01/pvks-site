<html>
	<head>
		<title>Tестируем PHP</title>
	</head>
	<body>
		<?php
			echo "Первое задание<br>";
		?>
	<form name="form1" method="post">
		<input type="text" name="num" placeholder="10 элементов через запятую" size="100">
		<input type="submit" name="go" value="отправить">
	</form>
	<?php 
		$mas=array(8,87,3,4,1,6,7,8,9,10);
		echo "Массив заданный в программе: ";
		foreach ($mas as $num) {
			echo "{$num} ";
		};
		echo "<br>"; 
		echo "Массив заданный рандомом: ";
		for ($i=0; $i <10 ; $i++) { 
			
			$mas2[$i]= rand (0 ,10);
			echo "$mas2[$i] ";
		}
		echo "<br>";
		echo "Массив заданный в форме: ";
		if ((isset($_POST['go']))&&(!empty($_POST['num']))){
			$mas3=explode(",", $_POST['num']);
					foreach ($mas3 as $value) {
			echo "$value ";
		};
		};
		$max=-999;
		$ind_max=0;
		$min=999;
		$ind_min=0;
		$num=array();
		$num=$mas;
		for($i=0;$i<10;$i++){
			if ($num[$i]>$max){ 
				$max=$num[$i];
				$ind_max=$i;
			}
			if ($num[$i]<$min){ 
				$min=$num[$i];
				$ind_min=$i;	
			}
			
		}
		
		echo "<br>";
		echo "Maksimal {$max},index {$ind_max}<br>";
		echo "Minimal {$min},index {$ind_min}<br>";
		$temp=$num[$ind_max];
		$num[$ind_max]=$num[$ind_min];
		$num[$ind_min]=$temp;
		echo "Массив с заменой максимального и минимального ";
		foreach ($num as $number) {
			echo "{$number} ";
		}
		echo "<br>";
		$numb=array();
		$numb=$mas;
		for($i=0;$i<10;$i++){
			if ($numb[$i]<$min) $min=$numb[$i];
		}
		for($i=0;$i<10;$i++){
			if ($numb[$i]==$min) {
				for($j=$i;$j<10;$j++)
				$numb[$j]=$numb[$j+1];
			}
		}
		echo "Массив с удалением минимального ";
		foreach ($numb as $number) {
			echo "{$number} ";
		}
		echo "<br>";
		
	?>
	</body>
</html>