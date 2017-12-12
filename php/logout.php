<?php
	
	session_start();
	
	unset($_SESSION['reg']);
	unset($_SESSION['name']);
	if(isset($_SESSION['group']))
		unset($_SESSION['group']);
	
	echo 'succeed';


?>