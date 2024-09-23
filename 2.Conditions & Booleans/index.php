<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions and Boolean</title>
</head>

<body>
    <h1>
        <?php
        
        $name = "Kavindu";
        $age = 22;
        $isStudent = true;

        // Using the variables
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";    

        if ($isStudent) {
            echo "You are a student.";   
        } else {
            echo "You are not a student.";
        }
        ?>

    </h1>
</body>

</html>