<?php 

	session_start();

	session_unset();
	session_destroy();

	header("location: http://localhost/PHP_PA/PHP_file/index.php");

 ?>