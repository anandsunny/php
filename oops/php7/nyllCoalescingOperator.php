<?php
declare(strict_types=1);
ini_set('display_errors','1');

//$var = isset($_GET['name']) ? $_GET['name'] : 'Not Found.';

$var = $_GET['name'] ??  'Not Found Again.';
echo $var;
//var_dump($var);
