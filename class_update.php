<?php	
	abstract class Mobile {
		abstract function getOS();	
	}
	class FamilyIOS extends Mobile{
		public function getOS(){

		}
		
	}
	class FamilyAndroid extends Mobile{
		public function getOS(){
			
		}
	}
	class FamilyWindows extends Mobile{
		public function getOS(){			
		}
	}
	class IPhone6splus extends FamilyIOS {
		public function getOS(){
				
	$tov .= '<div class="col-md-4 text-center">
			<div class="mobiles">'. $rqw->img .'
			<div class="caption  text-center">
			<h3 class="text-center">'. $rqw->name .'</h3>
			<p>Память:'. $rqw->memory .'</p>
			<p>Тип связи:'. $rqw->wlan .'</p>
			</div></div></div>'; 	
		}
	}
	class SamsungGalaxyS6 extends FamilyAndroid {
	}
	class Lumia950XL extends FamilyWindows {
	}
 
	
$iphone6 = new IPhone6splus();

	
?>