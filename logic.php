<?php

// Pull data from the form

if (isset($_POST['words'])) {
  	$count = $_POST['words'];
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

//Dictionary

if ($dict = file('words.txt')){

	$select_words = [];

	for($i = 0; $i < $count; $i++)  {
		$max = count($dict) -1;
		$rand = rand(0,$max);

		$word = $dict[$rand];

		array_push($select_words, $word);

	}

// Pick a number

if ($number){

    $numbers = "0123456789";

	$generated_numbers = substr(str_shuffle($numbers),0,2);

 }

//Pick a symbol

if ($symbol){

	$symbols = "!@#$%&*-+?=";

	$generated_symbols = substr(str_shuffle($symbols),0,1);
}

//Password Outupt

    $palavras = implode("",$select_words);

	$password = "$generated_numbers$generated_symbols $palavras";

 
}

?>
