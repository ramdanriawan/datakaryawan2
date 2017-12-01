<?php 
	setcookie("username", "", time() - 1, "");
	setcookie("session", "", time() - 1, "");
	header("location: login");
 ?>