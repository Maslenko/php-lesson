<?php 
	session_start();

	$user_name = htmlspecialdchars(trim($_POST['username'])); // удаляет html теги из строки пользователя 
	$from = htmlspecialdchars(trim($_POST['email']));
	$subjeckt = htmlspecialdchars(trim($_POST['subjeckt']));
	$message = htmlspecialdchars(trim($_POST['message']));

	$_SESSION['username'] = $user_name; 
	$_SESSION['email'] = $from;
	$_SESSION['subjeckt'] = $subjeckt;
	$_SESSION['message'] = $message;

	if(strlen($user_name) <= 1)
		$error_username = "Введите корректное имя";
	else if(strlen($from) < 5 || strpos($from, "@") == false)
		$error_email = "Вы ввели некорректный emai";
	else if(strlen($subjeckt) <= 5)
		$error_subjeckt = "Тема сообщения не менее 5 символов";
	else if(strlen($message) <= 15)
		$error_message = "Сообщение не менее 15 символов"; 
	else {
		
	}