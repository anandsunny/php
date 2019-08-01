<?php
/*
Channel Techengine
youtube : https://www.youtube.com/c/Techengine

Facebook : http://www.facebook.com/techenginevideos

Disclaimer: This script is just for demonstration purpose only, not suitable to be directly used as final script.More security aspects have to be taken care like checking the validity of entered data by user.

For professional development and assistance or any query related to youtube videos mail to -    
query.techengine@gmail.com

*/
require_once('../MysqliDb.php');
require_once('../db.config.php');

if(isset($_POST['sub']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

    $encrypted_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

	$data = Array ("name" => $db->escape($_POST['name']),
	               "email" => $db->escape($_POST['email']),
	               "password" => $encrypted_password
	);


	$id = $db->insert ('account', $data);
	if($id)
	    echo 'user was created. Id=' . $id;
	else echo 'user sign up failed';
}


?>

<form action="" method="POST">
	Name : <input type="text" name="name"><br>
	Email :<input type="email" name="email"><br>
	Password : <input type="password" name="password"><br>
	<input type="submit" name="sub">
</form>