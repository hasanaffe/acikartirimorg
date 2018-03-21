<?php
	session_start();

	$_SESSION = array();
	
	if (isset($_COOKIES[session_name()]{
		setcookie(session_name(), '', time()-42000, '/');
	}
	
	session_destroy();
?>