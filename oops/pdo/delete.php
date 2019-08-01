<?php


//--------------delete records--------------------

$db = new PDO('mysql:host=localhost;dbname=oops','root');

$q = $db->query("DELETE FROM user WHERE uid = 4");
 //$row = $q->fetchAll();
if($q->rowCount()) {
	echo "Records Deleted.";
}
else {
	echo "No Records Found.";
}