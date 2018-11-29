<?php
	class Rose extends Plant {
				public $kol_petals;
				
				public function getKol_petals() {
				return $this->kol_petals;
			}

			public function setKol_petals($kol_petals) {
				$this->kol_petals = $kol_petals;
			}
			
			public function conclusion() {
				echo "Название цветка: {$this->getName()}<br>Количество лепестков: {$this->getKol_petals()}";
			}
	};			
?>