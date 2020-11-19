// 3. "Salutations différentes selon l'âge" Exercice 4 et 5. Affichez un message d'accueil différent selon l'âge, le sexe et la langue maternelle de l'utilisateur.
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
    <label for="genre">Your zizi or not ? : </label>
    <input type="radio" name="genre" value="Mister">Un homme 
    <input type="radio" name="genre" value="Miss">Une Femme 
    <label for="language">you speeck ANglishj ? </label>
    <input type="radio" name="language" value="Oui">Yes
    <input type="radio" name="language" value="Non">No
    <input type="submit" name="submit" value="greet me now">
    </form>

<?php

if (isset($_GET["age"], $_GET["genre"], $_GET["language"]) && !empty ($_GET["age"]) && !empty ($_GET["genre"]) && !empty ($_GET["language"])) {
    $age = $_GET["age"];
    $genre = $_GET["genre"];
    $language = $_GET["language"];
    // si l'age <= 12 affiche Hello Kiddo 
    if ($age <= 12) {
        if ($genre == "Miss") {
            if ($language == "Oui" ) {
                echo "Hello little Miss! ";
            } elseif ($language == "Non") {
                echo "Bonjour petite fille! ";
            }
        } elseif ($genre == "Mister") {
            if ($language == "Oui" ) {
                echo "Hello little boy";
            } elseif ($language == "Non" ) {
                echo "Bonjour petit garcon"; 
            }
        }
    } elseif ($age >= 12 && $age <= 18) {
        if ($genre == "Miss") {
            if ($language == "Oui"){
                echo "Hello Miss Teen";
            } elseif ($english == "Non") {
                echo "Bonjour jeune fille";
            }
        } elseif ($genre == "Mister") {
            if ($language == "Oui") {
                echo "Hello Mister Teen";
            } elseif ($language == "Non") {
                echo "Bonjour jeune homme";
            }
        }
    } elseif ($age >= 18 && $age <= 115) {
        if ($genre == "Miss") {
            if ($language == "Oui" ) {
                echo "Hello Grandma";
            } elseif ($language == "Non") {
                echo "Bonjour Grand mere";
            echo "Hello Grandma";
            }
        } elseif ($genre == "Mister") {
            if ($language == "Oui" ) {
                echo "Hello Grandpa";
            } elseif ($language == "Non") {
                echo "Bonjour Grand pere";
            }
        }
    } else {
        echo "Mamamiaaaa";
    }
    
};


?>

</body>
</html>