<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Beginners - Variables</title>
</head>

<body>
    <h1>
        <?php
        
        $counter = 7;

        function incrimentCount()
        {
            global $counter; // Access the global variable
            $counter++; //incriment the $counter 
        }

        function decrimntCount()
        {
            global $counter; // Access the global variable
            $counter--; //decrimnt the $counter 
        }

        incrimentCount();
        incrimentCount();
        decrimntCount();

        echo $counter; 
        ?>

    </h1>
</body>

</html>