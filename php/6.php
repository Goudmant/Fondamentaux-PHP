<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8. "L'école est nul!" Exercice</title>
</head>
<body>
    <form method="get" action="">
        <label for="Note">Ta Note</label>
        <input type="Number" name="Note">
        <input type="submit" name="submit" value="Résult">
    </form>
    <?php
    //8. "L'école est nul!" Exercice
    if (isset($_GET["Note"]) && !empty ($_GET["Note"])) {
        $note = $_GET["Note"];

        if ($note <= 4) {
        echo "Ce travail est vraiment mauvais. Quel gamin stupide!";
    } elseif ($note >= 5 && $note <= 9) {
        echo "Ce n'est pas suffisant. Il faut étudier davantage.";
    } elseif ($note == 10 ) {
        echo "à peine assez!";
    } elseif ($note >= 11 && $note <= 14) {
        echo "Pas mal!";
    } elseif ($note >= 15 && $note <= 18) {
        echo "Bravo, bravissimo!";
    } elseif ($note >= 19 && $note <= 20) {
        echo "Trop beau pour être vrai: affrontez le tricheur!";
    } else {
        echo $note;
    }
    
    }

    

    ?>
</body>
</html>