<?php 
	session_start();

	$user_name = htmlspecialdchars(trim($_POST['username'])); // удаляет html теги из строки пользователя 
	$from = htmlspecialdchars(trim($_POST['email']));
	$subjeckt = htmlspecialdchars(trim($_POST['subjeckt']));
	$message = htmlspecialdchars(trim($_POST['message']));