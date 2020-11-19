<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.1 Opérateurs ternaires</title>
</head>
<body>
    <form method="get" action="">
        <label for="Genre"> Gender </label>
        <input type="radio" name="Genre" value="Miss"> F
        <input type="radio" name="Genre" value="Mister"> M 
        <input type="submit" name="submit" value="Done">
    </form>

    <?php
    if (isset ($_GET["gender"]) && !empty ($_GET["gender"])){
    $genre = $_GET["Genre"];
    $greeting = ($gender == "female") ? " hola chica " : "hola chico";
    echo $greeting;
    }


    ?>

</body>
</html>