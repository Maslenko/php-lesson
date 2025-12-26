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
 

	echo "<br><h3>#7 Оператор Switch-case</h3><br>";

	$x = 0;
	
	switch($x) {
		case 5:	
			echo "Var: 5";
			break;
		case 7:
			echo "Var: 7";
			break;
		case 9:
			echo "Var: 9";
			break;
		case 6:
			echo "Var: 6";
			break; 
		default: 
			echo "Default Work!";
			break; 	
	}
 

	echo "<br><h3>#8 Массивы данных. Одномерные и многомерные</h3><br>";

		// Одномерные массивы
		$nums = array(4, 5, 7, 2, 0, -33, 6);
		$nums[1] = 54; //Меняем значение массива. 
		echo $nums[1].'<br>'; 

		// Ассоциативные массивы 
		$arr = [4, true, 6, "8", 0.4, 'c', 24, 16]; 
		$arr[0] = "false"; //Меняем значение на false. 
		echo $arr[0] . ' ' . $arr[1].'<br>'; //true при выводе через echo → 1
		
		$list = ["age" => 50, "name" => "Tito", "hobby" => "Musik"];
		$list["name"] = "Tarantula";
		echo $list["name"].'<br>';  
		
		// Многомерные массивы 
		$matrix = [ 
			[4, 6.4, 8], 
			[3, 2], 
			[1, 5, 8, "9"]
		];
		$matrix[0][1] = 4; //Меняем значение 6.4 на 4
		echo $matrix[0][1];


	echo "<br><h3>#9 Цикл for, while и do while. Операторы циклов</h3></br>";
	
	// Цикл for
	// for($i = 100; $i >= 20; $i -= 5) 	
	//	 echo $i.'<br>';  

	// Цикл while
	//	$i = 1; 
	//	while($i <= 10) {
	//		echo $i.'<br>';
	//		$i++;  
	//	} 

	// Цикл Do While 
	//   $i = 100; 
	//   do {
	//   		echo $i; 
	//   }	while($i < 10);  

	// Операторы в циклах 
	// for($el = 100; $el > 10; $el /=2) {
	//	if($el < 15)
	//		break; 

	//	if($el % 2 == 0)
	//		continue;  	 

	//	echo $el.'<br>'; 
	// }   

	// $list = [5, 7, 3, 8, "some", 45.7]; 

	// for($i = 0; $i < count($list); $i++)
	//	echo "Element $i: $list[$i]<br>"; 

	// Ассоциативный массив 

	$list = ["age" => 45, "name" => "Alex", "hobby" => "Snowboard"];
	$arr = [5, 6, 8, 9];
	//	foreach ($list as $item => $value) {
	//		echo "Key: $item. Value: $value. <br>";
	//	}
	foreach ($arr as $i => $value) {
		echo "Index: $i. Value: $value.<br>";
	}
?> 	
</body>
</html>
