<?php
	abstract class Product {
	  		public $name;
	  		public $price;
	 		public function getName() {
				return $this->name;
			}

			public function setName($name) {
				$this->name = $name;
			}

			public function getPrice() {
				return $this->price;
			}

			public function setPrice($price) {
				$this->price = $price;
			}
			public function __construct($name, $price){
				$this->name = $name;
				$this->price = $price;
			}
		}
?>
