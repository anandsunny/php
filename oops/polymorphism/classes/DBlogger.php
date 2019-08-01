<?php

class DBLogger implements LoggerInterface {
	function log($message) {
		echo "logger message from DBLogger: $message";
	}
}


?>