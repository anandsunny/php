<?php

class Abc {
    private $arr = ['abc'=>'Abc variable', 'xyz'=>'Xyz variable'];

    public function __get($name){
        if(array_key_exists($name, $this->arr)){
            return $this->arr[$name];
        }
        else{
            return "trying to access non-existing variable: $name";
        }
    }
}
$obj = new Abc;
echo $obj->abc;

?>

<?php

// class Dog {
//     public $name;
//     public $dogTag;

//     public function __get($var) {
//         echo "Attemped to receive $var and failed!";
//     }
// }
// $dog = new Dog;
// print $dog->age;

?>