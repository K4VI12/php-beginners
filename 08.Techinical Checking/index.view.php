<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking</title>
</head>

<body>

</body>

    <h1> <?= $company['name']?></h1> 


    <ul>
        <?php foreach ($company['catagories'] as $catagory) :?>

            <li><?=$catagory; ?></li>

        <?php endforeach;?> 
    </ul>
</html>