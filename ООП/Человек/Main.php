<html>
	<head>
		<title>Человек</title>
	</head>
	<body>
	<?php
		require_once ("Human.php");
		require_once ("Aleksandr.php");
		require_once ("Kirill.php");
		require_once ("Nikita.php");
		require_once ("Ivan.php");
		require_once ("trait.php");
		
		$aleksandr=new Aleksandr();
		$kirill=new Kirill();
		$nikita=new Nikita();
		$ivan=new Ivan();
		
		
		$aleksandr->setNumber_score("123 456 789 456");
		$balancea=15000;
		$aleksandr->setBalance($balancea);
		echo "Александр<br>";
		$aleksandr->infa();
		$aleksandr->purchase();
		
		?>
		<br><br><br>
		<?php
		echo "Кирилл<br>";
		$kirill->setNumber_score("987 654 321 123");
		$balancek=8000;
		$kirill->setBalance($balancek);
		$kirill->infa();
		$kirill->Cancellatio();
		
		?>
		<br><br><br>
		<?php
		echo "Никита<br>";
		$nikita->setNumber_score("456 123 789 369");
		$balancen=1500;
		$nikita->setBalance($balancen);
		$nikita->infa();
		$nikita->purchase();
		?> 
		<br><br><br>
		<?php
		echo "Иван<br>";
		$ivan->setNumber_score("741 852 963 215");
		$balancei=7800;
		$ivan->setBalance($balancei);
		$ivan->infa();
		$ivan->purchase();
		
		
		
		
		
		
	?>
	</body>
</html>