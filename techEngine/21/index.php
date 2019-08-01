<?php
//require_once ('MysqliDb.php');

$name = 'Pankaj';

function greet_me(){
	global $name;
	echo 'Welcome to this page '.$name;
}

greet_me();
?>