<?php

// Maak een Array met 3 namen van medeleerlingen.

$namen = array("Tom", "Wout", "Eline");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.

for ($x = 0; $x < count($namen); $x++){
	echo "$namen[$x] <br>";
}

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.

foreach ($namen as $value) {
	echo "$value <br>";
}

$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.

for ($x = 0; $x <= count($naam); $x++){
	echo "$naam[$x] <br>";
}

?>
