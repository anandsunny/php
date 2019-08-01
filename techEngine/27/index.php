<?php
/* Array in php   

 An array is a special variable, which can hold more than one value at a time

In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays

*/
$food = array("Rice","Chapati","Noodle","Pizza","Roll");
$len = count($food);

for ($i=0; $i < $len; $i++) { 
	echo $food[$i].'<br>';
}





?>