<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionnelle</title>
</head>
<body>
<?php
if ( $temperature > 15 ) {
// code à exécuter si la condition résulte TRUE 
$vêtements = "T-shirt" ;
$should_i_wear_a_scarf = false ;
} else {
// code à exécuter si la condition aboutit FALSE 
$vêtements = "Pull-over" ;
$should_i_wear_a_scarf = true ;
}

if ( $should_i_wear_a_scarf == true ) {
	// c'est une fonction "fausse" pour le bien de l'exemple 
	// cette fonction n'est exécutée que dans la condition est true 
	grab_scarf_from_door_hanger ();
}
 // La fonction suivante sera exécutée à chaque fois, 
 // mais son argument $ vêtements change en fonction du résultat 
 // de notre structure conditionnelle précédente 
cover_my_chest_with ( $vêtements );

?>
</body>
</html>