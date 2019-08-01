<?php
session_start();
session_destroy();
header("location:./../../door_log_in.php");

?>