<html>
	<head>
		<title>Tестируем PHP</title>
	</head>
	<body>
		<?php
			echo "Второе задание<br>";
		?>
		<form name="form" method="post">
		<input type="text" name="num" placeholder="Введите число" size="30">
		<input type="submit" name="go" value="OK">
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