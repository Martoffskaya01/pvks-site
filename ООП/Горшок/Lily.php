<?php
	class Lily extends Plant {
				public $value;
				
				public function getValue() {
				return $this->value;
			}

			public function setValue($value) {
				$this->value = $value;
			}
			
			public function conclusion() {
				echo "Название цветка: {$this->getName()}<br>Значение цветка: {$this->getValue()}";
			}
			}
			
?>