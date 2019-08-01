<?php




//-------------------update records---------------------
$db = new PDO('mysql:host=localhost;dbname=oops;','root');
$q = $db->query("UPDATE user SET uname = 'nameUpadate' WHERE uid = 4 ");
$row = $q->fetchAll();
if($q->rowCount()) {
	echo $q->rowCount()."Records Updated.";
}
else{
	echo "No Records Found.";
}
