// 1.2 Nettoyez votre salle Exercice, amélioré

// Crée le tableau des états 
<!DOCTYPE html>
<body>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.2</title>
</head>
<?php

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// Lors du test, modifiez la valeur d'index pour accéder aux valeurs possibles du tableau 
$room_filthiness = $possible_states [ 4 ];

if ( $room_filthiness == "health hazard" ) {
    echo  "<br> Yuk, la chambre est dégoûtante! Nettoyons-la!";
} else  if ($room_filthiness == "dirty") { 
    echo  "<br> Yuk, la pièce est sale: nettoyons-la!";
} else if ($room_filthiness == "clean") { 
	echo  "<br> Rien à faire, la chambre est soignée.";
} else {
    echo "<br> Rien à faire, la chambre est impeccable.";
}
?>
</body>
</html>