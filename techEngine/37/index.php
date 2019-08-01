

<h1>$_GET super global variable</h1>

<form method="GET" action="">
	<input type="text" name="name"></input>
	<input type="submit" value="Submit"></input>
</form>

<?php
if ($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['name'])) {
 $name=$_GET['name'];
 if (!empty($name)) {
 	echo "Welcome".$name;
 }else die();

}else{
	die();
}

?>