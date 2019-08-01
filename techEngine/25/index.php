<?php
$str ='Hello World';
if (isset($_GET['Name']) && !empty($_GET['Name'])) {
	
	if(strtolower($_GET['Name'])=='hello world') echo 'You are right';
	else echo 'You are wrong';
}


?>

<form method="GET" action="index.php">
	
	Name: <input type="text" name="Name"></input>
	<input type="submit" value="submit"></input>
</form>

