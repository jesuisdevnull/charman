<?php

if(isset($_POST['submit'])){
	$path = $_SERVER["DOCUMENT_ROOT"]
	require "includes/classes/models/signup.model.php";
	require "includes/classes/controllers/signup.controller.php";
        echo "text<br>";
        exit();	
}

