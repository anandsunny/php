<?php

$cookie1_name='LANGUAGE';
$cookie2_name='CITY';

$user_language='Hindi';
$user_city ="Delhi";


setcookie($cookie1_name, $user_language, time()-10, '/', '');

setcookie($cookie2_name, $user_city, time()+10, '/', '');


?>