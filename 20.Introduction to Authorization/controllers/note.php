<?php


$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Note';

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes where id = :id',[
        
        'id' => $_GET['id']

])->fetch();

if(! $note){
    abort();
}

$currentUserId = 1;

if($note['user_id'] != $currentUserId){ //1 means in signify the current user
    abort(Responce::FORBIDDEN);
}



require "views/note.view.php";
