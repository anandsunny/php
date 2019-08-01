

<h1>$_POST super global variable</h1>

<form method="POST" action="">
	<input type="text" name="name"></input>
	<input type="submit" value="Submit"></input>
</form>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
 $name=$_POST['name'];
 if (!empty($name)) {
 	echo "Welcome".$name;
 }else die();

}else{
	die();
}

?>