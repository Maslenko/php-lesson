<?php
session_start();
$title = "Контакты";
require_once "blocks/header.php"; 
?>
<h1 class="mt-5"><?=$title?></h1>

<form action="check_contact.php" method="post" novalidate="">

	<input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Введите имя" class="form-control">
	<div class="text-danger"><?=$_SESSION['error_username']?></div><br>

	<input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Введите электропочту" class="form-control">
	<div class="text-danger"><?=$_SESSION['error_email']?></div><br>

	<input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Тема сообщения" class="form-control">
	<div class="text-danger"><?=$_SESSION['error_subject']?></div><br>

	<textarea name="message" placeholder="Ваше сообщение" class="form-control"></textarea>
	<div class="text-danger"><?=$_SESSION['error_message']?></div><br>

	<button type="submit" class="btn btn-success">Отправить</button>	
</form>	

<?php
require_once "blocks/footer.php";
?>