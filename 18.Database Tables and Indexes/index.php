<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from post where id = ?";
//$query = "select * from post where id = :id";  this is also correct 




//dont inline this is the correct way
$posts = $db->query($query, [$id])->fetch();

dd($posts);
