<?php

/**
* 
*/
class HTML
{
	public $name;
	public $id;

	public function basicAttribute()
	{
		return "name= ".$this->name." id= ".$this->id;
	}
	function __construct($id, $name)
		{
			$this->id = $id;
            $this->name = $name;

		}
}
class HTML_div extends HTML
	{
		function getDiv($content)
		{
			$basicAttribute = $this->basicAttribute();
			return "<div $basicAttribute >$content</div>";
		}
	}

class HTML_span extends HTML
{
	public function getSpan($content)
	{
		$basicAttribute = $this->basicAttribute();
		return "<span $basicAttribute >$content</span>";
	}
}
$HTML_div = new HTML_div(1, 'username');
$HTML_span = new HTML_span(2, 'spanName');
echo $HTML_div->getDiv("this div is created by php script.");
echo $HTML_span->getSpan("this span tag is created by php script.");

?>