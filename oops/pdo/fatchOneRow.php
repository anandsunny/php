<?php
//------------fetch only one row table data-----------------
$db = new PDO('mysql:host=localhost;dbname=oops','root','');
$query = $db->query('SELECT * FROM user');
$row = $query->fetch();
echo "<pre>";
print_r($row);