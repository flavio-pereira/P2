<?php

// Pull data from the form

if (isset($_POST['count'])) {
  	$count = $_POST['count'];

  	if (!is_numeric($count)) {
		return 'Sorry, you need to type only numbers';
	} 

} else {
	$count = 1;

}

if (isset($_POST['uppercase'])) {
	$uppercase = true;
} else {
	$uppercase = false;
}

if (isset($_POST['symbol'])) {
	$symbol = true;
} else {
	$symbol = false;
}

if (isset($_POST['number'])) {
	$number = true;
} else {
	$number = false;
}


if ($words = file('words.txt')){

	$selected_words = [];

	for($i = 0; $i < $count; $i++)  {
		$max = count($words) -1;
		$rand = rand(0,$max);

		$word = $words[$rand];

		echo $word . '<br />' ;

		array_push($slected_words, $word);

	}

  if ($uppercase){

}

if ($symbol){

}
if ($number){

}

}