<?php

// Check how many words the user wants to use. The default is 1 (min=1 and max=4)  

if (isset($_POST['words']) && $_POST['words']>0 && $_POST['words']<=4) {
  	$count = $_POST['words'];
} else {

	$count = 1;  // This is to show the default value as 1 when I first display the page.  
	
}

// Check if user wants to use a symbol.  
if (isset($_POST['symbol'])) {
	$symbol = true;
} else {
	$symbol = false;
}

// Check if user wants to use a number. 
if (isset($_POST['number'])) {
	$number = true;
} else {
	$number = false;
}

// Check if user wants to use uppercase for all words. 
if (isset($_POST['upper'])) {
	$upper = true;
} else {
	$upper = false;
}

// This is how I can pulled the words from a file called words-linux.txt.
// I exported a dictorary from a Linux server at /usr/share/dict/words and
// created the file called words-linux.txt. It has 305089 words.  
// Some of the words already have the Capital letter. 

if ($dict = file('words-linux.txt')){

	$symbols = ['!','@','#','$','%','^','&','*','?','+']; // Array of symbols
	
	$numbers =[0,1,2,3,4,5,6,7,8,9]; // Array of numbers 

	$array_words = [];  // Array of Words

// For loop to walk trought the words-linux file and push the results on the array_words.
	for($i = 0; $i < $count; $i++)  {
		$max = count($dict) -1;
		$rand = rand(0,$max);
		$word = $dict[$rand];
		array_push($array_words, $word);
	}

// Make the first letter of each word to be uppercase.

	if ($upper) {
		foreach ($array_words as $letter => $word) {
		$array_words[$letter] = ucfirst($word);
		}
	}

// This is how to find the last word on the array_word and prepare to insert a symbol if selected by user. 
	$last = $array_words[count($array_words) -1];
    	
// If number is True then it will be executed:
	if ($number){
		$number_max = count($symbols) -1;
		$number_num = rand(0, $number_max);
		$rand_number = $numbers[$number_num];
		$last .= $rand_number;
 	}

// If symbol is true then it will be executed:
	if ($symbol){
		$symbol_max = count($symbols) -1;
		$symbol_num = rand(0, $symbol_max);
		$rand_symbol = $symbols[$symbol_num];
		$last .= $rand_symbol;
	}

//Password Outupt After check if number or symbol was added. 	
	$array_words[count($array_words) -1] = $last;

// Password with the options selected. It will implode the array_words
	$password = implode('', $array_words);

}

?>