<?php

require 'functions.php';

$dsn = "mysql:host=localhost;port=3306;dbname=phpbeginner;charset=utf8mb4";
$pdo = new PDO($dsn, 'root', ''); // Add password if necessary

$statement = $pdo->prepare("SELECT * FROM post");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
