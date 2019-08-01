<?php
session_start();
/**
* user 
*/
class LogIn extends Conn
{
	
	public function getUser($user, $pass)
	{
		$query = $this->db->prepare("SELECT * FROM users WHERE user_name = :user");
		$query->bindParam("user", $user);
		$query->execute();
		if ($query->rowCount()) {
			$row = $query->fetch();
			$u_pass = $row['user_pass'];
			$result = password_verify($pass, $u_pass);
			if($result) {
			    $_SESSION['user'] = $user;
    			echo "<script>window.location = 'door.php'; </script>";
    			return true;
			}
			
		}
		else {
			return false;
		}
	}
}
$logInObj = new LogIn

?>