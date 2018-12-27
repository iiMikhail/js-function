<h1>function</h1>
<?php 

function greeting($name = "Гость", $i = "Добро пожаловать!") {
	if( $i > 0 and $i <=5 ) {
		echo "Привет $name! Хорошего и продуктивного рабочего дня!";
	}
	elseif( $i > 5 and $i <=7 ) {
		echo "Привет $name! Желаю вам хорошо отдохнуть в этот день";
	} else {
		echo "Нет такого дня недели";
	}
}
greeting("Михаил", 8);
 ?>