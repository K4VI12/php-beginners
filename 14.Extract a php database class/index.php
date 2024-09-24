<?php

require 'functions.php';

$dsn = "mysql:host=localhost;port=3306;dbname=phpbeginner;charset=utf8mb4";

try {
    // Assuming root has a password
    $pdo = new PDO($dsn, 'root', '1234');
    
    // If no password, use this instead
    // $pdo = new PDO($dsn, 'root', '');
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare("SELECT * FROM post");
    $statement->execute();

    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (empty($posts)) {
        echo "No posts found.";
    } else {
        echo "<ul>";
        foreach ($posts as $post) {
            echo "<li>" . htmlspecialchars($post['title']) . "</li>";
        }
        echo "</ul>";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
