<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seperate logic template</title>
</head>

<body>

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
