<?php
// array function in php
$array1 =array("Dog","Cat","Rabbit","Horse","Monkey");

/*for ($i=0; $i <count($array1 ) ; $i++) { 
	echo $array1[$i].'<br>';
}*/
/*function test_odd($var){
    return($var & 1);
}
$arr=array("hello",1,"world",2,3,4);
print_r(array_filter($arr,"test_odd"));*/
/*function square($v){
 return $v*$v;

}
$arr1=array(1,2,3,4,5);
print_r(array_map("square", $arr1));*/
/*$array1=array("1","2","3","4");
$array2 =array("5","6","7","8");
print_r(array_merge($array1,$array2));

*/
$array3 =array(1,2,3,4,5);
array_pop($array3);
print_r($array3);



?>