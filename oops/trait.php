<?php

trait abc{
	protected function xyz(){
		echo "XYZ method from ABC trait";
	}
}

class test{
	use abc {
		abc::xyz as public;
	}
}
$obj = new test;
$obj->xyz();

?>


<?php

// class Base {
// 	public function sayHello() {
// 		echo "Hello";
// 	}
// }
// trait sayWorld {
// 	public function sayHello() {
// 		parent::sayHello();
// 		echo "World";
// 	}
// }
// class helloWorld extends Base {
// 	use sayWorld;
// }
// $helloWorld = new helloWorld();
// $helloWorld->sayHello();


?>


<?php

// trait helloWorld {
// 	public function sayHello() {
// 		echo "Hello World!";
// 	}
// }
// class worldIsNotEnough {
// 	use helloWorld;
// 	public function sayHello() {
// 		echo "Hello Universe";
// 	}
// }
// $obj = new worldIsNotEnough();
// $obj->sayHello();
?>

<?php

// trait Hello {
// 	public function sayHello() {
// 		echo "Hello";
// 	}
// }
// trait World {
// 	public function sayWorld() {
// 		echo "World";
// 	}
// }
// class HelloWorld {
// 	use Hello, World;
// 	public function sayExclamationMark() {
// 		echo "!";
// 	}
// }
// $obj = new HelloWorld();

// $obj->sayHello();
// $obj->sayWorld();
// $obj->sayExclamationMark();
?>

<?php

// trait A {
// 	public function smallTalk() {
// 		echo "small talk a";
// 	}
// 	public function bigTalk() {
// 		echo "big talk A";
// 	}
// }
// trait B {
// 	public function smallTalk() {
// 		echo "small talk b";
// 	}
// 	public function bigTalk() {
// 		echo "big talk B";
// 	}
// }
// class Talker {
// 	use A, B;
// 	B::smallTalk insteadof A;
// 	A::bigTalk insteadof B;
// }

?>