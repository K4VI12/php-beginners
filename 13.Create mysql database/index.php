<?php

require 'functions.php';

$dsn = "mysql:host=<localhost></localhost:3300>;port=3306;dbname=phpbeginner;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from post");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}