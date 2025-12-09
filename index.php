<!DOCTYPE html>
<html>
<head>
	<title>PHP Lesson</title>
</head>
<body>
<?php
	echo "Miru-<b>Mir!</b>";
	echo "<br>Hallo";
	echo "<br>Это одинокая кавычка \" "; 

	//comment 
		#comment 
			/* 
			 comment 
			 comment
		 	 comment				
			*/

	echo "<br><h3>#4 Математические действия:</h3><br>";
	
	$x = 10; 
	$y = 20;

	echo $x + $y. " - Сложение<br>";
	echo $x - $y. " - Вычитание<br>";
	echo $x * $y. " - Умножение<br>";
	echo $x / $y. " - Деление<br>";
	echo $x % $y. " - Получение остатка при делении<br>";

	$x += 10; // $x = $x + 10 Это тоже самое, только развернуто
	echo $x. " - Прибавили 10 к переменной X.<br>";

	$y = $y - 5; 
	echo $y. " - Отняли 5 от переменной Y.<br>";

	$x++; //$x += 1;
	$y--; //$y -= 1; 

	echo M_PI. ' - Число Пи<br>';
	echo M_E.  ' - Число Е<br>';

	echo abs(-22). ' - Число по модулю <br>';
	echo ceil(3.1). ' - Округляет число до большего <br>';
	echo floor(3.1). ' - Округляет число до меньшего <br>';
	echo round(5.4). ' - Округляет чило до ближайшего <br>';
	echo round(5.6). '<br>';
	echo round(3.1415, 2). ' - Можно указать сколько чисел после точки выводить <br>';

	$rand = mt_rand(1, 20). ' - Можно получить число от 1 до 20. Обнови страницу и поймёшь.<br>';
	$rand++;
	echo $rand; 

	echo min(2, 8, 4, 7, 6, 3). ' - Находит минимальное число <br>';
	echo max(3, 6, 7, 8, 2, 4). ' - Находит максимальное число <br>'; 

	echo "<br><h3>#5 Строковые операции</h3><br>"; 

	$str = "Hello"; 
	echo "VAR: " . $str; 
	echo "<br>VAR: $str"; //сокращённый вариант 
	echo '<br>VAR: $str'; //в одинарных кавычках выводит просто как текст  
	echo "<br>VAR: $str" . '!'; //совмещаем двойный кавычки + одинарные

	echo "<br><input type=\"text\">"; // два слеша перед кавычками нужны чтобы ковычки отображались как обычные символы 
	echo "<br><input type='text'><br>"; //С одинарными кавычками работает нормально

	$length = strlen($str); //выводит длинну строки 
	echo $length;
	echo trim(" Убирает пробелы до и после строки ");
	echo mb_strtolower("<br>Превращает Заглавные Буквы В Строчные"); //для кириллицы 
	echo strtolower("<br>Prevrashchayet Zaglavnye Bukvy v Strochnye"); //для латиницы 
	echo mb_strtoupper("<br>превращает строчные буквы в заглавные");
	echo mb_strtoupper("<br>Wandelt Kleinbuchstaben in Großbuchstaben um.");
	echo mb_strtoupper(trim("<br>убирает пробелы до и после строки. cтрочные буквы в заглавные <br>"));

	echo md5("<br>Пароль123"). ' - Так выглядит закешированный пароль'; 

	echo "<br><h3>#6 Условные операторы</h3>";

	/* 

	$a = 5; 

	if($a == 5) { //Если переменная равна 5
		echo '$a = 5<br>'; 
	}


	$b = 7; 

	if($b !=6) { //Если переменная не равна 6
		echo '$b = ok<br>';
	}


	$str = "max_puknul"; 
	$c = 5;

	if($str == "max_puknul") { //Если переменная $str равна значению "max_puknul"
		echo 'Фууу! Навонял!<br>'; 
	
	} else if($c == 5) {
	  	$res = "Yes"; 
	  	echo $res; 	
	
	} else {
		echo 'Пирданул кто-то другой';	
	} 

	*/


	$a = 5;
	$str = "Hello"; 

	$isWeatherGood = false; 

	if($str != "Hello" || $isWeatherGood == false) { //!$isWeatherGood - сокращенный вариант/. || - или, && - И.
		echo 'First'; 

	} else if($a == 5) {
		$res = "Second";
		echo $res; 

		if($str == "Hello") {
			echo "<br>Yess";
		}			

	}  else if($a > 50) {
	  	echo '$a > 50';		 		  	
	
	} else if($a < 45) { 
		echo '$a < 45';

	} else {
		echo 'NO';
	}
 

	echo "<br><h3>#7 Оператор Switch-case</h3>"

?> 
</body>
</html>
