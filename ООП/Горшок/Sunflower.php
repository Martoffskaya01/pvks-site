<?php
	class Sunflower extends Plant {
			public $kol_seeds;
				
			public function getKol_seeds() {
			return $this->kol_seeds;
		}

		public function setKol_seeds($kol_seeds) {
			$this->kol_seeds = $kol_seeds;
		}
		
		public function conclusion() {
			echo "Название цветка: {$this->getName()}<br>Количество семечек: {$this->getKol_seeds()}";
		}	
	}
			
?>