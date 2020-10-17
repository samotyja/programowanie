<?php
   $text = <<<T
	Teb - kurs
	programowania<br>
T;

	echo "$text<br>";
	echo nl2br($text);

	$name = 'JanUsZ';

	echo "$name<br>";
	//zamiana na małe litery
	echo $name = strtolower($name), '<br>';

	//zamiana na duże litery
	echo $name = strtoupper($name), '<br>';

	//zamiana pierwszej litery na dużą a pozostałych na małe
	echo $name = ucfirst(strtolower($name)),'<br>';


//lorem ipsum

$lorem= <<<LOREM
Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque excepturi alias praesentium, culpa, sapiente quam eaque obcaecati id eos officiis asperiores eveniet animi eligendi odio, quisquam similique possimus doloribus repudiandae!<br>

LOREM;

echo $lorem, '<br>';
echo wordwrap($lorem, 40, '<br>');
echo wordwrap($lorem, 40, '<hr>');

//czyszczenie zawwartości bufora
	ob_clean();

//białe znaki
	$name = 'Anna';
	$name1 = '  Anna ';

	//sprawdzanie długości zmiennych
	echo 'Długość $name: ',strlen($name);
	echo '<br> Długośc $name1: ',strlen($name1);

	//wyczyśc zmienną $name1 z białych znaków
	echo '<br>';
	echo strlen(trim($name1)),'<hr>';

	//przeszukiwanie ciągó znaków
	$address = 'Poznań, ul.Rynek Jeżycki 1, tel. (61)123-45-67';
	echo strstr($address, 'tel'),'<br>';

	//odwrotnośc powyższej funkcji
	$address = 'Poznań, ul.Rynek Jeżycki 1, tel. (61)123-45-67';
	echo strstr($address, 'tel', true),'<br>';

	//ignoruje rozmiar liter
	$address = 'Poznań, ul.Rynek Jeżycki 1, tel. (61)123-45-67';
	echo stristr($address, 'Tel'),'<br>';

	$mail = strstr('janusz@gmail.com', '@');
	echo "$mail<br>";

	$mail = strstr('janusz@gmail.com', 64);
	echo "$mail<br>";

//substr
	echo substr('Janusz Kowalski',7, 5);
	ob_clean();

//zamiana ciągów
	$replace = str_replace('korona', 'grypa', 'korona jest niebezpieczna');
	echo $replace;

//Ćwiczenie: Usuń z loginu polskie znaki

$login = 'bączek';
$censure = array('ą', 'ę', 'ł', 'ś', 'ć','ź','ż')

?>