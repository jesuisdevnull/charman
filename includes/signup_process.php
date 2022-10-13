<?php

if(isset($_POST['submit'])){	
	require "./core/dbh.php";
	require "./classes/models/signup.model.php";
	require "./classes/controllers/signup.controller.php";
	
	$controller = new SignupController();

	if (!$controller->validateUsername($_POST["username"])) {
		header("Location: ../signup.php?alert=invalidUser");	
		exit();		
	}

	if (!$controller->validateEmail($_POST["email"])) {
		header("Location: ../signup.php?alert=invalidEmail");
		exit();	
	}

	if (!$controller->validatePassword($_POST["password"],$_POST["passwordRepeat"])) {
	    header("Location: ../signup.php?alert=invalidPassword");
        exit();	
	}

    header("Location: ../index.php?alert=succesfulRegistration");
	exit();	
}
