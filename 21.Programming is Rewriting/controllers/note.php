<?php


$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Note';
$currentUserId = 1;

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes where id = :id',[
        
        'id' => $_GET['id']

])->findOrFail();
// above for fetching the database 

authorize($note['user_id'] === $currentUserId);
// this for authorization

require "views/note.view.php";
