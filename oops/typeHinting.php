<?php

// function clacMiles(array $modals) {
// 	foreach ($modals as $item) {
// 		echo $carModal = $item[0];
// 		echo " : ";
// 		echo $numOfMiles = $item[1]*$item[2];
// 		echo "<br />";
// 	}
// }
// $modals = array( 
// 	array('Totota', 12, 44),
// 	array('BMW', 13, 41)
// 	);
// clacMiles($modals);

?>

<?php

// class car {
// 	protected $model;
// 	protected $hasSunRoof;
// 	protected $numberOfDoors;
// 	protected $price;

// 	public function setModel(string $model) {
// 		$this->model = $model;
// 	}
// 	public function setHasSunRoof(bool $value) {
// 		$this->hasSunRoof = $value;
// 	}
// 	public function setNumberOfDoor(int $value) {
// 		$this->numberOfDoors = $value;
// 	}
// 	public function setPrice(float $value) {
// 		$this->price = $value;
// 	}
// }

// $obj = new car;
// $obj->setNumberOfDoor(12);

?>


<?php
 abstract class Car {
 	protected $model;
 	protected $height;

 	abstract public function calTankVolume();
 }

 class Bmw extends Car {
 	protected $rib;

 	public function __construct($model, $rib, $height) {
 		$this->model = $model;
 		$this->rib = $rib;
 		$this->height = $height;
 	}

 	public function calTankVolume() {
 		return $this->rib*$this->rib*$this->height;
 	}
 }
 class Mercedes extends Car {
 	protected $radius;

 	public function __construct($model, $radius, $height) {
 		$this->model = $model;
 		$this->radius = $radius;
 		$this->height = $height;
 	}

 	public function calTankVolume() {
 		return $this->radius*$this->radius*pi()*$this->height;
 	}
 }
 function calcTankPrice(Car $car, $pricePerGalon) {
 	echo $car->calTankVolume()."<br />";
 }

 $bmw = new Bmw('62182791', 14, 21);

 echo calcTankPrice($bmw, 3);

 $mercedes = new Mercedes('12189796', 7, 28);
 echo calcTankPrice($mercedes, 3);


?>