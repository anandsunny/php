<?php

class abc {
	public static $countObj = 0;

	public static function getCount() {
		return self::$countObj;
	}
	public function __construct() {
		self::$countObj++;
	}
}
$a = new abc();
$b = new abc();
$c = new abc;
$d = new abc;

echo abc::getCount();
?>