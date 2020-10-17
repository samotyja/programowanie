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
	echo $name1= trim($name1, ' ');
	echo '<br> Długośc $name1: ',strlen($name1);









?>