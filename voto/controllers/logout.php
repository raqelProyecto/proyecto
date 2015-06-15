<?php 
	session_start();
	session_destroy();
	view('home');
?>