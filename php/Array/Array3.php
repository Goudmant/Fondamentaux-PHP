<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exe $me</title>
</head>
<body>
    <!--
    <form method="get" action="">

    </form>
    -->
    <?php
    $soulmate = 'amesoeur';
    $soccer = false;

    $chien = array (
        'firstname' => 'Wookie', 
        'adress' => 'Chemin du saint désert',
        'localisation' => 'panier',
        'age' => '3',
    );

    $chien ['hobbies'] = ['promener'];

    $me = array (
        'firstname' => 'Yvan',
        'lastname' => 'Goudmant',
        'adress' => 'Chemin du saint désert',
        'city' => 'Wépion',
        'age' => '31', 
        'saison' => 'automne', 
        'soccer like' => $soccer,
        'favourite_movies' => array ('fight club', 'Her', 'the hobbit'),
        'mom' => $chien
        
    );

    $soulmate = array(
        'firstname' => 'test',
        'lastname' => 'test1',
        'age' => 30,
        'favourite_movies' => $favorite_movies,
        'sister' => $sister,
    );
    $soulmate['hobbies'] = ["jeux de société", "jeux vidéo", "jeux de chambre"];
    
    $kid_intersect = [];
    $kid_merge = [];
    
    $kid_intersect['hobbies'] = array_intersect($me['hobbies'], $soulmate['hobbies']);
    $kid_merge['hobbies'] = array_merge($me['hobbies'], $soulmate['hobbies']);
    
    echo '<pre>';
    print_r($kid_intersect);
    echo '</pre>';
    
    echo '<pre>';
    print_r($kid_merge);
    echo '</pre>';
    
    $web_development = array(
        'frontend' => [],
        'backend' => [],
    );
    echo '<pre>';
    print_r ($me);
    print_r ($chien);
    echo '</pre>';
    ?>

</body>
</html>