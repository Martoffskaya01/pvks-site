<?php
	trait Cancellation {
		
		public function Cancellatio() {
		echo "Покупка отменена<br>
		Баланс: {$this->getBalance()}";
		
		}
	} 
?>