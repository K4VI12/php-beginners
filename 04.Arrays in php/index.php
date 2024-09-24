<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in php</title>
</head>

<body>

    <?php
    $names = [
        "Ranil",
        "Anura",
        "Sajith",
        "Seele"
    ];

    ?>

    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= htmlspecialchars($name) ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>