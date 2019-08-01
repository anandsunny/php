<?php
/*
str_replace() function replaces some characters with some other characters in a string

str_replace(find,replace,stringtosearch,count)
*/



/*
condition 1

find           = string
replace        = string
stringtosearch = string
return         = string
*/
//echo str_replace("world","Peter","Hello world!")."<br>";





/*
condition 2

find           = string
replace        = string
stringtosearch = array
return         = array
*/

/*
$arr = array("blue","red","green","yellow");
print_r(str_replace("red","pink",$arr,$i))."<br>";
echo "Replacements: $i"."<br>";

*/


/*
condition 3

find           = array
replace        = array   and if length of find > length of replace n empty string will be used as replace
stringtosearch = array
return         = array
*/


$find = array("Hello","world");
$replace = array("B");
$arr = array("Hello","world","!");
print_r(str_replace($find,$replace,$arr))."<br>";

?>