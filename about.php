<!-- <!DOCTYPE html>
<html>
<head>
	<title>PHP Lesson</title>
</head>
<body>
	<header>
		<a href="index.php">Главная</a>
		<a href="about.php">Про нас</a>
	</header>
	<h1>Про нас</h1>
	<?php

	?> 
	<footer>Ваши права защищены? &copy; 2025</footer>
</body>
</html> -->

<?php
	$title = "Про нас";
	require "blocks/header.php";
?>	
<h1>Про нас</h1>
<?php
	require "blocks/footer.php";
?>