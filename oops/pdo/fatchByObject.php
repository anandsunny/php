<?php


//-------------fetch table data in standard data object of class------------------
$db = new PDO('mysql:host=localhost; dbname=oops','root');
$q = $db->query('SELECT * FROM user');
echo "<pre>";

while($row = $q->fetch(PDO::FETCH_OBJ)){
	echo $row->uname,"<br/>";
	//print_r($row);
}
