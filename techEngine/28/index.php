<?php
/*

substr(string, start ,length)

return string
*/

echo substr("Hello world",7)."<br>";

echo substr("Hello world",-4)."<br>";


echo substr("Hello world",1,8)."<br>";

echo substr("Hello world",0,5)."<br>";

echo substr("Hello world",0,-1)."<br>";
echo substr("Hello world",-10,-2)."<br>";


























// substr_replace() function  - replaces a part of a string with another string.

// substr_replace(string,replacement,start,length);



// Start replacing at the 6th position in the string (replace "world" with "earth")
//echo substr_replace("Hello world","earth",6)."<br>";


//Start replacing at the 5th position from the end of the string (replace "world" with "earth")

//echo substr_replace("Hello world","earth",-5)."<br>";

//Insert "Hello" at the beginning of "world"
//echo substr_replace("world","Hello ",0,0)."<br>";


//Replace multiple strings at once. Replace "AAA" in each string with "BBB"

//$replace = array("1: AAA","2: AAA","3: AAA");
//print_r(substr_replace($replace,'BBB',3,3));
//echo implode("<br>",substr_replace($replace,'BBB',1,3))."<br>";


?>