<?php


//  return 0 if needle is not found
// return position of needle if found in haystack

$string ="My name is pankaj  borah and i love programming and I am from India and programming is my hobby";
$find ='and';
$offset =0;

while ($current = strpos($string, $find,$offset)) {
	echo $find.'found at'.$current;
	$offset=$current+strlen($find);
	
}



?>