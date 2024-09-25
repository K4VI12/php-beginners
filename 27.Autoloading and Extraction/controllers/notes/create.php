<?php

require 'Validator.php';


$config = require base_path('config.php');

$db = new Database($config['database']);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    if (! $validator->string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of more than 1,000 characters is required';
    }



    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}


view("notes/create.view.php", [
    'heading'=> 'Create Note',
    'errors'=> '$errors'

]);