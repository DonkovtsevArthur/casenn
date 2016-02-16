<?php
	abstract class Figura {
		public $a = 2;
		public $pi = 3.14;
		abstract function getSquare();
	}			
	class Square extends Figura {

		public function getSquare(){
			echo '<strong>Квадрат</strong><br>';
			$s = $this->a * $this->a;
			echo 'Площадь квадрата равна '.$s.'<br>';
			return;
		}
	}
	class Circle extends Figura {
		
		public function getSquare(){
			echo '<strong>Круг</strong><br>';
			$s = $this->pi * ( $this->a * $this->a);
			echo 'Площадь круга равна '.$s.'<br>';
			return;
		}
	}

	$res = new Square();
	$res->getSquare();
	
	$res = new Circle();
	$res->getSquare();
?>