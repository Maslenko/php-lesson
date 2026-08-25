<?php
$title = "Контакты";
require_once "blocks/header.php"; 
?>
<h1 class="mt-5"><?=$title?></h1>

<form action="check_contact.php" method="post">
	<input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
	<input type="email" name="email" placeholder="Введите электропочту" class="form-control"><br>
	<input type="text" name="subject" placeholder="Тема сообщения" class="form-control"><br>
	<textarea name="message" placeholder="Ваше сообщение" class="form-control"></textarea><br>
	<button type="submit" class="btn btn-success">Отправить</button>	
</form>	

<?php
require_once "blocks/footer.php";
?>