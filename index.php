<!-- <!DOCTYPE html>
<html>
<head>
	<title>PHP Lesson</title>
</head>
<body>
	<header>
		<a href="index.php">Главная</a>
		<a href="about.php">Про нас</a>
	</header> -->	
<?php
	$title = "Главная страница";
	require_once "blocks/header.php";
	// include require "blocks/header.php"; 
	// include - позволяет загрузить страницу с отсутствующим файлом. Или добавить еще раз настройки из файла 
	// include_once или require_once - позволяет загрузить файл только один раз на странице
?>	
	<h1>Главная страница</h1>
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


	echo "<br><h3>#9 Цикл for, while и do while. Операторы циклов</h3><br>";
	
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

	echo "<br><h3>#10 Функции. Область видимости.</h3><br>";

		/* function info() {
			echo "Это фукция<br>";
		}

		info(); //Обращаемся к функции, чтобы вывести ее на экран. 
		info(); //Еще раз обращаемся
		info(); //И ещё раз.. */ 

		/*function info($parametr) { //задаем параметр функции 
			echo "$parametr<br>";
		}

		function math($xx, $yy) {
			$ress = $xx + $yy; 
			//echo $ress; 
			info($ress); //вызываем отдельную функцию info 
		} 

		//info(4);  
		//info("Передаём сюда параметры, любые."); 
		//info(5.6); 

		math(4, 6); //на экране будет 10
		math(5, 8); 
		math(7, 7);*/

		function info($parametr) {
			echo "$parametr<br>"; 
		}

		function math($xx, $yy) {
			return $xx + $yy;     //Функция возвращает результат 
		}	

		$res_1 = math(4, 6);
		$res_2 = math(5, 8); 
		$res_3 = math(7, 7); 

		info($res_1);
		info($res_2); 
		info($res_3);


		function summary($array) {
			$summa = 0; 
			foreach ($array as $value) { //Цикл forech
				$summa += $value; 
			}

			return $summa; 
		}

		$spisok = [5, 7, 3]; 
		echo summary($spisok)."<br>"; 
		echo summary([5, 2, 3])."<br>";

		//Область видимости 

		function xinfo() {
			global $x0; //Теперь будет выводиться глобальная переменная 0 
			$x0 = 0; //Видна исключительно в пределах функции
		} 

		function click() {
			static $count;
			//$count = 0;  //Тогда на экране будет 1111
			$count++; 
			echo $count.'<br>'; 
		}

		click();
		click(); 
		click(); 
		click(); 

		//$x0 = 10; 
		//xinfo(); 
		//echo $x0; //Видимая область. Переменная видна в пределах всего документа 

		echo "<br><h3>#13 Работа с датой и временем</h3><br>";

		echo "<a href='https://www.php.net/manual/en/datetime.format.php' target='_blank'>Символы для вывода даты</a><br>";
		date_default_timezone_set('Europe/Vienna');
		//echo date('l, d F o, H:i', time() + 10000).'<br><br>';
		echo date('m-d H:i:s', strtotime("+1 Month"));

		//echo time(); 
		echo "<p>" . time() . " — показывает количество секунд с 1 января 1970 г. (начало эпохи Unix-систем)</p>"; 
		//. — это конкатенация строк (склеивание)

		echo "<br><span id='clock'></span><br>";


		echo "<br><h3>#14 Встроенные PHP функции</h3><br>";
		"<br>";

		$lis = [5, 7, 3, 6, 7, 8];
		unset($lis[1]); // убирает элемент из массива
		sort($lis); // сортирует массив 
		rsort($lis); // сортирует в обратном порядке 
		// shuffle($lis); // разбрасывает элементы по разным индексам 
		// echo in_array(7, $lis); // находит число в массиве. 1 на экране означает True

		/* if(in_array(4, $lis) == "")
			echo "Not found";
		else
			echo "Found"; */

		$arr = array_slice($lis, 2, 2); //$arr = array_slice($lis, 0, count($lis));
		print_r($arr); //var_dump($arr); 
		echo "<br>";

		$arr_1 = [5, 7];
		$arr_2 = [6, 8, 9]; 
		$arr_3 = array_merge($arr_1, $arr_2); 
		print_r($arr_3); 
		echo "<br>"; 

		print_r($lis); 	
		echo "<br>";

		$b = "10"; 
		echo gettype($b). '<br>'; 
		echo is_numeric($b). '<br>';
		echo is_integer($b). '<br>';
		echo is_array($b). '<br>';

		$str = "Example"; 
		echo strpos($str, "am"). '<br>'; // удобная функция для нахождения какого-либо символа строки. 

		$words = "John, Bob, Alex"; 
		$arr_words = explode(",", $words); 
		print_r($arr_words);
		echo '<br>' .implode(" | ", $arr_words);  

		echo "<br><h3>#15 Работа с файлами</h3><br>"; 

		//$file = fopen("text.text", "w");
 	    //$file = fopen("text.text", "a");
        //fwrite($file, "\nExample text\n Хеллоу");
		//fclose($file); 

		$filename = "text.text";

		$file = fopen($filename, "r");
		
		$content = fread($file, filesize($filename));

		fclose($file);

		//echo $content; 
		echo "<pre>".$content."<pre><br>"; // Так содержимое переходит на новую строку 

		//file_put_contents("a.text", "Example\n Hello");      
		echo file_get_contents("a.txt")."<br>";
		echo file_exists("a.txt"). "<br>"; // Показывает, есть ли такой файл
		//rename("a.txt", "new_name.txt"); 
		//unlink("new_name.txt"); // Удаляет файл 
		
		echo __FILE__."<br>"; // Показывает путь к текущему файлу 
		
		echo fileperms(__FILE__); // Показывает права доступа 
		chmod(__FILE__, 0777); // Меняет права доступа к файлу.  

		echo "<br><h3>#16 Функция phpinfo() и массив $_server</h3><br>"; 

		//phpinfo();
		echo '<pre>';
		print_r($_SERVER);
		echo '</pre>';  

		//echo $_SERVER['HTTPS'];
		 
		// Переадресация:  
		/* echo $_SERVER['HTTP_HOST'].' - '.$_SERVER['REQUEST_URI']."<br>"; 
		echo $_SERVER['HTTP_USER_AGENT'];  

		if($_GET['source'] != "") {
			$link = explode("?source=", $_SERVER['REQUEST_URI']);
			$redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];

			header('HTTP/1.1 301 Moved Permanently');
			header('Location: '.$redirect); 
			exit(); 
		} */

		echo "<br><h3>#17 Отправка почты с сайта</h3><br>"; 

		$message = "Сообщение по почте"; 
		$to = "alexmaslenko@gmail.com";
		$from = "photokopilka@gmail.com"; 
		$subject = "Тема сообщения"; 

		$subject = "=?utf-8?B?".base64_encode($subject)."?="; //кодировка для темы 
		$headers = "from: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
		mail($to, $subject, $message, $headers);    

?> 
	<!-- JS нужен чтобы часы обновлялись на странице -->
	<script> 
		function updateClock() {
    		const now = new Date();

    		const options = {
        		timeZone: 'Europe/Vienna',
        		day: '2-digit',
        		month: 'long',
        		year: 'numeric',
        		hour: '2-digit',
        		minute: '2-digit',
        		second: '2-digit'
    		};

    		const formatted = new Intl.DateTimeFormat('en-GB', options).format(now);

    		document.getElementById('clock').innerHTML = formatted;
		}

		setInterval(updateClock, 1000);
		updateClock();
	</script>


<!-- <footer>Ваши права защищщены? &copy; 2025</footer>-->
<?php
	require "blocks/footer.php";
?>
</body>
</html>
