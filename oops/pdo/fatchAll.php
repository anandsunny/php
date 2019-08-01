<?php
// ----------------fetch all data without while loop---------------
$db = new PDO('mysql:host=localhost;dbname=oops','root','');
$q = $db->query('SELECT * FROM user');
//$q->setFetchMode(PDO::FETCH_ASSOC);

echo "<pre>";
$row = $q->fetchAll();
print_r($row);
//echo $row->employee;
