<?php

class Tv{
	public $model = "xyz";
	public $volume =1;
	
	function volumeUp(){
	$this->volume++;
	}
	function volumeDown(){
	$this->volume--;
	}
}
$tv_one = new Tv;
$tv_two = new Tv;

$tv_one->volumeUp();
$tv_two->volumeDown();

 echo "volume down = ".$tv_two->volume."<br />";
 echo "volume up = ".$tv_one->volume."<br />";
 echo "model = ".$tv_two->model;
?>