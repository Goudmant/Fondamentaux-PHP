<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plus d'exercices de tableau</title>
</head>
<body>
    <!--
    <form method="get" action="">

    </form>
    -->
    <?php
$web_development['frontend'][] = 'XHTML';
$web_development['backend'][] = 'Ruby on rails';
$web_development['frontend'][] = 'CSS';
$web_development['frontend'][] = 'Flash';
$web_development['frontend'][] = 'Javascript';
$web_development['frontend'] = array_replace($web_development['frontend'],array_fill_keys(array_keys($web_development['frontend'], 'XHTML'),'HTML'));
unset($web_development['frontend'][array_search('Flash',$web_development['frontend'])]);

echo '<pre>';
print_r($web_development);
echo '</pre>';
?>
</body>
</html>
