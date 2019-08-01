<?php

// interface ABC {
// 	public function test();
// }
// interface XYZ {
// 	public function test1();
// }
// class Def implements ABC, XYZ{
// 	public function test() {
// 		echo "test method form abc interface.\n";
// 		return $this;
// 	}
// 	public function test1() {
// 		echo "test1 method from xyz interface";
// 	}
// }
// $obj = new Def;
// $obj->test()->test1();

?>

<?php

interface iTemplate {
	public function setVariable($name, $var);

	public function getHtml($template);
}
class Template implements iTemplate {
	private $vars = array();
	public function setVariable($name, $var) {
		$this->vars[$name] = $var;
	}
	public function getHtml($template) {
		foreach($this->vars as $name => $value) {
			$template = str_replace('{'.$name.'}', $value, $template);
		}
		return $template;
	}
}
$obj = new Template;
$obj->setVariable('anand', 'BE');


?>