<?php


 //---------------get error------------
//ini_set('display_errors','1');
// class Users {}

// function test(Users $abc) {
// 	var_dump($abc);
// }
// test('new Users');

//-----------remove error------------
// class Users {}
// function test(Users $abc) {
// 	var_dump($abc);
// }
// test(new Users);

//------------------array typehint--------------
// function test(array $a) {
// 	var_dump($a);
// }
// test([]);


//-------------int type hint--------------
// function test(int $a, int $b) {
// 	return $a+$b;
// }
// echo test(5,5);

//----------int typehinting 1-----------------------
// function test(int $a, int $b) {
// 	return $a+$b;
// }
// echo test(5, '10');

//--------------int typehinging in enable strict mode-------
// declare(strict_types = 1); 
// function test(int $a, int $b) {
// 	return $a+$b;
// }
// echo test(5,'15');


//---------------float----------------
// declare(strict_types=1);
// function test(float $a) {
// 	var_dump($a);
// }
// //echo test(5);
// echo test(5.222);

//-----------------boolean----------
// declare(strict_types=1);
// function test(bool $a) {
// 	return var_dump($a);
// }
// echo test(false);
