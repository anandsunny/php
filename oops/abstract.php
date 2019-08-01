<?php

abstract class baseEmployee{
	protected $firstname;
	protected $lastname;

	public function getFullName(){
		return $this->firstname." ".$this->lastname;
	}
	public abstract function getMonthlySalary();

	public function __construct($f, $l){
		$this->firstname = $f;
		$this->lastname = $l;
	}

}
class fullTimeEmployee extends baseEmployee{
	protected $annualSalary;
	public function getMonthlySalary(){
		return $this->annualSalary/12;
	}
}
class contractEmployee extends baseEmployee{
	protected $hourlyRate;
	protected $totalHour;

	public function getMonthlySalary(){
		return $this->hourlyRate * $this->totalHour;
	}
}
$fulltime = new fullTimeEmployee('fulltime', 'employee');
$contract = new contractEmployee('contract', 'employee');

echo $fulltime->getFullName()."</br>";
echo $contract->getFullName()."</br>";
 
 echo $fulltime->getMonthlySalary()."</br>";
 echo $contract->getMonthlySalary()."</br>";

?>


<?php

// abstract class animal{
// 	public $name;
// 	public $age;

// 	public function describe(){
// 		return $this->name.", ".$this->age." years old.";
// 	}
// 	abstract public function greet();
// }

// class dog extends animal{
// 	public function greet(){
// 		return "  and my greed is woof!";
// 	}

// 	public function describe(){
// 		return parent::describe().", and I'm a dog!";
// 	}
// }

// $animal  = new dog();
// $animal->name = "Hello My Name Is BoB";
// $animal->age = 7;
// echo $animal->describe();
// echo $animal->greet();

?>



<?php

// abstract class abstractClass{

// 	abstract public function getValue();
// 	abstract public function prefixValue($prefix);

// 	public function printOut(){
// 		print $this->getValue();
// 	}
// }
// class concreteClass extends abstractClass{
// 	public function getValue(){
// 		return "concreteClassText";
// 	}
// 	public function prefixValue($prefix){
// 		return "{$prefix}concreteClasstext";
// 	}
// }

// $class = new concreteClass();
// $class->printOut()."</br>";
// echo $class->prefixValue('foo_');



?>