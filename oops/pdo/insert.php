<?php

//----------------insert data------------
$db = new PDO('mysql:host=localhost;dbname=oops;','root');
$q = $db->query("INSERT INTO user(uid,uname,usalary) values(4,'shyam',8500)");
if($q->rowCount()) {
	echo $q->rowCount()."Records Inserted.";
}
else{
	echo "No Records Found.";
}