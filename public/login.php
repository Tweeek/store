<?php

session_start();

require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/hash.lib.php';
require_once '../models/user.model.php';

$form = new Form();

if($_POST){
	$user = new User();

	$user->email    = $_POST['email'];
	$user->password = $_POST['password'];

	if($user->authenticate()){
		$_SESSION['logged_in'] = true;
	}
}

include '../views/header.php';

if($_SESSION['logged_in'] == true){
	include 'index.php';
}else{
	include '../views/login_form.php';
}

include '../views/footer.php';