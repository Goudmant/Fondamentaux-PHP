<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $name = "Yvan";
    $age = "31";
    $color = "vert";
    $family = ["Jonathan", "Iñaki"];
    $hungry = false;

    echo '<p> Bonjour mon nom est '. $name . '.</p>';
    echo '<p> jai '. $age . 'years old.</p>';
    echo '<p> Mes yeux sont '. $color . '</p>';
    echo '<p> mon grand frère cest '. $family[0] .'</p>';
?>
</body>
</html>