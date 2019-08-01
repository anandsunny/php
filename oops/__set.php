<?php

class Abc {
	private $arr = ['abc'=>'ABC Variable','xyz'=>'XYZ Variable'];

	public function __set($name, $value) {
		if(array_key_exists($name, $this->arr)) {
			return $this->arr[$name] = $value;
		}
		else {
			echo "Invalid data value: $name , cannot set value.";
		}
	}
}

$obj = new Abc("parameters");
$obj->abc = "value has been changed";
echo $obj->abc;
?>

<?php

    // class mytable {
    //     public $Name;

    //     public function __construct($Name) {
    //         $this->Name = $Name;
    //     }

    //     public function __set($var, $val) {
    //     	echo "set method has runned $var: $val";
    //     }

    // }

    // $systemvars = new mytable("systemvars");
    // $systemvars->AdminEmail = 'telrev@somesite.net';
?>

<?php
// $result = mysql_query('SELECT * WHERE 1=1');
// if(!$result){
// 	die('Invalid Query:'.mysql_error());
// } 

?>