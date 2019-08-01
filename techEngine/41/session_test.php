<?php
session_start();
if (isset($_SESSION['UID']) &&!empty($_SESSION['UID'])) {
	echo 'Welcome,'.$_SESSION['NAME'].'you have successfully logged in';
}else echo "You are not logged in";

?>