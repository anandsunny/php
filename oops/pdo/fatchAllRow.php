<?php

//------fetch all table data---------------
$db = new PDO('mysql:host=localhost;dbname=oops','root','');
$q = $db->query('SELECT * FROM user');
echo "<pre>";
while($row=$q->fetch()) {
	print_r($row);
}


