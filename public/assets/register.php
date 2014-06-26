<?php

require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/hash.lib.php';

if($_POST && $_POST['password'] == $_POST['confirm_password']){
	$user = new User();

	$user->email = $_POST['email'];
	$user->password = $_POST['password'];

	if($user->save()){
		header('location: index.php');
		exit;
	}
}


include '../views/header.php';
include '../views/register_form.php';
include '../views/footer.php';