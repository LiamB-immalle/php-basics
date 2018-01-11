<?php

$woord = "quotering";
$punten = 0;

// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt

$letters = str_split($woord);

foreach($letters as $value){

	switch ($value){
		case "q":
			$punten = $punten + 10;
			break;
		case "u":
			$punten = $punten + 4;
			break;
		case "o":
			$punten = $punten + 1;
			break;
		case "t":
			$punten = $punten + 2;
			break;
		case "e":
			$punten = $punten + 1;
			break;
		case "r":
			$punten = $punten + 2;
			break;
		case "i":
			$punten = $punten + 1;
			break;
		case "n":
			$punten = $punten + 1;
			break;
		default:
			break;
	}
}
echo $punten;


?>
