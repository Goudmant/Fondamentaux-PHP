<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2 film</title>
</head>
<body>
    <!--
    <form method="get" action="">

    </form>
    -->
    <?php
    
    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

    foreach($pronouns as $key => $pronoun){
    echo ($key == 2)?$pronoun.' codes'.'<br>':$pronoun.' code'.'<br>';
    }

    $amount_of_lines = 1 ;

while ( $amount_of_lines <= 120 )
{
    echo  $amount_of_lines . ".: Je ne regarderai pas les mouches voler quand j'apprends PHP. <br />" ;
    // écriture abrégée pour 
    // $ amount_of_lines = $ amount_of_lines +1; 
    $amount_of_lines ++;

}
for ($bart = 1; $bart <= 120; $bart++) {
    echo $bart;
}
echo "<br>";

$family = array (
    'Homer',
    'Marge',
    'Lisa',
    'Bart',
    'Magie',
);
//Créez un tableau contenant au moins 10 pays. Ensuite, générez le html qui rendra une boîte de sélection dans un formulaire html 

$countries = array (
    'Albania',
    'Russia',
    'Turkey',
    'Belgium',
    'England', 
    'China',
    'Canada',
    'Atlantis',
    'Tortuga',
    'Narnia',
    'Mordor',
);

$iso = array (
    'AL',
    'RU',
    'TU',
    'BE',
    'EN',
    'CH',
    'CA',
    'AT',
    'TO',
    'NA',
    'MO',
);

?>

<label for="countries">Choose country;</label>
<select name="countries" id="countries">

    <?php
    foreach ($countries as $countries) {
        echo '<option value="'.$countries.'">'.$countries.'</option>';
    }
    echo '</select>';
    ?>

</select>

<?php

$combo = array_combine ($countries, $iso);

?>

<select name="countries" id="countries">
    foreach 


</body>
</html>