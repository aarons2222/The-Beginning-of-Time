<?php session_start();
//error_reporting(0);

require 'database/connection.php';
require 'functions/general.php';
require 'functions/users.php';

if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'user_id', 'username', 'password','firstname', 'lastname', 'email');
	
}

$errors = array();
?>