// 2. "Salutations différentes selon l'heure" Exercice
date_default_timezone_set ('Europe / Bruxelles');
<?php

// Comment obtenir l'heure actuelle en PHP? Google est ton ami ;-)

// Tester la valeur de $now et afficher le bon message selon les spécifications.
$now = date ("H:i:s");

if ($now >= date("5:00") && $now <= date ("9:00")) {
	echo "Good morning !";
} elseif ($now >= date ("9:01") && $now <= date ("12:00")) {
	echo "Good day !";
} elseif ($now >= date ("12:01") && $now <= date ("16:00")) {
	echo "Good evening !";
} else {
	echo "Good night !";
}
?>