<?php
/*
substr(string, start, length)
str_replace(search, replace, subject,count)
*/
//echo substr_replace("Hello World","earth", 6);
//echo substr_replace("Hello World","earth", -5);
//echo substr_replace("Hello World","earth ", 0,0);
$arr =array("1: AAA","2: AAA","3: AAA");
 print_r(substr_replace($arr,"bbb", 3,3));

?>