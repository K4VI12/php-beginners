<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays in php</title>
</head>

<body>
    <?php
    $schools = [
        [
            'name' => "kularathna college",
            'age' => 30,
            'website' => 'http://example.com',
        ],

        [
            'name' => 'darmashoka college',
            'age' => 170,
            'website' => 'http://example.com',
        ],

        [
            'name' => 'dewananda college',
            'age' => 200,
            'website' => 'http://example.com',
        ]
    ];
    ?>


    <ul>
        <?php foreach ($schools as $school) : ?>

            <li>

                <a href="<?= $school['website'] ?>">
                    <?= $school['name'] ?> <?= $school ['age']?>

                </a>

            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>