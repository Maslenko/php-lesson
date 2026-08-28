<?php 
	session_start();

	unset($_SESSION['user_name']); // Очистка сессии, убирает сообщения об ошибках
	unset($_SESSION['email']);
	unset($_SESSION['subject']);
	unset($_SESSION['message']);

	unset($_SESSION['error_username']);
	unset($_SESSION['error_email']);
	unset($_SESSION['error_subject']);
	unset($_SESSION['error_message']); 

	function redirect() {
		header('Location: contact.php');
		exit; 	
	}
	$user_name = htmlspecialchars(trim($_POST['username'])); // удаляет html теги из строки пользователя 
	$from = htmlspecialchars(trim($_POST['email']));
	$subject = htmlspecialchars(trim($_POST['subject']));
	$message = htmlspecialchars(trim($_POST['message']));
	$_SESSION['user_name'] = $user_name; 
	$_SESSION['email'] = $from;
	$_SESSION['subject'] = $subject;
	$_SESSION['message'] = $message;									
	if(strlen($user_name) <= 1) {
		$_SESSION['error_username'] = "Введите корректное имя";
		redirect();
	}
	else if(strlen($from) < 5 || strpos($from, "@") == false) {
		$_SESSION['error_email'] = "Вы ввели некорректный emai";
		redirect();
	}
	else if(strlen($subject) <= 5) {
		$_SESSION['error_subject'] = "Тема сообщения не менее 5 символов";
		redirect();
	}
	else if(strlen($message) <= 15) {
		$_SESSION['error_message'] = "Сообщение не менее 15 символов"; 
		redirect();
	}
	else {
		//$_SESSION['error_username'] = "";
		//$_SESSION['error_email'] = "";
		//$_SESSION['error_subject'] = "";
		//$_SESSION['error_message'] = "";

		$subject = "=?utf-8?B?".base64_encode($subject)."?=";
		$subject = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=urf-8\r\n";
		mail("alexmaslenko@gmail.com", $subject, $message, $headers);
		$_SESSION['success_mail'] = "Вы успешно отправили письмо!";
		redirect();
	}