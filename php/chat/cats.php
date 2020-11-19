<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Cats PHP</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="photo">
            <input type="submit">
        </form>
    <?php
    if (isset($_cats['photo']['tmp_name'])) {
        $retour = copy($_cats['photo']['tmp_name'], $_cats['photo']['name']);
        if($retour) {
            echo '<p>La photo a bien été envoyée.</p>';
            echo '<img src="' . $_cats['photo']['name'] . '">';
        }
    }
    ?>
    </body>
</html>