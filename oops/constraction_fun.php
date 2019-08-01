<?php

/**
* constraction function
*/
class Tv
{
	public $modal;
	public $volume;
	function volumeUp()
	{
		$this->volume++;
	}
	function __construct($m, $v)
	{
		$this->modal =$m;
		$this->volume = $v;
	}
}

$tv = new Tv("xyz", 1);

$tv_one = new Tv("abc", 2);

echo 'modal '.$tv->modal.' volume '.$tv->volume.'</br>';
echo "modal ".$tv_one->modal.' volume '.$tv_one->volume;

?>