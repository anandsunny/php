<?php

// function __autoload($class) {
// 	include_once"classes/$class.php";
// }
// $logger = new DBLogger();
// $profile = new UserProfile($logger);
// $profile->createUser();

?>

<?php

function __autoload($class) {
	include_once"classes/$class.php";
}
function getLogger($type) {
	switch($type) {
		case "file":
		return new FileLogger();
		break;

		case "database" :
		return new DBLogger();
		break;

		case "email" :
		return new EmailLogger();
		break;
	}
}
$logger = getLogger('database');
$profile = new UserProfile($logger);
$profile->createUser();


?>