<?php

class FileLogger implements LoggerInterface {
	public function log($message) {
		echo "Logger message from File Logger: $message";
	}
}


?>