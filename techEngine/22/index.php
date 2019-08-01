<?php

$string = 'My name is pankaj ! & I am a programmmer .';
print_r(str_word_count($string,0,'&.!'));
var_dump(str_word_count($string,0,'&.!'));


?>