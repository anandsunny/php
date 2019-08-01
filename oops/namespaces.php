<?php

namespace abc{
	class xyz {
		public function __construct(){
			echo "XYZ from ABC namespace";
		}
	}
}
namespace {
	class xyz {
		public function __construct(){
			echo "XYZ from Global namespace";
		}
	}
	$obj = new xyz();
	$abcObj = new abc\xyz();
	use abc\xyz as abc;
}
?>