<?php


//------------------insert data 1------------------
// $db = new PDO("mysql:host=localhost;dbname=oops;","root");
// $statement = $db->prepare("INSERT INTO user(uid,uname,usalary) VALUES(:id,:name,:salary)");
// $statement->execute([
// 	':id'	=> 5,
// 	':name'	=>"Justin",
// 	':salary' => 10015,

// 	]);

//-------------------insert data 2-------------------
// $db = new PDO("mysql:host=localhost;dbname=oops;","root");
// $statement = $db->prepare("INSERT INTO user(uid,uname,usalary) VALUES(?,?,?)");
// $statement->execute([4,'Rustam',6500]);

// if($statement->rowCount()) {
// 	echo $statement->rowCount()."record inserted.";
// }
// else {
// 	echo "No Records Founds.";
// }


//----------------delete data--------------------

// $db = new PDO("mysql:host=localhost;dbname=oops;","root");
// $statement = $db->prepare("DELETE FROM user WHERE uid = ?");

// $statement->execute([3]);


// //----------------update data-------------------
// $db = new PDO("mysql:host=localhost;dbname=oops","root");
// $statement = $db->prepare("UPDATE user SET uname = 'Ram' WHERE uid = :id");
// $statement->execute([':id' => 4]);
