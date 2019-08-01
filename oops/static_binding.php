<?php

// class db{
// 	protected static $table = "baseTable";

// 	public function select(){
// 		echo "SELECT * FROM ".static::$table;
// 	}

// 	public function insert(){
// 		echo "INSERT INTO ".static::$table;
// 	}
// }
// class abc extends db{
// 	protected static $table = "abc";
// }
// class userAccounts extends db {
// 	protected static $table  = "user_accounts";
// }
// $accounts = new userAccounts();
// $abc = new abc();

// $abc->select();

// $accounts->select();

?>


<?php

// class A {
// 	protected static function who() {
// 		echo __CLASS__;
// 	} 
// 	public static function test() {
// 		self::who();
// 	}
// }
// class B extends A {
// 	public static function who() {
// 		echo __CLASS__;
// 	}
// }
// B::test();
?>

<?php

class Modal {
	public static function find() {
		echo static::$name;
	}
}
class Product extends Modal {
	protected static $name = "product";
}
Product::find();


?>


<?php

// class A {
// 	public static function foo() {
// 		static::who();
// 	}
// 	public static function who() {
// 		echo __CLASS__."\n";
// 	}
// }
// class B extends A {
// 	public static function test() {
// 		A::foo();
// 		parent::foo();
// 		self::foo();
// 	}
// 	public static function who() {
// 		echo __CLASS__."\n";
// 	}
// }
// class C extends B {
// 	public static function who() {
// 		echo __CLASS__."\n";
// 	}
// }
// C::test();
?>
