<?php
	class Meat extends Product {

			public $weight;

			public function getWeight() {
				return $this->weight;
			}

			public function setWeight($weight) {
				$this->weight = $weight;
			}

			public function __construct($name, $price, $weight) {
				Parent::__construct($name,$price);
				$this->weight = $weight;
			}
		}
?>
