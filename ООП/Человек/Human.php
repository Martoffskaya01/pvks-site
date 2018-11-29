<?php
require_once("trait.php");
	abstract class Human {
		use Cancellation;
		private $number_score;
		private $balance;
		
		
		public function getNumber_score() {
				return $this->number_score;
			}

		public function setNumber_score($number_score) {
			$this->number_score = $number_score;
		}
			
		public function getBalance() {
				return $this->balance;
			}

		public function setBalance($balance) {
			$this->balance = $balance;
		}
	
	
	public function infa (){
		echo "Информация о человеке <br>
		Номер счета: {$this->getNumber_score()}<br>
		Баланс: {$this->getBalance()}<br>";
	} 
	
	public function  purchase(){
		$purchase=1500;
		echo "Покупка на сумму {$purchase}<br>";
		$balance=$this->getBalance()-$purchase;
		echo "Осталось {$balance} рублей<br>";
	}
	
	}
?>