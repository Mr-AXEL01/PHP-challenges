<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>challenge 3</title>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <?php
    $names = [
        "AMAZIGH",
        "AZAYI",
        "OSTOR"
    ];
    ?>
    <h3>best 3 name in AMAZIGH culter :</h3>
    <ul>
        <?php foreach ($names as $name):?>
            <li><?=$name?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>