<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.2 unicorn.php</title>
</head>
<body>
        <form method="GET" action="">
        <label for="nature">quesque tu es </label>
        <input type="radio" name="nature" value="humain"> What the f**
        <input type="radio" name="nature" value="cat"> Miow 
        <input type="radio" name="nature" value="Unicorne"> cheval a corne  
        <input type="submit" name="submit" value="Done">
    </form>

    <?php
    $nature = $_GET["nature"];

    $humain = '<iframe src="https://giphy.com/embed/10FtRf9SBSqQlG" width="480" height="356" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cat-human-futurama-10FtRf9SBSqQlG">via GIPHY</a></p>';
    $cat = '<iframe src="https://giphy.com/embed/xT77XZrTKOxycjaYvK" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/cheezburger-cats-glasses-nerds-xT77XZrTKOxycjaYvK">via GIPHY</a></p>';
    $unicorn = '<iframe src="https://giphy.com/embed/LiWsL77P4tA9a" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/csak-unicorn-gym-LiWsL77P4tA9a">via GIPHY</a></p>';

    if (isset ($_GET["nature"]) && !empty ($_GET["nature"])) echo ($nature == "humain" ? $humain : ($nature == "cat" ? $cat : $unicorn));
 
    // image sans le lien <img></img>
    ?>

</body>
</html>