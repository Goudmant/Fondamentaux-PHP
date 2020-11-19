// 3. "Salutations différentes selon l'âge" Exercice
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
    <input type="submit" name="submit" value="greet me now">
    </form>
<?php
if (isset($_GET["age"]) && !empty ($_GET["age"])) {
    $age = $_GET["age"];
    // si l'age <= 12 affiche Hello Kiddo 
    if ($age <= 12) {
        echo "Hello kiddo";
    } elseif ($age >= 12 && $age <= 18) {
        echo "Hello teenager";
    } elseif ($age >= 18 && $age <= 115) {
        echo "Hello Grandpa";
    } else {
        echo "Mamamiaaaa";
    }
}

?>

</body>
</html>

