<?php

// declare(strict_types=1);
// class c{}
// function test() :c{
// 	return new c;
// }
// var_dump(test());


// declare(strict_types=1);
// function test(int $int) :int {
// 	return $int+1;
// }
// var_dump(test('5'));

//-----------get error-------------
// declare(strict_types=1);
// ini_set('display_errors','1');
// function test(): string{
// 	return [];
// }
// var_dump(test()); 

//-----------without error-------
declare(strict_types=1);
ini_set('display_errors', '1');
function test() :array{
	return [];
}
var_dump(test());