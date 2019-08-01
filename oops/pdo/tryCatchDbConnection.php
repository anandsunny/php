<?php


 //------------------database contection by try catch condition-----------------
try{
	$db = new PDO('mysql:host=localhost;dbname=oops','root');
	echo "connection successfull.";
}
catch(PDOException $e) {
	echo "conection failed: ".$e->getMessage();
}
