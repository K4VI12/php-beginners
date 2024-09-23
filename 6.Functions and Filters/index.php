<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Filters</title>
</head>

<body>
    <?php
    $schools = [
        [
            'name' => 'kularathna college',
            'author' => 'xyz',
            'age' => 30,
            'website' => 'http://example.com'
        ],

        [
            'name' => 'darmashoka college',
            'author' => 'zyx',
            'age' => 170,
            'website' => 'http://example.com'
        ],

        [
            'name' => 'dewananda college',
            'author' => 'tag',
            'age' => 200,
            'website' => 'http://example.com'
        ],
    ];

    $filteredSchools = array_filter($schools, function ($school) {
        return $school['author'] === 'xyz';
    });

    ?>

    <ul>
        <?php foreach ($filteredSchools as $school) : ?>
            <li>
                <a href="<?= htmlspecialchars($school['website']); ?>">
                    <?= htmlspecialchars($school['name']); ?> (<?= htmlspecialchars($school['age']); ?>) - by <?= htmlspecialchars($school['author']); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>
