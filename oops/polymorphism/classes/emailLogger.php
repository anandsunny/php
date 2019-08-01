<?php

class EmailLogger implements LoggerInterface{
	public function log($message) {
		echo "Logger message from Email Logger: $message";
	}
}


?>