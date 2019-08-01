<?php


/* Finding user's ip address


direct user 126.215.255.232

       router 192.142.122.11

       proxy 142.45.54.34

*/
$direct = $_SERVER['REMOTE_ADDR'];

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];

$http_x_forwared_for =$_SERVER['HTTP_X_FORWARED_FOR'];

$actual_ip;

if ($http_client_ip) {
	$actual_ip=$http_client_ip;
}elseif ($http_x_forwared_for) {
	$actual_ip=$http_x_forwared_for;
}else{
	$actual_ip=$direct;

}
echo $actual_ip;

















?>