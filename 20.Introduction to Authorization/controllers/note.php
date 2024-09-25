<?php


$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Note';
$currentUserId = 1;

$id = $_GET['id'];

$note = $db->query('SELECT * FROM notes where id = :id',[
        
        'id' => $_GET['id']

])->fetch();

if(! $note){
    abort();
}



if($note['user_id'] != $currentUserId){ //1 means in signify the current user
    abort(Responce::FORBIDDEN);
}



require "views/note.view.php";
