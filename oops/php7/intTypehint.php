<?php
// ini_set('display_errors','1');
// declare(strict_types=1);
// function test(int $v){
// 	return $v;
// }
// echo test(50);

   declare(strict_types = 1);
   function returnIntValue(int $value): int {
      return $value;
   }
   print(returnIntValue(5));