<?php
	abstract class Plant {
				private $name;
				
				public function getName() {
					return $this->name;
				}
				
				public function setName($name) {
					return $this->name=$name;
				}
			}
?>