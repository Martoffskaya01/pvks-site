<?php
	class Banana extends Product{
			public $kol;

			public function getKol() {
				return $this->kol;
			}

			public function setKol($kol) {
				$this->kol = $kol;
			}
			
			public function __construct($name, $price, $kol) {
				Parent::__construct($name,$price);
				$this->kol = $kol;
			}	
		}
?>