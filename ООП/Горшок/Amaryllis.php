<?php
	class Amaryllis extends Plant {
				public $color_petals;
				
				public function getColor_petals() {
				return $this->color_petals;
			}

			public function setColor_petals($color_petals) {
				$this->color_petals = $color_petals;
			}
			
			public function conclusion() {
				echo "Название цветка: {$this->getName()}<br>Цвет лепестков: {$this->getColor_petals()}";
			}
			
			}
			
?>