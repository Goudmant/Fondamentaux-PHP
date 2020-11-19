//6. L'équipe Girl Soccer
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="">
        <label for="age">Your age : </label>
        <input type="" name="age">
        <label for="genre">Etes vous une femme ?</label>
        <input type="radio" name="genre" value="Miss">Mme.
        <input type="radio" name="genre" value="Mister">Mr
        <input type="submit" name="submit" value="Postuler">
</form>

<?php
if (isset($_GET["age"], $_GET["genre"]) && !empty ($_GET["age"]) && !empty ($_GET["genre"])) {
    $age = $_GET["age"];
    $genre = $_GET["genre"];

    if ($age >= 21 && $age <= 40) {
        if ($genre == "Miss") {
            echo " Bienvenue dans l'équipe! ";
        } else {
            echo " Désolé, vous ne répondez pas aux critères ";
        }
    } 
}
?>

</body>
</html>