<?php



//------------fetch table data both arrays(numaric and associative)-------------
// $db = new PDO('mysql:host=localhost;dbname=oops','root','');
// $q = $db->query('SELECT * FROM user');
// echo "<pre>";
// while($row=$q->fetch(PDO::FETCH_BOTH)){
// 	print_r($row);
// }


//-----------fetch table data in numaric array only----------------
// $db = new PDO('mysql:host=localhost;dbname=oops','root','');
// $q = $db->query('SELECT * FROM user');
// echo "<pre>";
// while($row = $q->fetch(PDO::FETCH_NUM)) {
// 	echo $row[0];
// 	print_r($row);
// }


//-------------fetch table data in associtative array only----------
$db = new PDO('mysql:host=localhost; dbname=oops','root','');
$q = $db->query('SELECT * FROM user');
echo "<pre>";
while($row = $q->fetch(PDO::FETCH_ASSOC)) {
	echo $row['uname'];
	print_r($row);
}

