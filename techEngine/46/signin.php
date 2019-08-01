
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
if(isset($_POST['sub']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    
    $result=$db->where('email',$db->escape($_POST['email']))
           ->getOne('account','password');
    $result=$result['password'];
	$auth=password_verify($_POST['password'],$result);
	if ($auth) {
		echo "You have succesfully signed in";
	}else echo "Sorry the password was not correct ";

}

?>

<form method="POST">
	Email: <input type="email" name="email"><br>
	Password:<input type="password" name="password"><br>
	<input type="submit" name="sub" value="Sign In">
</form>